<?php require_once("../include/header.php");  ?>
<h1 class="text-center m-4">Calculo de sueldo</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio uno realizamos una configuracion de ramas </h1>
                <p>
                    Realice un algoritmo para determinar el sueldo semanal de un trabajador con base en las horas
                    trabajadas y el pago por hora, considerando que después de las 40 horas cada hora se considera
                    como excedente y se paga el doble
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
        <form method="POST" action="punto1.php" class="was-validated">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                 <input class="form-control" type="text" name="nombre" placeholder="ingrese su nombre" required>
            </div>
    <div class="form-group">
<label for="salario">Salario:</label>
        <input class="form-control" type="number" name="salario" placeholder="ingrese su salario" required step="any"  >
    </div>
    <div class="form-group">
<label for="horas"></label>
        <input class="form-control" type="number" name="horas" placeholder="ingrese las horas trabajadas" required>
    </div>    

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
                $valor = $_REQUEST['salario'];
                $horas = $_REQUEST['horas'];

                if ($horas > 40) {
                    $total_h = $horas - 40;
                    $sueldo = ($horas - $total_h) * $valor;
                    $sueldo_t1 = $total_h * ($valor * 2);
                    $sueldo_t2 = $sueldo_t1 + $sueldo;

                    echo ("<br>" . "<br>" . $nombre . " Su sueldo total es " . $sueldo_t2 . "<br>");
                    echo "horas extras " . $total_h . "que valen " . $sueldo_t1;
                } else {
                    echo ("Su sueldo total es " . ($valor * $horas));
                }
            }
            ?>

        </div>
    </div>
</div>


<?php include "../include/footer.php"; ?>

