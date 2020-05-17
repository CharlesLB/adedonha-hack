<form class="form" name="words" action="<?= $router->route("word.create"); ?>" method="post" enctype="multipart/form-data">
    <label>
        <input type="text" name="name" class="word-input" placeholder="Palavra desejada" data-id-category="<?= $category_id?>" />
    </label>
        <input class="id_category" type="number" name="id_category" value ="<?= $category_id ;?>"/>
    <button>Cadastrar Palavra</button>
</form>

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
            var list = $(".listSpace");
            var input = $(".word-input");

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

                    list.html("");
                    input.val("");

                    if (callback.wordList) {
                        list.prepend(callback.wordList);
                    }
                },
                complete: function() {
                    load("close");
                }
            });
        });

    });
</script>