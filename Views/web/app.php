<?php $v->layout('web/_theme'); ?>

<div class="app">
    <div class="left">
        <form name="gallery" action="<?= $router->route("match.search"); ?>" method="post" enctype="multipart/form-data">
            <input type="text" placeholder="Letra" maxlength="1">
            <button>Buscar</button>
        </form>

        <div class="advertisement">
            <h1>Anúncio</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At dolorum corrupti voluptatem voluptatum quasi assumenda ab quod quidem blanditiis, molestias quam qui iusto dolorem nostrum officia magnam praesentium ex. Quo.</p>
        </div>
        <div class="advertisement">
            <h1>Anúncio</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At dolorum corrupti voluptatem voluptatum quasi assumenda ab quod quidem blanditiis, molestias quam qui iusto dolorem nostrum officia magnam praesentium ex. Quo.</p>
        </div>
    </div>
    <div class="right">
        <table>
            <tr>
                <td colspan=2 >Nenhuma letra foi selecionada</td> 
            </tr>
        </table>
    </div>
</div>

<footer>
    <a target="_blank" rel="noopener noreferrer" href="<?= GITHUB; ?>">
        <img src="<?= url("/Views/web/assets/img/github.png"); ?>" className="rounded mx-auto d-block" alt="Imagem do produto" />
    </a>
</footer>

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
                data: form.serialize(), categories:<?= $categories ?>,
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

                    if (callback.category) {
                        categories.prepend(callback.category);
                    }
                }
            });
        });
    });
</script>
<?php $v->end(); ?>