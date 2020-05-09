<form class="form" name="words" action="<?= $router->route("word.create"); ?>" method="post" enctype="multipart/form-data">
    <label>
        <input type="text" name="name" placeholder="Palavra adicionada:" data-id-category="<?= $category->id ?>" />
    </label>
    <button>Cadastrar Palavra</button>
</form>