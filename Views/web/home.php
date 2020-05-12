<?php $v->layout('web/_theme'); ?>

<header>
    <div class="intro">
        <div class="text">
            <h1>Bem Vindo ao Adedonha Hack</h1>
            <h2>Basta dizer as categorias e qual a letra que daremos todas as respostas</h2>

            <a href="#start">Começar a trapacear!</a>
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

<section id="start">
    <div class="container">
        <div class=" card left">
            <h3>Categorias disponíveis</h3>
            <ul>
                <li>
                    <input id="categoria1" type="checkbox">
                    <label for="categoria1">Categoria 1</label>
                </li>
                <li>
                    <input id="categoria1" type="checkbox">
                    <label for="categoria1">Categoria 1</label>
                </li>
                <li>
                    <input id="categoria1" type="checkbox">
                    <label for="categoria1">Categoria 1</label>
                </li>
                <li>
                    <input id="categoria1" type="checkbox">
                    <label for="categoria1">Categoria 1</label>
                </li>

                <li>
                    <input id="categoria1" type="checkbox">
                    <label for="categoria1">Categoria 1</label>
                </li>
                <li>
                    <input id="categoria1" type="checkbox">
                    <label for="categoria1">Categoria 1</label>
                </li>

            </ul>
        </div>
        <div class="card right">
            <h3>Categorias selecionadas</h3>
            <ul>
                <li>
                    <input type="checkbox"> Categoria 1
                </li>
                <li>
                    <input type="checkbox"> Categoria 1
                </li>
                <li>
                    <input type="checkbox"> Categoria 1
                </li>
            </ul>
        </div>
    </div>
    <button>Começar</button>
</section>