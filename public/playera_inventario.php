<?php
session_start();
if (isset($_SESSION['usuario'])) {
    $PageTitle = "Inventario";
    include'../resources/templates/index.html';
    include'../resources/templates/canbeza_simple.html';

    ?>

<body style="background-color: black;">
    <main><br><br><br><br><br>

        <div class="text-primary text-center m-4 ">
            <h2>Componentes en existencia</h2>
        </div>      
        <?php
        include '../resources/lib/verTablaPlayeras.php';
        ?>

       
    </main>
    <br><br><br>
   
    <div class="text-end m-4">
            <a class="btn btn-primary ms-4 mt-2 " href="playera_agregar_a.php">Agregar</a>
            <a class="btn btn-success ms-4 mt-2" href="playera_modificar_a.php">Modificar</a>
        </div>
        <div class="d-flex align-items-center justify-content-center">
        <a class="btn btn-warning text-black col-md-8 btn-center position-center" href="../public/vista_administrador.php">Regresar</a>
    </div> 
    </body>
    <style>
        body{
            background-color: black;
        }
    </style>
   <br><br>      <br><br>      <br><br>   
    <?php

    include '../resources/templates/footer.html';
    include '../resources/templates/scripts.html';
    include '../resources/templates/fin.html';

} else {
    header("Location:login_error.php");
    exit();
}