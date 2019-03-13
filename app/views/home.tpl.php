
<!-- Personnage -->

<table class="table table-bordered">
    <thead class="thead-dark">
        <tr>
        <th scope="col">Image</th>
        <th scope="col">Nom</th>
        <th scope="col">Type</th>
        <th scope="col">Description</th>
        </tr>
    </thead>
    <tbody>
    <!-- on boucle sur le tableau $characters our afficher les lignes du tableau -->
        <?php foreach ($characters as $character):?>
            <tr>
            <td><img class="img-fluid max-width: 8%;"src="<?=$baseUrl . '/docs/images/' . $character['picture'] ?>"></td>
            <td><?= $character['name'] ?></td>
            <td><?= $character['t_name'] ?></td>
            <td><?= $character['description'] ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>