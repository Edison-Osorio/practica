<?php require_once("../include/header.php");  ?>

<h1 class="text-center m-4">Becas mensuales</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 5</h1>
                <p>
                    El presidente de la república ha decidido estimular a todos los estudiantes de una universidad
                    mediante la asignación de becas mensuales, para esto se tomarán en consideración los siguientes
                    criterios:</p>
                <p>
                    Para alumnos mayores de 18 años con promedio mayor o igual a 9, la beca será de $200000; con
                    promedio mayor o igual a 7.5, de $100000; para los promedios menores de 7.5 pero mayores o
                    iguales a 6.0, de $500000; a los demás se les enviará una carta de invitación incitándolos a que
                    estudien más en el próximo ciclo escolar.</p>
                <p>
                    A los alumnos de 18 años o menores de esta edad, con promedios mayores o iguales a 9, se les
                    dará $30000; con promedios menores a 9 pero mayores o iguales a 8, $20000; para los alumnos
                    con promedios menores a 8 pero mayores o iguales a 6, se les dará $10000, y a los alumnos que
                    tengan promedios menores a 6 se les enviará carta de invitación.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="punto5.php" method="POST" class="was-validated">

                <div class="form-group">
                    <label for="edad">Edad</label>
                    <input type="number" name="edad" class="form-control" placeholder="Ingrese su edad" required />
                </div>

                <div class="form-group">
                    <label for="promedio">Promedio</label>
                    <input type="number" step="any" name="promedio" class="form-control" placeholder="ingrese su promedio" required />
                </div>

                <div class="form-group">
                    <br />
                    <a href="../index.php" class="text-white btn btn-secondary btn-block">
                        <i class="fas fa-arrow-left"></i>Regresar al inicio
                    </a>
                    <input type="submit" value="enviar" name="enviar" class="btn btn-success m-3" />
                </div>
            </form>
        </div>
        <div class="col-md-8 text-center">
            <br>
            <?php
            if (isset($_REQUEST['enviar'])) {
                $edad = $_REQUEST['edad'];
                $promedio = $_REQUEST['promedio'];

                if ($edad > 18 && $promedio >= 9) {
                    echo "Felicidades su promedio es de " . $promedio . " y por eso recibira $200000";
                } elseif ($edad > 18 && $promedio >= 7.5 && $promedio < 9) {
                    echo "Felicidades su promedio es de " . $promedio . " y por eso recibira $100000";
                } elseif ($edad > 18 && $promedio >= 6  && $promedio < 7.5) {
                    echo "Felicidades su promedio es de " . $promedio . " y por eso recibira $50000";
                } elseif ($edad >= 5  && $edad < 18 && $promedio >= 9) {
                    echo "Felicidades su promedio es de " . $promedio . " y por eso recibira un $30000";
                } elseif ($edad > 5 && $edad < 18 && $promedio >= 8 &&  $promedio < 9) {
                    echo "Felicidades su promedio es de " . $promedio . " y por eso recibira $20000";
                } elseif ($edad > 5 && $edad < 18  && $promedio >= 6 && $promedio < 8) {
                    echo "Felicidades su promedio es de " . $promedio . " y por eso recibira $10000";
                } elseif ($edad <= 5) {
                    echo "Edad no valida";
                } else {
                    #echo 'Su promedio fue de ' . $promedio . ', deje de ser vago y pongase a estudiar, no diga  "'."lo tengo igual al profe ".'" pendej@';
                    echo "Su promedio fue de " . $promedio . ", lo invitamos a estudiar mas para la proxima";
                }
            }
            ?>
        </div>
    </div>
</div>

<?php include "../include/footer.php"; ?>