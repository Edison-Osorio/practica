<?php require_once("../include/header.php");  ?>

<h1 class="text-center m-4">Empresa la tortuga</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio ocho</h1>
                <p>
                    Represente un algoritmo mediante un diagrama de flujo y el pseudocódigo para determinar a qué lugar podrá ir de vacaciones una persona, considerando que la línea de autobuses “La tortuga” cobra por kilómetro recorrido. Se debe considerar el costo del pasaje tanto de ida, como de vuelta; los datos que se conocen y que son fijos son: México, 750 km; Puerto.Vallarta., 800 km; Acapulco, 1200 km, y Cancún, 1800 km. También se debe considerar la posibilidad de tener que quedarse en casa.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="punto8.php" class="was-validated">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input class="form-control" type="text" name="nombre" placeholder="ingrese su nombre" required>
                </div>
                <div class="form-group">
                    <label for="paseo">Aque lugar deseas ir</label><br>
                    <select name="paseo" id="" required>
                        <option value="0">Seleccione una opcion</option>
                        <option value="1">Acapulco</option>
                        <option value="2">Cancun</option>
                        <option value="3">Mexico</option>
                        <option value="4">Puerto vallarta</option>
                    </select><br>
                </div>
                <div class="form-group">
                    <label for="horas"></label>
                    <input class="form-control" type="number" name="presupuesto" placeholder="ingrese el presupuesto" required>
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
                $paseo = $_POST['paseo'];
                $presupuesto = $_POST['presupuesto'];
                $costokm = 100;
                $costodi = 0;
                $costodire = 0;
                switch ($paseo) {
                    case '1':
                        $costodi = $costokm * 1200;
                        $costodire = $costodi * 2;
                        echo "El costo total para ir a acapulco es: " . $costodire . "<br>";
                        if ($costodire > $presupuesto) {
                            echo "Usted no puede ir a acapulco porque tiene: " . $presupuesto . " y cusesta " . $costodire . "<br>";
                        } else {
                            echo "Usted puede ir acapulco porque tiene " . $presupuesto . " y cusesta " . $costodire . "<br>";
                        }
                        break;
                    case '2':
                        $costodi = $costokm * 1800;
                        $costodire = $costodi * 2;
                        echo "El costo total para ir a cancun es: " . $costodire . "<br>";
                        if ($costodire > $presupuesto) {
                            echo "Usted no puede ir cancun porque tiene: " . $presupuesto . " y cusesta " . $costodire . "<br>";
                        } else {
                            echo "Usted puede ir cancun porque tiene " . $presupuesto . " y cusesta " . $costodire . "<br>";
                        }
                        break;
                    case '3':

                        $costodi = $costokm * 750;
                        $costodire = $costodi * 2;
                        echo "El costo total para ia Mexico es: " . $costodire . "<br>";
                        if ($costodire > $presupuesto) {
                            echo "Usted no puede ir Mexico porque tiene: " . $presupuesto . " y cuesta " . $costodire . "<br>";
                        } else {
                            echo "Usted puede ir Mexico porque tiene " . $presupuesto . " y cuesta " . $costodire . "<br>";
                        }
                        break;
                    case '4':

                        $costodi = $costokm * 800;
                        $costodire = $costodi * 2;
                        echo "El costo total para ir a Puerto vallarta es: " . $costodire . "<br>";
                        if ($costodire > $presupuesto) {
                            echo "Usted no puede ir Puerto vallarta porque tiene: " . $presupuesto . " y cuesta " . $costodire . "<br>";
                        } else {
                            echo "Usted puede ir a Puerto vallarta porque tiene " . $presupuesto . " y cuesta " . $costodire . "<br>";
                        }
                        break;

                    default:
                        echo "valor invalido";
                        break;
                }
            }
            ?>

        </div>
    </div>
</div>


<?php include "../include/footer.php"; ?>