<?php $v->layout("admin/_theme"); ?>

<div class="create">
    <div class="form_ajax" style="display: none"></div>
    <form class="form" name="gallery" action="<?= $router->route("category.create"); ?>" method="post" enctype="multipart/form-data">
        <label>
            <input class="input" type="text" name="name" placeholder="Nome da categoria:" />
        </label>
        <button>Cadastrar Categoria</button>
    </form>
</div>

<section class="categories list">
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
                success: function (callback){
                    if(callback.message){
                        form_ajax.html(callback.message).fadeIn();
                    }else{
                        form_ajax.fadeOut(function(){
                            $(this).html("");
                        });
                    }

                    $(".input").val("");

                    if (callback.category) {
                        categories.prepend(callback.category);
                    }
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