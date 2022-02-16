<?php require_once("../include/header.php");
?>

<h1 class="text-center m-4">Día de la semana</h1>
<br>


<h1 class="text-center m-4"></h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 13</h1>
                <p>
                    Realice un algoritmo que, con base en un número proporcionado (1-7), indique el día de la
                    semana que le corresponde (L-D).
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="punto13.php" class="was-validated">
                <div class="form-group">
                    <label for="dia">Numero</label>
                    <input class="form-control" type="number" name="dia" placeholder="Ingrese un numero del 1 al 7" required>
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
                $dia = $_REQUEST['dia'];
                if ($dia >= 1 && $dia <= 7) {
                    switch ($dia) {
                        case '1':
                            echo "El numero " . $dia . " corresponde al dia Lunes (L)";
                            break;
                        case '2':
                            echo "El numero " . $dia . " corresponde al dia Martes (M)";
                            break;
                        case '3':
                            echo "El numero " . $dia . " corresponde al dia Miercoles (Mi)";
                            break;
                        case '4':
                            echo "El numero " . $dia . " corresponde al dia Jueves (J)";
                            break;
                        case '5':
                            echo "El numero " . $dia . " corresponde al dia Viernes (V)";
                            break;
                        case '6':
                            echo "El numero " . $dia . " corresponde al dia Sabado (S)";
                            break;
                        default:
                            echo "El numero " . $dia . " corresponde al dia Domingo (D)";
                            break;
                    }
                } else {
                    echo "Ingresa un valor valido";
                }
            }
            ?>
        </div>
    </div>
</div>


<?php include "../include/footer.php";
?>