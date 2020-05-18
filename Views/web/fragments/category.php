<label for="<?= $category->name ?>">
    <li>
        <input class="checkbox" id="<?= $category->name ?>" value="<?= $category->name ?>" name="categories[]" type="checkbox">
        <?= $category->name ?>
    </li>
</label>