<?php

$PageTitle = "Error";

include '../resources/templates/index.html';
include '../resources/templates/canbeza_simple.html';
?>

    <main>
        <div class="text-center">
            <!-- la imagen de que no ingreso  -->
            <br><br><br><br><br><br><br>
            <img src="../assets/img/negado.gif" class="imagen_centrada">
        </div>
        <br><br>
        <div class="cerrar ">
   
        <h1 
        style="text-align: center;"
        >CONTRASEÑA O USUARIO INCORRECTOS</h1>
        <a class="btn btn-success  btn-sm center " href="../public/index.php">Regresar</a>
           
        </div>
    </main>
    <br><br><br><br><br><br>
    <style>
        .cerrar{
            text-align: center;
        }
    </style>

<?php
// session_destroy();
include '../resources/templates/footer.html';
include '../resources/templates/scripts.html';
include '../resources/templates/fin.html';
