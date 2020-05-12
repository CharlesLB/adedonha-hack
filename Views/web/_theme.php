<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= url("/Views/web/assets/css/styles.css?4"); ?>" />
    <title><?= $title; ?></title>
</head>

<body>
    <div class="main_content">
        <?= $v->section('content'); ?>
    </div>

    <footer>
        <a target="_blank" rel="noopener noreferrer" href="https://github.com/CharlesLB/dev-precisa">
            <img src="<?= url("/Views/web/assets/img/github.png");?>" className="rounded mx-auto d-block" alt="Imagem do produto" />
        </a>
    </footer>

    <!--
    ─── AJAX ────────────────────────────────────────────────────────────────────
    -->

    <div class="ajax_load">
        <div class="ajax_load_box">
            <div class="ajax_load_box_circle"></div>
            <div class="ajax_load_box_title">Aguarde, carregando!</div>
        </div>
    </div>


    <!--
    ─── SCRIPTS ────────────────────────────────────────────────────────────────────
    -->

    <script src="<?= url("/Views/web/assets/js/jquery.js"); ?>"></script>
    <?= $v->section("js"); ?>
</body>

</html>