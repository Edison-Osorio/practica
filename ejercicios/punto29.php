<?php require_once("../include/header.php"); ?>

<h1 class="text-center m-4">Calculadora</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 29</h1>
                <p>
                    Hacer un algoritmo para implementar una calculadora de las cuatro operaciones básicas y que le
                    permita al usuario elegir que operación va a realizar; con palabras, es decir: sumar, restar, multiplicar
                    o dividir.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="punto29.php" class="was-validated">
                <div class="form-group">
                    Seleccione la operación a realizar <br>
                    <select name="operador">
                        <option value="1" selected>Sumar</option>
                        <option value="2">Restar</option>
                        <option value="3">Multiplicar</option>
                        <option value="4">Dividir</option>
                    </select>

                </div>
                <br>
                <div class="form-group">
                    <label for="num1">Primer numero</label>
                    <input class="form-control" type="number" name="num1" placeholder="Ingrese un numero " required>
                </div>

                <div class="form-group">
                    <label for="num2">Segundo numero</label>
                    <input class="form-control" type="number" name="num2" placeholder="Ingrese un numero " required>
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
                $num1 = $_REQUEST['num1'];
                $num2 = $_REQUEST['num2'];
                $operador = $_REQUEST['operador'];

                switch ($operador) {
                    case '1':
                        echo "La suma de " . $num1 . " + " . $num2 . " = " . $num1 + $num2;
                        break;
                    case '2':
                        echo "La resta de " . $num1 . " - " . $num2 . " = " . $num1 - $num2;
                        break;

                    case '3':
                        echo "La multiplicacion de " . $num1 . " * " . $num2 . " = " . $num1 * $num2;
                        break;
                    case '4':
                        if ($num2 == 0) {
                            echo "No se ppuede dividir por '0'";
                        } else {
                            echo "La divicion de " . $num1 . " / " . $num2 . " = " . $num1 / $num2;
                        }
                        break;
                    default:
                        echo "Debe de seleccionar una opción";
                        break;
                }
            }

            ?>

        </div>
    </div>
</div>


<?php include "../include/footer.php"; ?>