<?php
session_start();
if (isset($_SESSION['usuario'])) {

    $PageTitle = "Realizar pedido";

    include '../resources/templates/canbeza_simple.html';
    include '../resources/templates/index.html';

    ?>

    <main>
    <br><br><br><br>


        <div class="text-secondary text-center mt-4">
            <h2>
                <?php print $_SESSION['usuario'] ?> realiza tu pedido
            </h2>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="column col-9">

                    <form action="pedido_realizar_b.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label" for="tela">Procesador:</label>
                            <select class="form-select" id="tela" name="tela">
                                <option value="" selected="selected">selecciona</option>
                                <?php
                                include '../resources/db/TelaDB.php';
                                $telaDB = new TelaDB();
                                $telas = $telaDB->getTelas();
                                foreach ($telas as $tela): ?>
                                    <option value=<?= $tela['id_tela'] ?>><?= $tela['tela'] ?></option>";
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="color">Marca de la Computadora:</label>
                            <select class="form-select" id="color" name="color">
                                <option value="" selected="selected">selecciona</option>
                                <?php
                                include '../resources/db/ColorDB.php';
                                $colorDB = new ColorDB();
                                $colores = $colorDB->getColores();
                                foreach ($colores as $color): ?>
                                    <option value=<?= $color['id_color'] ?>><?= $color['color'] ?></option>";
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="talla">Generación:</label>
                            <select class="form-select" id="talla" name="talla">
                                <option value="" selected="selected">selecciona</option>
                                <?php
                                include '../resources/db/TallaDB.php';
                                $tallaDB = new TallaDB();
                                $tallas = $tallaDB->getTallas();
                                foreach ($tallas as $talla): ?>
                                    <option value=<?= $talla['id_talla'] ?>><?= $talla['talla'] ?></option>";
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="cantidad">Cantidad:</label>
                            <input class="form-control" type="text" name="cantidad">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="mensaje">Mensaje:</label>
                            <input class="form-control" type="textarea" name="mensaje">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="imagen">Elije una imagen:</label>
                            <input class="form-control" type="file" name="imagen">
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-success" type="submit">Enviar</button>
                            <a class="btn btn-danger btn-sm" href="../public/vista_cliente.php">Regresar</a>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php

    include '../resources/templates/footer.html';
    include '../resources/templates/scripts.html';
    include '../resources/templates/fin.html';

} else {
    header("Location:login_error.php");
    exit();
}
