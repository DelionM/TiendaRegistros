<?php
session_start();
if (isset($_SESSION['usuario'])) {

    $PageTitle = "Pedidos";
    include '../resources/templates/index.html';
    include '../resources/templates/canbeza_simple.html';


//    include '../resources/DB/PedidoDB.php';
//    $pedidoDB = new PedidoDB();
//    $pedidos = $pedidoDB->getPedidos();
    ?>

    <main>
    <br><br><br><br><br>
        <div class="text-secondary text-center m-4 ">
            <!-- <h2>Pedidos</h2> -->
            <br><br><br>

        </div>
        <body>
    <div class="contenedor-header">
        <header>
            <div class="col-sm-12 col-md-12 col-lg-12">

            <div class="logo">
                
                <a href="#">
                    <div class="icono">
                        <i class="fa-solid fa-house"></i>
                         <span>En esta sección encontrara los pedidos realizados por los clientes</span>
                     </div>
                </a>
                
            </div>
            
            <input class="form-control mb-5" type="text" id="busqueda" onkeyup="funcionBuscar()"
               placeholder="Búsqueda por usuario" title="Escribe un usuario">
            <div class="nav-responsive menu-toggle" id="menu-toggle" onclick="mostrarOcultarMenu()">
                <i class="fa-solid fa-bars"></i>
            </div>
            </div>
        </header>
    </div>
    <style>
        .contenedor-header{
    background: #1e2326;
    position: fixed;
    width: 100%;
    top: 0;
    left: 0;
    z-index: 99;
}

.contenedor-header header{
    max-width: 1100px;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
}
/*Logo o equipo*/
.contenedor-header header .logo a{
    font-family:'Righteous'; 
    font-size: 25px;
    color: rgb(85, 164, 178);
    text-decoration: none;
}

.contenedor-header header .logo a:hover{
    color: #ceec0c;
}

.contenedor-header header ul{
    display: flex;
    list-style: none;
    text-align: center;
}

.contenedor-header header nav ul li a{
    text-align: center;
    font-family: 'Righteous';
    color: rgb(255, 255, 255);
    margin: auto;
    padding: 20px;
    transition: 0.3s;
    text-decoration: none;
    font-size: 20px;
}

.contenedor-header header nav ul li a:hover{
    color: #07e7ef;
    
    border-radius: 15px;
}

.nav.responsive{
    background-color: aqua;
    color: white;
    padding: 5px 10px;
    border-radius: 5px;
    cursor: pointer;
    display: none;
}

.contenedor-header i{
    color: rgb(255, 255, 255);
    font-size: 30px;
}
    </style>


        <!-- <input class="form-control mb-5" type="text" id="busqueda" onkeyup="funcionBuscar()"
               placeholder="Búsqueda por usuario" title="Escribe un usuario"> -->

               <div class="table-responsive-sm">
        <table class="table table-striped" id="tabla">
            <tr class="table-primary">
                <div class="col-sm-1 col-md-6 col-lg-6">
                <th class="text-center ">Usuario</th>
                <th class="text-center">Generacion </th>
                <th class="text-center">Marca de la computadora</th>
                <th class="text-center">Procesador</th>
                </div>
                <div  class="col-sm-1 col-md-6 col-lg-6">
                <th class="text-center">Cantidad</th>
                <th class="text-center">Mensaje</th>
                <th class="text-center">Costo</th>
                <th class="text-center">Imagen</th>
                </div>
            </tr>
            <?php
            include '../resources/db/PedidoDB.php';
            $pedidoDB = new PedidoDB();
            $pedidos = $pedidoDB->getPedidos();
            foreach ($pedidos as $pedido):?>
                <tr class="table-success">
                    <td class="text-center"><?= $pedido['usuario'] ?></td>
                    <td class="text-center"><?= $pedido['tela'] ?></td>
                    <td class="text-center"><?= $pedido['color'] ?></td>
                    <td class="text-center"><?= $pedido['talla'] ?></td>
                    <td class="text-center"><?= $pedido['cantidad'] ?></td>
                    <td class="text-center"><?= $pedido['mensaje'] ?></td>
                    <td class="text-center"><?= $pedido['importe'] ?></td>
                    <td class="text-center"><img src="<?= '../resources/upload/' . $pedido['nombre_archivo'] ?>"
                                                 height="100px"></td>
                </tr>
            <?php endforeach; ?>
        </table>
        </div>
    </main>

    <?php

   
    ?>
    <script>
        function funcionBuscar() {
            let textoBuscar, tabla, renglones, primerCelda, renglon, textoCelda;
            textoBuscar = document.getElementById("busqueda").value.toUpperCase();
            tabla = document.getElementById("tabla");
            renglones = tabla.getElementsByTagName("tr");
            for (renglon = 0; renglon < renglones.length; renglon++) {
                primerCelda = renglones[renglon].getElementsByTagName("td")[0];
                if (primerCelda) {
                    textoCelda = primerCelda.textContent || primerCelda.innerText;
                    if (textoCelda.toUpperCase().indexOf(textoBuscar) > -1) {
                        renglones[renglon].style.display = "";
                    } else {
                        renglones[renglon].style.display = "none";
                    }
                }
            }
        }
    </script>
   <br><br>   
    <br>     
    <div class="d-flex align-items-center justify-content-center">
        <a class="btn btn-warning text-black col-md-8 btn-center position-center" href="../public/vista_administrador.php">Regresar</a>
    </div> 
    <br><br> <br><br>
                        <br><br>
                        <br><br>
                        
                        <br><br>         
    <?php

    include '../resources/templates/footer.html';
    include '../resources/templates/scripts.html';
    include '../resources/templates/fin.html';

} else {
    header("Location:login_error.php");
    exit();
}