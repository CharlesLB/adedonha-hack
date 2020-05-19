<tr>
    <th>Categoria</th>
    <th>Palavra</th>
</tr>

<?php foreach ($answers as $answer): ?>
    <tr>
        <td><?= $answer["category"] ?></td>
        <td><?= $answer["word"] ?></td>
    </tr>
<?php endforeach; ?>