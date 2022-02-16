<?php require_once("../include/header.php");  ?>

<h1 class="text-center m-4">Calcular la definitiva de logica</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 28</h1>
                <p>
                    Elaborar un algoritmo para que calcule la nota definitiva de un estudiante de lógica, se debe leer
                    las siguientes notas por pantalla: seguimiento 60%, I parcial 20%, II parcial 20%; al final debe imprimir
                    un mensaje que indique si ganó o perdió la materia.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="punto28.php" class="was-validated">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input class="form-control" type="text" name="nombre" placeholder="ingrese su nombre" required>
                </div>
                <div class="form-group">
                    <label for="seguimiento">Nota de seguimiento:</label>
                    <input class="form-control" type="number" name="seguimiento" placeholder="ingrese la nota de seguimiento" step="any" required>
                </div>
                <div class="form-group">
                    <label for="parcial1">Nota I parcial :</label>
                    <input class="form-control" type="number" name="parcial1" placeholder="ingrese la nota I parcial" step="any" required>
                </div>
                <div class="form-group">
                    <label for="parcial2">Nota II parcial:</label>
                    <input class="form-control" type="number" name="parcial2" placeholder="ingrese la nota II parcial" step="any" required>
                </div>

                <!-- botones de navegacion -->

                <div class="form-group">
                    <br>
                    <a href="../index.php" class="text-white btn btn-secondary btn-block">
                        <i class="fas fa-arrow-left"></i> Regresar al Inicio
                    </a>
                    <input class="btn btn-success m-3 " type="submit" value="enviar" name="enviar">
                </div>


            </form>
        </div>
        <div class="col-md-8 card-header text-center">
            <br>
            <?php

            echo "Para ganar se debe de tener una nota superior o igual a 50 <br>";
            if (isset($_REQUEST['enviar'])) {

                $nombre = $_REQUEST['nombre'];

                $seguimiento = $_REQUEST['seguimiento'];
                $parcial1 = $_REQUEST['parcial1'];
                $parcial2 = $_REQUEST['parcial2'];

                $Nseguimiento = ($seguimiento * 60) / 100;
                $Nparcial1 = ($parcial1 * 20) / 100;
                $Nparcial2 = ($parcial2 * 20) / 100;

                $definitiva = ($Nseguimiento + $Nparcial1 + $Nparcial2);

                // echo "Para ganar se debe de tener una nota superior o igual a 5 <br>";
                if ($definitiva >= 60) {
                    echo  $nombre . " <b><i> Felicitaciones ha ganado la competencia de lógica</i></b>  su nota definitiva es de: " . $definitiva;
                } else {
                    echo  $nombre . "<b><i> perdio</i></b> debe de esforsarse más su nota definitiva es de: " . $definitiva;
                }
            }
            ?>

        </div>
    </div>
</div>


<?php include "../include/footer.php"; ?>
