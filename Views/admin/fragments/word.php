<article class="items">
    <h3><?= "{$word->name}"; ?></h3>
    <a class="remove" href="#" data-action="<?= $router->route("word.delete"); ?>" data-id="<?= $word->id; ?>">Deletar</a>
</article>