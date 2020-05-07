<?php $v->layout("admin/theme"); ?>

<div class="create">
    <div class="form_ajax" style="display: none"></div>
    <form class="form" name="gallery" action="" method="post"
          enctype="multipart/form-data">
        <label>
            <input type="text" name="first_name" placeholder="Nome:"/>
        </label>
        <label>
            <input type="text" name="last_name" placeholder="Sobrenome:"/>
        </label>
        <button>Cadastrar Usuário</button>
    </form>
</div>

<section class="users">
    <?php if(!empty($categories)): ?>
        <?php foreach($categories as $category):?>
            <article class="users_user">
                <h3><?= "{$category->name}";?></h3>
                <a class="remove" href="#">Deletar</a>
            </article>
        <?php endforeach; ?>
    <?php endif; ?>    
</section>