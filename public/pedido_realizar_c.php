<?php
session_start();
if (isset($_SESSION['usuario'])) {

    $PageTitle = "Confirmación";

    $PageTitle = "Confirmar pedido";
    include '../resources/templates/canbeza_simple.html';
    include '../resources/templates/index.html';
    // include '../resources/templates/navegacion_clientes.html';

    include '../resources/db/PedidoDB.php';
    $pedidoDB = new PedidoDB();
    $pedidoDB->agregaReferenciaContrarefPorId($_SESSION['id_pedido'], $_POST['referencia'], $_POST['contrareferencia']);

    ?>
<body>
   

    <main>

        <div class="text-secondary text-center m-5">
            <h2> Gracias <?php print $_SESSION['usuario'] ?> </h2>
            <h2 class="mt-5">En breve el pedido será validado, posteriormente se mandará información del envio por correo electrónico</h2>
        </div>
        <div class="d-flex align-items-center justify-content-center">
        <a class="btn btn-warning text-black col-md-8 btn-center position-center" href="../public/vista_cliente.php">Regresar</a>
    </div> 
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </main>
    </body>

    <?php

    include '../resources/templates/footer.html';
    include '../resources/templates/scripts.html';
    include '../resources/templates/fin.html';

} else {
    header("Location:login_error.php");
    exit();
}
