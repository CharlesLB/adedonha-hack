<article class="users_user">
    <h3><?= "{$category->name}"; ?></h3>
    <a class="remove" href="#" data-action="<?= $router->route("category.delete"); ?>" data-id="<?= $category->id; ?>">Deletar</a>
</article>