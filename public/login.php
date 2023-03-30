<?php

$PageTitle = "Login";
include '../resources/templates/index.html';
include '../resources/templates/body.html';
include '../resources/templates/canbeza_simple.html';

?>
<br><br><br><br><br><br>

<body style="background-image: url(../../assets/img/fondo1.jpg);">

    <main>
        <div class="container">

            <div class="row justify-content-center">

                <div class="column col-9 col-md-6 ">

                    <form action="login_validacion.php" method="POST">
                        <div class="mt-3">
                            <h2 style="text-align: center;">INICIAR SESIÓN </h2>
                            <label class="form-label" for="usuario">Usuario</label>
                            <input class="form-control" type="text" name="usuario" id="usuario" required>
                        </div>
                        <div class="mt-3">
                            <label class="form-label" for="contraseñaE">Contraseña</label>
                            <input class="form-control" type="password" name="contraseñaE" id="contraseñaE" required>
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="btn btn-success">Enviar</button>
                            <a class="btn btn-danger btn-sm" href="../public/index.php">Regresar</a>
                        </div>
                        <br><br> <br><br>
                        <br><br>
                        <br><br>
                        <br><br>


                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php
    include '../resources/templates/footer.html';
    include '../resources/templates/fin.html';