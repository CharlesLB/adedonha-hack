<?php $v->layout("admin/_theme"); ?>

<div class="create">
    <div class="form_ajax" style="display: none"></div>
    <label>
        <div class="div-select">
            <select name="categories">
                <option value="" selected disabled>Escolha a categoria</option>
                <?php
                if (!empty($categories)) :
                    foreach ($categories as $category) : ?>
                        <option value="<?= "{$category->name}" ?>"><?= "{$category->name}" ?></option>
                <?php endforeach;
                endif;
                ?>
            </select>
        </div>
    </label>
    <div class="formSpace"></div>
</div>

<div class="listSpace"></div>

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

        $("select").change(function(){
            var select = $(this);
            var formSpace = $(".formSpace");
            var words = $(".words");
            var category = select.val();
            console.log(category)

            $.ajax({
                url: "<?= $router->route("word.show"); ?>",
                data:{category:category},
                type: "POST",
                dataType: "json",
                beforeSend: function(){
                    load("open");
                },
                success: function(callback){
                    if (callback.word) {
                        words.prepend(callback.word);
                    }
                }
            });
        });

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
                beforeSend: function() {
                    load("open");
                },
                success: function(callback) {
                    if (callback.message) {
                        form_ajax.html(callback.message).fadeIn();
                    } else {
                        form_ajax.fadeOut(function() {
                            $(this).html("");
                        });
                    }

                    if (callback.category) {
                        categories.prepend(callback.category);
                    }
                },
                complete: function() {
                    load("close");
                }
            });
        });

        $("body").on("click", "[data-action]", function(e) {
            e.preventDefault();
            var data = $(this).data();
            var div = $(this).parent();

            $.post(data.action, data, function() {
                div.fadeOut();
            }, "json").fail(function() {
                alert("Erro ao processar requisição!");
            });
        });
    });
</script>
<?php $v->end(); ?>