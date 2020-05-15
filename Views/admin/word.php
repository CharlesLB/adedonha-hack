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

<div class="listSpace list"></div>

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

        $("select").change(function() {
            var select = $(this);
            var formSpace = $(".formSpace");
            var list = $(".listSpace");
            var category = select.val();

            $.ajax({
                url: "<?= $router->route("word.show"); ?>",
                data: {
                    category_name: category
                },
                type: "POST",
                dataType: "json",
                beforeSend: function() {
                    load("open");
                },
                success: function(callback) {
                    list.html("");
                    formSpace.html("");

                    if (callback.wordList) {
                        list.prepend(callback.wordList);
                    }

                    if (callback.wordForm) {
                        formSpace.prepend(callback.wordForm);
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