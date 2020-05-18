<?php $v->layout('web/_theme'); ?>

<div class="app">
    <div class="left">
        <form name="gallery" action="<?= $router->route("match.search"); ?>" method="post" enctype="multipart/form-data">
        <div class="main">
            <input class="letter" type="text" placeholder="Letra" name="letter" maxlength="1" required>
            <button>Buscar</button>
        </div>
            <div class="categories">
                <?php
                foreach ($categories as $category): 
                    $v->insert("web/fragments/category", ["category" => $category]);
                endforeach; 
                ?>
            </div>
        </form>
    </div>
    <div class="right">
        <div class="form_ajax" ></div>
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
        $("form").submit(function(e) {
            e.preventDefault();
            var form = $(this);
            var table = $("table");
            var input = $(".letter");
            var form_ajax = $(".form_ajax");

            $.ajax({
                url: form.attr("action"),
                data: form.serialize(),
                type: "POST",
                dataType: "json",  
                success: function (callback){
                    if(callback.message){
                        form_ajax.text(callback.message);
                    }else{
                        form_ajax.fadeOut(function(){
                            $(this).html("Selecione ao menos uma categoria");
                        });
                    }
                }
            });
        });
    });
</script>
<?php $v->end(); ?>