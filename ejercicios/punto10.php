<?php require_once("../include/header.php");
?>

<h1 class="text-center m-4">Sueldo semanal</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 10</h1>
                <p>
                    Realice un algoritmo que permita determinar el sueldo semanal de un trabajador con base en las
                    horas trabajadas y el pago por hora, considerando que a partir de la hora número 41 y hasta la 45,
                    cada hora se le paga el doble, de la hora 46 a la 50, el triple, y que trabajar más de 50 horas no está
                    permitido.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="punto10.php" class="was-validated">
                <div class="form-group">
                    <label for="horas">Horas:</label>
                    <input class="form-control" type="text" name="horas" placeholder="ingrese sus horas extras trabajadas" required>
                </div>
                <div class="form-group">
                    <label for="salario">Salario:</label>
                    <input class="form-control" type="number" name="salario" placeholder="ingrese su salario base" required step="any">
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
                $horas = $_REQUEST['horas'];
                $salario = $_REQUEST['salario'];
                $valHora = $salario / 40;
                $horasExtra = $horas - 40;

                if ($horas > 40 && $horas <= 45) {
                    $totalHoraExtra = ($valHora * $horasExtra) * 2;
                    echo "El valor por hora es = " . $valHora . "$" . "<br>";
                    echo "Las horas extra trabajadas son = " . $horasExtra . "<br>";
                    echo "El total por horas extra es = " . $totalHoraExtra . "<br>";
                    echo "Su salario total es = " . $totalHoraExtra + $salario . "<br>";
                } elseif ($horas > 45 && $horas <= 50) {
                    $totalHoraExtra = ($valHora * $horasExtra) * 2;
                    echo "El valor por hora es = " . $valHora . "$" . "<br>";
                    echo "Las horas extra trabajadas son = " . $horasExtra . "<br>";
                    echo "El total por horas extra es = " . $totalHoraExtra . "<br>";
                    echo "Su salario total es = " . $totalHoraExtra + $salario . "<br>";
                } elseif ($horas > 50) {
                    echo "Lo sentimos mucho, pero no esta permitido trabajar mas de 50 horas, descansa un poco ";
                } else {
                    echo "No aplica para calcular horas extra";
                }
            }

            ?>

        </div>
    </div>
</div>


<?php include "../include/footer.php";
?>