<?php require_once("../include/header.php");  ?>

<h1 class="text-center m-4">Calcular la cantidad de pinos y cedros a sembrar</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 24</h1>
                <p>
                    Se desea saber cuántos pinos y cuantos cedros se pueden sembrar en un terreno que mide n
                    cantidad de metros. El dueño ha establecido que sembrará el 35% del terreno en pinos y el 65% en
                    cedros. Las normas de agricultura establecen que en 10 metros cuadrados se pueden sembrar 4
                    pinos y en 15 metros cuadrados 5 cedros
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="punto24.php" class="was-validated">
                <div class="form-group">
                    <label for="terreno">Terreno</label>
                    <input class="form-control" type="number" name="terreno" placeholder="ingrese la medida del terreno a sembrar" required step="any">
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
                
                $terreno = $_REQUEST['terreno'];

                $porcentagePinos = ($terreno * 35 )/100;
                $porcentageCedros = ($terreno * 65)/100;

                $pinos = $porcentagePinos / 2.5;
                $cedros = $porcentageCedros / 3;

                echo "En el terreno con estas medidas: ". $terreno."m^2, se podran sembrar ". $pinos. " de <b><i>Pinos</i></b> <br>";
                echo "En el terreno con estas medidas: ". $terreno. "m^2, se podran sembrar ". $cedros. " de <b><i>Cedros</i></b>";




            }
            ?>

        </div>
    </div>
</div>


<?php include "../include/footer.php"; ?>