<?php require_once("../include/header.php"); ?>

<h1 class="text-center m-4"></h1>
<br>
<h1 class="text-center">¿Cuanto valdra el pasaje a los estudiantes?</h1>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 11</h1>
                <p>
                    Los alumnos de una escuela desean realizar un viaje de estudios, pero requieren determinar
                    cuánto les costará el pasaje, considerando que las tarifas del autobús son las siguientes: si son más
                    de 100 alumnos, el costo es de $20; si son entre 50 y 100, $35; entre 20 y 49, $40, y si son menos
                    de 20 alumnos, $70 por cada uno. Realice el algoritmo para determinar el costo del pasaje de cada
                    alumno.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="punto11.php" class="was-validated">
                <div class="form-group">
                    <label for="alumnos">Numero de alumnos:</label>
                    <input class="form-control" type="number" name="alumnos" placeholder="ingrese el numero de alumnos" required>
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
            if (isset($_REQUEST['enviar'])) {
                $alumnos = $_REQUEST['alumnos'];
                if ($alumnos > 100) {
                    $valor = $alumnos * 20;
                    echo "el valor de los pasajes es " . $valor . "$";
                } elseif ($alumnos > 50 && $alumnos < 101) {
                    $valor = $alumnos * 35;
                    echo "el valor de los pasajes es " . $valor . "$";
                } elseif ($alumnos > 20 && $alumnos < 50) {
                    $valor = $alumnos * 40;
                    echo "el valor de los pasajes es " . $valor . "$";
                } elseif ($alumnos > 0 && $alumnos <= 20) {
                    $valor = $alumnos * 70;
                    echo "el valor de los pasajes es " . $valor . "$";
                }
            }
            ?>
        </div>
    </div>
</div>


<?php include "../include/footer.php"; ?>