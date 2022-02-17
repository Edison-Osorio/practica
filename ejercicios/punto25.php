<?php require_once("../include/header.php");  ?>

<h1 class="text-center m-4">Ordenar de mayor a menor</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 25</h1>
                <p>
                    Leer tres valores por pantalla, determinar e imprimir el mayor, el medio y el menor
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="punto25.php" class="was-validated">
                <div class="form-group">
                    <label for="numero1">Numero 1:</label>
                    <input class="form-control" type="number" name="numero1" placeholder="ingrese el primer numero" step="any" required>
                </div>
                <div class="form-group">
                    <label for="numero2">Numero 2:</label>
                    <input class="form-control" type="number" name="numero2" placeholder="ingrese el segundo numero" step="any" required>
                </div>
                <div class="form-group">
                    <label for="numero3">Numero 3:</label>
                    <input class="form-control" type="number" name="numero3" placeholder="ingrese el tercer numero" step="any" required>
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
                $num1 = $_REQUEST['numero1'];
                $num2 = $_REQUEST['numero2'];
                $num3 = $_REQUEST['numero3'];

                if ($num1 > $num2 && $num1 > $num3) {
                    echo 'el mayor es ' . $num1;

                    if ($num2 > $num3) {
                        echo ' el numero intermedio es  ' . $num2 . " <br> ";
                        echo  ' el menor es  ' . $num3 . " <br> ";
                    } else {
                        echo ' el numero intermedio es  ' . $num3 . " <br> ";
                        echo ' el menor es  ' . $num2 . " <br> ";
                    }
                }



                if ($num2 > $num1 && $num2 > $num3) {
                    echo 'el mayor es ' . $num2 . " <br> ";
                    if ($num1 > $num3) {
                        echo 'el numero intermedio es  ' . $num1 . " <br> ";
                        echo 'el menor es  ' . $num3 . " <br> ";
                    } else {
                        echo 'el numero intermedio es  ' . $num3 . " <br> ";
                        echo 'el menor es  ' . $num1 . " <br> ";
                    }
                }

                if ($num3 > $num1 && $num3 > $num2) {
                    echo 'el mayor es ' . $num3 . " <br> ";
                    if ($num1 > $num2) {
                        echo 'el numero intermedio es  ' . $num1 . " <br> ";
                        echo 'el menor es  ' . $num2 . " <br> ";
                    } else {
                        echo 'el numero intermedio es  ' . $num2 . " <br> ";
                        echo 'el menor es  ' . $num1 . " <br> ";
                    }
                }
            }
            ?>
<h2>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et excepturi reiciendis dolore ipsa. Molestias, aut at quos, expedita labore animi ipsum obcaecati veniam atque, ad itaque porro assumenda reiciendis nesciunt!
    
</h2>
        </div>
    </div>
</div>


<?php include "../include/footer.php"; ?>