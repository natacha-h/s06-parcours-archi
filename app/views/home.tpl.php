
<!-- Personnage -->

<table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Nom</th>
        <th scope="col">Type</th>
        <th scope="col">Description</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($characters as $character):?>
            <tr>
            <th scope="row">1</th>
            <td><img class="img-fluid max-width: 8%;"src="<?=$baseUrl . '/docs/images/' . $character['picture'] ?>"></td>
            <td><?= $character['name'] ?></td>
            <td><?= $character['t_name'] ?></td>
            <td><?= $character['description'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>