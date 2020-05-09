<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="<?= url("/Views/admin/assets/css/style.css?l28 "); ?>" />
</head>

<body>

    <div class="ajax_load">
        <div class="ajax_load_box">
            <div class="ajax_load_box_circle"></div>
            <div class="ajax_load_box_title">Aguarde, carregando!</div>
        </div>
    </div>

    <div class="container">
        <div class="sidebar">
            <header>Adedonha Admin</header>
            <ul>
                <li><a href="<?= url('admin'); ?>">Categorias</a></li>
                <li><a href="<?= url('admin/palavra'); ?>">Palavras</a></li>
            </ul>
        </div>

        <main class="content">
            <?= $v->section("content"); ?>
        </main>
    </div>

    <script src="<?= url("/Views/admin/assets/js/jquery.js"); ?>"></script>
    <?= $v->section("js"); ?>
</body>

</html>