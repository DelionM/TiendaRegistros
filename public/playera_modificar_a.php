<?php
session_start();
if (isset($_SESSION['usuario'])) {

    $PageTitle = "Modificar existencia";
    include '../resources/templates/index.html';

    include '../resources/templates/canbeza_simple.html';
    ?>
<body style="background-color: black;"> 
    <main style="background-color: black;">

        <div class="text-secondary text-center m-4 ">
            <h2>Agregar tipo de playera</h2>
        </div>

        <form class="p-5" action="playera_modificar_b.php" method="POST">

            <div class="mb-3">
                <label class="form-label" for="id_playera">Dispositivo</label>
                <select class="form-select" id="id_playera" name="id_playera">
                    <option value="" selected="selected">selecciona</option>
                    <?php
                    include '../resources/db/PlayeraDB.php';
                    $playeraDB = new PlayeraDB();
                    $playeras = $playeraDB->getPlayeras();
                    foreach ($playeras as $playera):?>
                        <option value="<?= $playera['id_playera'] ?>"><?= $playera['tela'] ?> <?= $playera['color'] ?> <?= $playera['talla'] ?></option>\n";
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label" for="cantidad">Cantidad</label>
                <style>
                    label{
                        color: #fff;
                    }
                </style>
                <input class="form-control" type="text" id="cantidad" name="cantidad" placeholder="Cantidad a agregar">
            </div>

            <div class="text-end mt-5">
                <input class="btn btn-primary" type="submit" value="Modificar">
            </div>
            <br><div class="d-flex align-items-center justify-content-center">
        <a class="btn btn-warning text-black col-md-8 btn-center position-center" href="../public/vista_administrador.php">Regresar</a>
    </div> 
        </form>

    </main>
    </body>  
    <?php

    include '../resources/templates/scripts.html';
    include '../resources/templates/fin.html';

} else {
    header("Location:login_error.php");
    exit();
}