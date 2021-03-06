<?php $v->layout('web/_theme'); ?>

<header>
    <div class="intro">
        <div class="text">
            <h1>Erro <?= $error; ?> </h1>
            <h2>Parece que algo inesperado aconteceu!</h2>

            <a class="button" href="<?= url('/'); ?>">Retornar a aplicação</a>
        </div>
        <img id="logo" src="<?= url("/Views/web/assets/img/error.svg"); ?>" />
    </div>
</header>

<div class="wave wave-header">
    <div style="height: 150px; overflow: hidden;">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
        </svg>
    </div>
</div>
</section>