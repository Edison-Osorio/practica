<?php require_once("../include/header.php");  ?>

<h1 class="text-center m-4">Bono por puntos</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 14</h1>

                <div class="row">
                    <div class="col-md-7">
                        <p> El secretario de educación ha decidido otorgar un bono por desempeño a todos los profesores con base en la puntuación siguiente:

                        </p>
                        <p>
                            Realice un algoritmo que permita determine el monto de bono que percibirá un profesor (debe capturar el valor del salario mínimo y los puntos del profesor).
                        </p>
                    </div>
                    <div class="col-md-5">
                        <table class="table text-white table-bordered" border="1">
                            <tr class="table-dark">
                                <td>Puntos</td>
                                <td>Premio</td>
                            </tr>
                            <tr>
                                <td>0 - 100</td>
                                <td>1 salario</td>
                            </tr>
                            <tr>
                                <td>101 - 150</td>
                                <td>2 salarios mínimos</td>
                            </tr>
                            <tr>
                                <td>151 - en adelante</td>
                                <td>3 saslarios mínimos</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="punto14.php" class="was-validated">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input class="form-control" type="text" name="nombre" placeholder="ingrese sus nombres" required>
                </div>
                <div class="form-group">
                    <label for="puntos">Puntos:</label>
                    <input class="form-control" type="number" name="puntos" placeholder="ingrese sus puntos" required step="any">
                </div>
                <div class="form-group">
                    <label for="salario">Salario:</label>
                    <input class="form-control" type="number" name="salario" placeholder="ingrese su salario minimo" required>
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
                $puntos = $_REQUEST['puntos'];
                $salario = $_REQUEST['salario'];
                $nombres = $_REQUEST['nombre'];
                $doble;
                if ($puntos <= 100) {
                    echo $nombres . ", usted recibe un bono de un salario minimo, porque tiene estos puntos " . $puntos . " que es equivalente a " . $salario;
                }
                if ($puntos > 100 && $puntos <= 150) {
                    $doble = $salario * 2;
                    echo  $nombres . ", usted recibe un bono de dos salarios minimos, porque tiene estos puntos  " . $puntos . " que es equivalentes a " . $doble;
                }
                if ($puntos > 150) {
                    $doble = $salario * 3;
                    echo  $nombres . ", usted recibe un bono de tres salarios minimos, porque tiene estos puntos " . $puntos . " que es equivalentes a " . $doble;
                }
            }
            ?>

        </div>
    </div>
</div>


<?php include "../include/footer.php"; ?>