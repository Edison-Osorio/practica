<?php require_once("../include/header.php");  ?>

<h1 class="text-center m-4">Determinar tipo de vacuna</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 17</h1>
                <p>
                    La secretaria de salud requiere un algoritmo que permita determinar qué tipo de vacuna (A, B o
                    C) debe aplicar a una persona, considerando que si es mayor de 70 años, sin importar el sexo, se le
                    aplica la tipo C; si tiene entre 16 y 69 años, y es mujer, se le aplica la B, y si es hombre, la A; si es
                    menor de 16 años, se le aplica la tipo A, sin importar el sexo.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="punto17.php" class="was-validated">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input class="form-control" type="text" name="nombre" placeholder="ingrese su nombre" required> <br>
                    <label for="nombre">edad:</label>
                    <input class="form-control" type="number" name="edad" placeholder="ingrese su edad" required> <br>
                    <label for="sexo">Selecciona el valor de sexo:</label>
                    <select name="sexo" required="required">
                        <option value="1">mujer</option>
                        <option value="2">hombre</option>
                    </select>
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
                $edad = $_REQUEST['edad'];
                $sexo = $_REQUEST['sexo'];
                $nombres  = $_REQUEST['nombre'];

                if ($edad > 70) {
                    echo " A " . $nombres . " se le aplicara la vacuna tipo C ";
                }
                if ($sexo == 1 && $edad >= 16 && $edad < 70) {

                    echo " A $nombres" . " se le aplicara la vacuna tipo  B";
                }
                if ($sexo == 2 && $edad >= 16 && $edad < 70) {

                    echo " A $nombres" . " se le aplicara la vacuna tipo  A ";
                } elseif ($edad < 16) {

                    echo " A $nombres" . " se le apliacara la vacuna tipo  A ";
                }
            }
            ?>


        </div>
    </div>
</div>

<?php include "../include/footer.php"; ?>