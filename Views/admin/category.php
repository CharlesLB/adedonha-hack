<?php $v->layout("admin/_theme"); ?>

<div class="create">
    <div class="form_ajax" style="display: none"></div>
    <form class="form" name="gallery" action="<?= $router->route("category.create"); ?>" method="post" enctype="multipart/form-data">
        <label>
            <input type="text" name="name" placeholder="Nome da categoria:" />
        </label>
        <button>Cadastrar Categoria</button>
    </form>
</div>

<section class="categories">
    <?php
    if (!empty($categories)) :
        foreach ($categories as $category) :
            $v->insert("admin/fragments/category", ["category" => $category]);
        endforeach;
    endif;
    ?>
</section>

<?php $v->start("js"); ?>
<script>
    $(function() {
        function load(action) {
            var load_div = $(".ajax_load");
            if (action === "open") {
                load_div.fadeIn().css("display", "flex");
            } else {
                load_div.fadeOut();
            }
        }

        $("form").submit(function(e) {
            e.preventDefault();
            var form = $(this);
            var form_ajax = $(".form_ajax");
            var categories = $(".categories");

            $.ajax({
                url: form.attr("action"),
                data: form.serialize(),
                type: "POST",
                dataType: "json",
                beforeSend: function(){
                    load("open");
                },  
                success: function (callback){
                    if(callback.message){
                        form_ajax.html(callback.message).fadeIn();
                    }else{
                        form_ajax.fadeOut(function(){
                            $(this).html("");
                        });
                    }

                    if (callback.category) {
                        categories.prepend(callback.category);
                    }
                },
                complete: function(){
                    load("close");
                }
            });
        });

        $("body").on("click", "[data-action]", function(e) {
            e.preventDefault();
            var data = $(this).data();
            var div = $(this).parent();

            $.post(data.action, data, function(){
                div.fadeOut();
            },"json").fail(function(){
                alert("Erro ao processar requisição!");
            });
        });
    });
</script>
<?php $v->end(); ?>