<table class="table table-striped table-warning">
    <thead>
    <tr >
        <th class="text-center"> Procesador </th>
        <th class="text-center"> Marca de la computadora</th>
        <th class="text-center"> Generación</th>
        <th class="text-center"> en existencia</th>
    </tr>
    </thead>
    <tbody>
    <?php
    include '../resources/db/PlayeraDB.php';
    $playeraDB = new PlayeraDB();
    $playeras = $playeraDB->getPlayeras();
    foreach ($playeras as $playera):?>
        <tr>
            <td class="text-center"><?= $playera['tela'] ?></td>
            <td class="text-center"><?= $playera['color'] ?></td>
            <td class="text-center"><?= $playera['talla'] ?></td>
            <td class="text-center"><?= $playera['existencia'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
