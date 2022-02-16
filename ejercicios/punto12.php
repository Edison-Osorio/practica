<?php require_once("../include/header.php");
?>

<h1 class="text-center m-4">Calificación</h1>
<br>

<h1 class="text-center m-4"></h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 12</h1>
                <p>
                    Realice un algoritmo que, con base en una calificación proporcionada (0-10), indique con letra la
                    calificación que le corresponde: 10 es “A”, 9 es “B”, 8 es “C”, 7 y 6 son “D”, y de 5 a 0 son “F”.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="punto12.php" class="was-validated">
                <div class="form-group">
                    <label for="calificacion">Calificación:</label>
                    <input class="form-control" type="number" name="calificacion" placeholder="Ingrese su calificación" required>
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
                $calificacion = $_REQUEST['calificacion'];
                if ($calificacion >= 0 && $calificacion <= 10) {
                    switch ($calificacion) {
                        case '10':
                            echo "Su calificacion es 'A'";
                            break;
                        case '9':
                            echo "Su calificacion es 'B'";
                            break;
                        case '8':
                            echo "Su calificacion es 'C'";
                            break;
                        case '7':
                            echo "Su calificacion es 'D'";
                            break;
                        case '6':
                            echo "Su calificacion es 'D'";
                            break;
                        default:
                            echo "Su calificacion es 'F'";
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