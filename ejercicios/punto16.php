<?php require_once("../include/header.php");  ?>

<h1 class="text-center m-4">Bono navideño</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 16</h1>
                <p>
                Realice un algoritmo que permita determinar la cantidad del bono navideño que recibirá un empleado de una tienda, considerando que si su antigüedad es mayor a cuatro años o su sueldo es menor de dos mil pesos, le corresponderá 25 % de su sueldo, y en caso contrario sólo le corresponderá 20 % de éste.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="punto16.php" class="was-validated">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input class="form-control" type="text" name="nombre" placeholder="ingrese sus nombres" required>
                </div>
                <div class="form-group">
                    <label for="puntos">Años</label>
                    <input class="form-control" type="number" name="años" placeholder="ingrese sus años de antiguedad" required step="any">
                </div>
                <div class="form-group">
                    <label for="salario"></label>
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
                $años = $_REQUEST['años'];
                $salario = $_REQUEST['salario'];
                $nombres = $_REQUEST['nombre'];
                $porcentaje;
                if ($años > 4) {
                    $porcentaje = $salario * 0.25;
                    echo $nombres . ", usted recibe un bono navideño, porque tiene " . $años . " años de antiguedad que es equivalente a el 25% del salario el cual es " . $porcentaje . "<br>";
                } elseif ($salario < 2000) {
                    $porcentaje = $salario * 0.25;
                    echo $nombres . ", usted recirbe un bono navideño, porque tiene un salario  " . $salario . " que es menor a 2000 y equivale a el 25% del salario " . $porcentaje . "<br>";
                } else {
                    $porcentaje = $salario * 0.20;
                    echo $nombres . ", usted recirbe un bono navideño del 20% de su salario porque no tiene mas de 4 años de antiguedad y su salario es mayor a 20000, el cual es equivalente a: " . $porcentaje;
                }
            }
            ?>

        </div>
    </div>
</div>


<?php include "../include/footer.php"; ?>