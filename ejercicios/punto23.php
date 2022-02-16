<?php require_once("../include/header.php");  ?>

<h1 class="text-center m-4">Calcular el porcentaje de hombres y de mujeres</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 23</h1>
                <p>
                    Un maestro desea saber qué porcentaje de hombres y que porcentaje de mujeres hay en un
                    grupo de estudiantes
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="punto23.php" class="was-validated">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input class="form-control" type="text" name="nombre" placeholder="ingrese su nombre" required>
                </div>
                <div class="form-group">
                    <label for="hombres">Cantidad de hombres:</label>
                    <input class="form-control" type="number" name="hombres" placeholder="ingrese la cantidad de hombres" required>
                </div>
                <div class="form-group">
                    <label for="mujeres">Cantidad de mujeres:</label>
                    <input class="form-control" type="number" name="mujeres" placeholder="ingrese la cantidad de mujeres " required>
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
                $nombre = $_REQUEST['nombre'];

                $hombres = $_REQUEST['hombres'];
                $mujeres = $_REQUEST['mujeres'];

                $total = $hombres + $mujeres;

                $porcentageMujeres = (($mujeres/$total)*100);
                $porcentageHombres = (($hombres/$total)*100);

                echo  "Profe <b><i>".$nombre ."</i></b>". " el porcentaje de <b><i>hombres</i></b> que hay en el grupo es de: ". $porcentageHombres . "% <br>";
                echo  "Profe <b><i>".$nombre ."</i></b>". " el porcentaje de <b><i>mujeres</i></b> que hay en el grupo es de: ". $porcentageMujeres . "%";

          
            }
            ?>

        </div>
    </div>
</div>


<?php include "../include/footer.php"; ?>