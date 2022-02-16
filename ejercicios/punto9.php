<?php require_once("../include/header.php");
?>

<h1 class="text-center m-4">Bono de antigüedad</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 9</h1>
                <p>
                    Se les dará un bono por antigüedad a los empleados de una tienda. Si tienen un año, se les dará
                    $100; si tienen 2 años, $200, y así sucesivamente hasta los 5 años. Para los que tengan más de 5,
                    el bono será de $1000. Realice un algoritmo y represéntelo mediante el diagrama de flujo, el
                    pseudocódigo y diagrama N/S que permita determinar el bono que recibirá un trabajador
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="punto9.php" class="was-validated">
                <div class="form-group">
                    <label for="antiguedad">Antiguedad:</label>
                    <input class="form-control" type="text" name="antiguedad" placeholder="ingrese su antiguedad" required>
                </div>
                <div class="form-group">
                    <label for="salario">Salario:</label>
                    <input class="form-control" type="number" name="salario" placeholder="ingrese su salario" required step="any">
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
                $antiguedad = $_REQUEST['antiguedad'];
                $salario = $_REQUEST['salario'];

                if ($antiguedad > 0) {
                    switch ($antiguedad) {
                        case '1':
                            echo "Su salario con bonificación es:" . $salario + 100 . "$";
                            break;
                        case '2':
                            echo "Su salario con bonificacion es:" . $salario + 200 . "$";
                            break;

                        case '3':
                            echo "Su salario con bonificación es:" . $salario + 300 . "$";
                            break;
                        case '4':
                            echo "Su salario con bonificacion es:" . $salario + 400 . "$";
                            break;

                        case '5':
                            echo "Su salario con bonificación es:" . $salario + 500 . "$";
                            break;
                        default:
                            echo "Su salario con bonificación es:" . $salario + 1000 . "$";
                            break;
                    }
                }
            }
            ?>

        </div>
    </div>
</div>


<?php include "../include/footer.php";
?>