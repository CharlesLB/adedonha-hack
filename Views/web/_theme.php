<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= url("/Views/web/assets/css/styles.css?56"); ?>" />
    <link rel="stylesheet" href="<?= url("/shared/css/globals.css"); ?>">
    <link rel="icon" href="<?= url("/shared/img/icon.ico") ?> " type="image/x-icon" />
    <title><?= $title; ?></title>
</head>

<body>
    <div class="main_content">
        <?= $v->section('content'); ?>
    </div>

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

    <script src="<?= url("/shared/js/jquery.js"); ?>"></script>
    <?= $v->section("js"); ?>
</body>

</html>