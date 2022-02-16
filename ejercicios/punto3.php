<?php require_once("../include/header.php");  ?>

<h1 class="text-center m-4">Calcular valor de estacionamiento</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 3</h1>
                <p>
                    El dueño de un estacionamiento requiere un algoritmo que le permita determinar cuánto debe
                    cobrar por el uso del estacionamiento a sus clientes. Las tarifas que se tienen son las siguientes:
                </p>
                <ul>
                    <li>
                        Las dos primeras horas a $5000 c/u.
                    </li>
                    <li>
                        Las siguientes tres a $4000 c/u.
                    </li>
                    <li>
                        Las cinco siguientes a $3000 c/u.
                    </li>
                    <li>
                        Después de diez horas el costo por cada una es de dos mil pesos.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="punto3.php" class="was-validated">
                <div class="form-group">
                    <label for="horas">Tiempo:</label>
                    <input class="form-control" type="number" name="horas" placeholder="ingrese el numero de horas que parquio el veiculo" required step="any">
                </div>


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
                $total = 0;
                $horas = $_REQUEST['horas'];
                if ($horas > 0 && $horas <= 2) {
                    $total = $horas * 5000;
                    echo ("estubo " . $horas . " horas y el total a pagar es " . $total);
                } elseif ($horas > 2 && $horas <= 5) {
                    $total = (($horas - 2) * 4000 + (10000));
                    echo ("estubo " . $horas . " horas y el total a pagar es " . $total);
                } elseif ($horas >= 6 && $horas <= 10) {
                    $total = (($horas - 5) * 3000 + (22000));
                    echo ("estubo " . $horas . " horas y el total a pagar es " . $total);
                } elseif ($horas > 10) {
                    $total = (($horas - 10) * 2000 + (37000));
                    echo ("estubo " . $horas . " horas y el total a pagar es " . $total);
                }
            }
            ?>

        </div>
    </div>
</div>


<?php include "../include/footer.php"; ?>