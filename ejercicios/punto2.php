<?php require_once("../include/header.php");  ?>

<h1 class="text-center m-4">¿Que regalo debo comprar?</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 2</h1>
                <div class="row">
                    <div class="col-md-7">
                        <p>El 14 de febrero una persona desea comprarle un regalo al ser querido que más aprecia en ese
                            momento, su dilema radica en qué regalo puede hacerle, las alternativas que tiene son las siguientes:</p>
                    </div>
                    <div class="col-md-5">
                        <table class="table text-white table-bordered" border="1">
                            <tr>
                                <td>Tarjeta</td>
                                <td>$10000 o menos</td>
                            </tr>
                            <tr>
                                <td>Chocolates</td>
                                <td> $11000 a $100000</td>
                            </tr>
                            <tr>
                                <td> Flores</td>
                                <td> $101000 a $250000</td>
                            </tr>
                            <tr>
                                <td>Anillo</td>
                                <td>Más de $251000</td>
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
            <form method="POST" action="punto2.php" class="was-validated">
                <div class="form-group">
                    <label for="presupuesto">Nombre:</label>
                    <input class="form-control" type="number" name="presupuesto" placeholder="ingresa su presupuesto" required >
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
                $regalos = $_REQUEST['presupuesto'];

                if ($regalos <= 10000 && $regalos >=0) {
                    echo "Usted puede comprar <b><i>Tarjeta</i></b> porque tiene: " . $regalos . "<br>";
                }
                if ($regalos > 10000 && $regalos <= 100000) {
                    echo "Usted puede comprar <b><i>Chocolates</i></b> porque tiene: " . $regalos . "<br>";
                }

                if ($regalos > 100000 && $regalos < 250000) {
                    echo "Usted puede comprar <b><i>Flores</i></b> porque tiene: " . $regalos . "<br>";
                }
                if ($regalos >= 250000) {
                    echo "Usted puede comprar <b><i>Anillo</i></b> porque tiene: " . $regalos . "<br>";
                }
            }
            ?>

        </div>
    </div>
</div>


<?php include "../include/footer.php"; ?>