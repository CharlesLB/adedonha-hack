<?php $v->layout('web/_theme'); ?>

<header>
    <div class="intro">
        <div class="text">
            <h1>Bem Vindo ao Adedonha Hack</h1>
            <h2>Basta dizer as categorias e qual a letra que daremos todas as respostas</h2>

            <a class="button" href="#start">Começar a trapacear!</a>
        </div>
        <img id="logo" src="<?= url("/Views/web/assets/img/header.svg"); ?>" />
    </div>
</header>

<div class="wave wave-header">
    <div style="height: 150px; overflow: hidden;">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #fff;"></path>
        </svg>
    </div>
</div>

<div class="invite">
    <h3>Dê uma estrela na aplicação no GitHub</h3>
    <a href="<?= GITHUB ?>">Acessar aplicação no GitHub</a>
</div>

<div class="wave">
    <div style="height: 150px; overflow: hidden;">
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.99 C150.00,150.00 271.49,-49.99 500.00,49.99 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #fff;"></path>
        </svg>
    </div>
</div>
<section id="start">
    <div class="container">
        <div class=" card left">
            <h3>Categorias disponíveis</h3>
            <ul>
                <?php
                for ($i = 0; $i < 7; $i++) :
                    $v->insert("web/fragments/category");
                endfor;
                ?>
            </ul>
        </div>
        <div class="card right">
            <h3>Categorias selecionadas</h3>
            <ul>
                <?php
                for ($i = 0; $i < 4; $i++) :
                    $v->insert("web/fragments/category");
                endfor;
                ?>
            </ul>
        </div>
    </div>
    <button class="button">Começar</button>
</section>

<footer>
    <a target="_blank" rel="noopener noreferrer" href="<?= GITHUB ?>">
        <img src="<?= url("/Views/web/assets/img/github.png"); ?>" className="rounded mx-auto d-block" alt="Imagem do produto" />
    </a>
</footer>