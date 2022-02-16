<?php require_once("../include/header.php");
?>

<h1 class="text-center m-4">Calcular tiempo transcurrido</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 27</h1>
                <p>
                    Diseñar un algoritmo para que lea una fecha de nacimiento de una persona, luego imprima lo
                    siguiente: Numero de años – meses- días, tener en cuenta las fechas antes y después del
                    cumpleaños.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="punto27.php" class="was-validated">
                <div class="form-group">
                    <label for="nombre">fecha nacimiento:</label>
                    <input class="form-control" type="date" name="fechainicio" placeholder="ingrese fecha de inicio" required> <br>
                    <label for="nombre">fecha actual:</label>
                    <input class="form-control" type="date" name="fechafin" placeholder="ingrese fecha actual" required> <br>

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
                $fechafin = $_REQUEST['fechafin'];
                $fechainicio = $_REQUEST['fechainicio'];

                function calculartiempo($fechainicio, $fechafin)
                {

                    //indice 0= años
                    //indice 1= meses
                    //indice 2= dias
                    //indice 11= total en dias 
                    $datetime1 = date_create($fechainicio);
                    $datetime2 = date_create($fechafin);
                    $interval = date_diff($datetime1, $datetime2);

                    $tiempo = array();

                    foreach ($interval as $valor) {
                        $tiempo[] = $valor;
                    }
                    return $tiempo;
                }
                $datos = calculartiempo($fechainicio, $fechafin);
                echo "Años que pasaron = " . $datos[0] . "<br>";
                echo "Meses que pasaron = " . $datos[1] . "<br>";
                echo "Dias que pasaron = " . $datos[2] . "<br>";
                echo "Total dias = " . $datos[11] . "<br>";
            }
            ?>


        </div>
    </div>
</div>


<?php include "../include/footer.php";
?>