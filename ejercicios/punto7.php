<?php require_once("../include/header.php");  ?>

<h1 class="text-center m-4">¿Que tipo de seguro adquiero?</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 7</h1>
                <p>
                    Una compañía de seguros para autos ofrece dos tipos de póliza: cobertura amplia (A) y daños a
                    terceros (B). Para el plan A, la cuota base es de $1,200, y para el B, de $950. A ambos planes se
                    les carga 10% del costo si la persona que conduce tiene por hábito beber alcohol, 5% si utiliza lentes,
                    5% si padece alguna enfermedad –como deficiencia cardiaca o diabetes–, y si tiene más de 40 años,
                    se le carga 20%, de lo contrario sólo 10%. Todos estos cargos se realizan sobre el costo base.
                    Realice diagrama de flujo y diagrama N/S que represente el algoritmo para determinar cuánto le
                    cuesta a una persona contratar una póliza.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="punto7.php" method="POST" class="was-validated">
                Seleccione su tipo de poliza <br />
                <br />
                <div class="form-group">
                    <label for="PlanA">Cobertura Amplia</label>
                    <input type="radio" name="PlanA" value="1200"" />
                </div>

                <div class=" form-group">
                    <label for="PlanB">Daños a terceros</label>
                    <input type="radio" name="PlanB" value="950" />
                </div>
                <br />
                Por favor llene el siguente formulario
                <div class="form-group">
                    ¿Consume alcohol? <br />
                    <select name="option1" id="" required>
                        <option value="0">Seleccione una opcion</option>
                        <option value="0.1">Si</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <br />
                <div class="form-group" require>
                    ¿Usa lentes? <br />
                    <select name="option2" id="" required>
                        <option value="0">Seleccione una opcion</option>
                        <option value="0.05">Si</option>
                        <option value="0">No</option>
                    </select>
                </div>
                <br />
                <div class="form-group">
                    ¿Padece alguna emfermedad? <br />
                    <select name="option3" id="" required>
                        <option value="0">Seleccione una opcion</option>
                        <option value="0.05">Diabetes</option>
                        <option value="0.05">Deficiencia cardiaca</option>
                        <option value="0.05">Otra</option>
                        <option value="0">Ninguna</option>
                    </select>
                </div>
                <br />
                <div class="form-group">
                    ¿Es mayor de 40 años? <br />
                    <select name="option4" id="" required>
                        <option value="0">Seleccione una opcion</option>
                        <option value="0.2">Si</option>
                        <option value="0">No</option>
                    </select>
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
            <br />
            <?php
            if (isset($_REQUEST['enviar'])) {
                $option1 = $_REQUEST['option1'];
                $option2 = $_REQUEST['option2'];
                $option3 = $_REQUEST['option3'];
                $option4 = $_REQUEST['option4'];
                if (isset($_REQUEST['PlanA'])) {
                    $val = $_REQUEST['PlanA'];
                    $totalpor = $option1 + $option2 + $option3 + $option4;
                    if ($totalpor == 0) {
                        $tPagar = $val + ($val * 0.1);
                        echo "El total a pagar por su poliza es: " . $tPagar . "$";
                    } else {
                        $tPagar = $val + ($val * $totalpor);
                        echo "El total a pagar por su poliza es: " . $tPagar . "$";
                    }
                }
                if (isset($_REQUEST['PlanB'])) {
                    $val = $_REQUEST['PlanB'];
                    $totalpor = $option1 + $option2 + $option3 + $option4;
                    if ($totalpor == 0) {
                        $tPagar = $val + ($val * 0.1);
                        echo "El total a pagar por su poliza es: " . $tPagar . "$";
                    } else {
                        $tPagar = $val + ($val * $totalpor);
                        echo "El total a pagar por su poliza es: " . $tPagar . "$";
                    }
                }
            }
            ?>
        </div>
    </div>
</div>


<?php include "../include/footer.php"; ?>
