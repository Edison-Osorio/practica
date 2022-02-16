<?php require_once("../include/header.php");  ?>

<h1 class="text-center m-4">Bono mensual</h1>
<br>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 6</h1>
                <p>
                    Cierta empresa proporciona un bono mensual a sus trabajadores, el cual puede ser por su
                    antigüedad o bien por el monto de su sueldo (el que sea mayor), de la siguiente forma:</p>
                    <p>
                    Cuando la antigüedad es mayor a 2 años pero menor a 5, se otorga 20 % de su sueldo; cuando es
                    de 5 años o más, 30 %. Ahora bien, el bono por concepto de sueldo, si éste es menor a $1000, se
                    da 25 % de éste, cuando éste es mayor a $1000, pero menor o igual a $3500, se otorga 15% de su
                    sueldo, para más de $3500. 10%. Realice el algoritmo correspondiente para calcular los dos tipos
                    de bono, asignando el mayor, y represéntelo con un diagrama de flujo y pseudocódigo.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            Calcular por:
            <form action="punto6.php" method="POST" class="was-validated">
                <div class="form-group">
                    <label for="x_antiguedad">Antiguedad</label>
                    <input type="radio" name="x_antiguedad" value="x_antiguedad" />
                </div>

                <div class="form-group">
                    <label for="x_sueldo">Sueldo</label>
                    <input type="radio" name="x_sueldo" value="x_sueldo" />
                </div>
                <br> Si selecciona "sueldo" no requiere ingresar su antiguedad
                <div class="form-group">
                    <label for="antiguedad">Antiguedad</label>
                    <input type="number" name="antiguedad" class="form-control" placeholder="Ingrese su antiguedad" />
                </div>

                <div class="form-group">
                    <label for="salario">Salario</label>
                    <input type="number" name="salario" class="form-control" placeholder="Ingrese su salario" required />
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
                $salario = $_REQUEST['salario'];
                $antiguedad = $_REQUEST['antiguedad'];

                if (isset($_REQUEST['x_antiguedad'])) {
                    if ($antiguedad > 2 && $antiguedad < 5) {
                        $bono = $salario * 0.2;
                        $t_salario = $salario + $bono;
                        echo "Su bono es de:" . $bono . "<br>";
                        echo "Su salario con bono es " . $t_salario;
                    } elseif ($antiguedad >= 5) {
                        $bono = $salario * 0.3;
                        $t_salario = $salario + $bono;
                        echo "Su bono es de: " . $bono . "<br>";
                        echo "Su salario con bono es " . $t_salario;
                    } else {
                        echo "Ingrese todos los campos";
                    }
                }

                if (isset($_REQUEST['x_sueldo'])) {
                    if ($salario > 0 && $salario < 1000) {
                        $bono = $salario * 0.25;
                        $t_salario = $salario + $bono;
                        echo "Su bono es de: " . $bono . "<br>";
                        echo "Su salario con bono es " . $t_salario;
                    } elseif ($salario >= 1000 && $salario <= 3500) {
                        $bono = $salario * 0.15;
                        $t_salario = $salario + $bono;
                        echo "Su bono es de: " . $bono . "<br>";
                        echo "Su salario con bono es " . $t_salario;
                    } elseif ($salario > 3500) {
                        $bono = $salario * 0.1;
                        $t_salario = $salario + $bono;
                        echo "Su bono es de: " . $bono . "<br>";
                        echo "Su salario con bono es " . $t_salario;
                    } else {
                        echo "Ingrese el campo 'salario'";
                    }
                }
            }
            ?>
        </div>
    </div>
</div>



<?php include "../include/footer.php"; ?>