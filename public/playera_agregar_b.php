<?php
session_start();
if (isset($_SESSION['usuario'])) {
    include '../resources/templates/index.html';

    include '../resources/templates/canbeza_simple.html';

    include '../resources/db/PlayeraDB.php';
    
    $playeraDB = new PlayeraDB();

    if ($playeraDB->existeTipoPlayera($_POST)) {

        $PageTitle = "playera existente";

            
        ?>
<br><br><br><br><br>

<div class="d-flex align-items-center justify-content-center">
        <h2 class="text-secondary">Ya está en existencia</h2>
        </div> 
        <br>        <div class="d-flex align-items-center justify-content-center">
        <img src="../assets/img/adv.webp" alt="eqde" width="30%">
        </div> 
        <br><br><br>
      

        <div class="d-flex align-items-center justify-content-center">
        <a class="btn btn-warning text-black col-md-8 btn-center position-center" href="../public/vista_administrador.php">Regresar</a>
    </div> 

        <?php
        include '../resources/templates/footer.html';
        include '../resources/templates/scripts.html';
        include '../resources/templates/fin.html';

    } else {
        ?>
        <?php
        $playeraDB->insertaPlayera($_POST);
        header("Location:playera_inventario.php");
        exit();
    }

} else {
    header("Location:login_error.php");
    exit();
}