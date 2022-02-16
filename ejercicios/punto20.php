<?php require_once("../include/header.php");  ?>

<h1 class="text-center m-4">Salario</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 20</h1>
                <p>
                    Un profesor tiene un salario inicial de $1500, y recibe un incremento de 10 % anual durante 6
                    años. ¿Cuál es su salario al cabo de 6 años? ¿Qué salario ha recibido en cada uno de los 6 años?
                    Realice el algoritmo.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="punto20.php" class="was-validated">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input class="form-control" type="text" name="nombre" placeholder="ingrese su nombre" required>
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
            $total_h;
            $sueldo;

            if (isset($_REQUEST['enviar'])) {
                $nombre = $_REQUEST['nombre'];
                $valor = 1500;
                $porcentaje = 10;
                $sueldo = 0;


                $total = ($valor * $porcentaje / 100);
                $sueldo = ($total + $valor);
                echo " salario total primer año es de $" . $sueldo . "<br>";

                $total1 = (1650 * $porcentaje / 100);
                $sueldo1 = ($total1 + $sueldo);
                echo "salairo total del segundo año es de $" . $sueldo1 . "<br>";

                $total2 = (1815 * $porcentaje / 100);
                $sueldo2 = ($total2 + $sueldo1);
                echo "salairo total del tercer año es de $" . $sueldo2 . "<br>";

                $total3 = (1996.5 * $porcentaje / 100);
                $sueldo3 = ($total3 + $sueldo2);
                echo "salairo total del cuarto año es de $" . $sueldo3 . "<br>";

                $total4 = (2196.15 * $porcentaje / 100);
                $sueldo4 = ($total4 + $sueldo3);
                echo "salairo total del quinto año es de $" . $sueldo4 . "<br>";

                $total5 = (2415.765 * $porcentaje / 100);
                $sueldo5 = ($total5 + $sueldo4);
                echo "salairo total del sexto año es de $" . $sueldo5 . "<br>";
            }
            ?>

        </div>
    </div>
</div>


<?php include "../include/footer.php"; ?>