<?php $v->layout('web/_theme'); ?>

<div class="app">
    <div class="left">
        <form action="">
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
                <th>Categoria</th>
                <th>Resposta</th>
            </tr>

            <?php 
            for ($i=0; $i < 12; $i++):
                $v->insert("web/fragments/appAnswer");
            endfor; 
            ?>
        </table>
    </div>
</div>

<footer>
    <a target="_blank" rel="noopener noreferrer" href="<?= GITHUB; ?>">
        <img src="<?= url("/Views/web/assets/img/github.png"); ?>" className="rounded mx-auto d-block" alt="Imagem do produto" />
    </a>
</footer>