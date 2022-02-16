<?php require_once("../include/header.php");  ?>

<h1 class="text-center m-4">Pantalones</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 18</h1>
                <p>
                    Realice un algoritmo para resolver el siguiente problema: una fábrica de pantalones desea
                    calcular cuál es el precio final de venta y cuánto ganará por los N pantalones que produzca con el
                    corte de alguno de sus modelos, para esto se cuenta con la siguiente información:
                <ul>
                    <li>a) Tiene dos modelos A y B, tallas 30, 32 y 36 para ambos modelos.</li>
                    <li>b) Para el modelo A se utiliza 1.50 m de tela, y para el B 1.80 m.</li>
                    <li>c) Al modelo A se le carga 80 % del costo de la tela, por mano de obra. Al modelo B se le carga
                        95 % del costo de la tela, por el mismo concepto.</li>
                    <li>d) A las tallas 32 y 36 se les carga 4 % del costo generado por mano de obra y tela, sin importar
                        el modelo.</li>
                    <li>e) Cuando se realiza el corte para fabricar una prenda sólo se hace de un solo modelo y una sola
                        talla.</li>
                    <li>f) Finalmente, a la suma de estos costos se les carga 30%, que representa la ganancia extra de
                        la tienda</li>
                </ul>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="punto18.php" class="was-validated">
                <div class="form-group">
                    <label for="talla">Talla</label>
                    <select name="talla" required="required">
                        <option value="1">30</option>
                        <option value="2">32</option>
                        <option value="3">36</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="Modelo">Modelo</label>
                    <select name="modelo" required="required">
                        <option value="1">A</option>
                        <option value="2">B</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="#pantalones">Numero de pantalones:</label>
                    <input class="form-control" type="number" name="#pantalones" placeholder="Ingrese el numero de pantalones" required step="any">
                </div>
                <div class="form-group">
                    <label for="metrotela">Metro de tela:</label>
                    <input class="form-control" type="number" step="0.000001" name="metrotela" placeholder="Ingrese los metros de tela" required>
                </div>

                <!-- botones de navegacion -->

                <div class="form-group">
                    <br>
                    <a href="../index.php" class="text-white btn btn-secondary btn-block">
                        <i class="fas fa-arrow-left"></i> Regresar al Inicio
                    </a>
                    <input class="btn btn-success m-3 " type="submit" value="calcular" name="calcular">
                </div>


            </form>
        </div>
        <div class="col-md-8 card-header text-center">
            <br>
            <?php
            if (isset($_REQUEST['calcular'])) {
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    $N_pantalones = floatval($_POST['#pantalones']);
                    $metro_de_tela = floatval($_POST['metrotela']);
                    $modelo = intval($_POST['modelo']);
                    $talla = intval($_POST['talla']);
                    if ($modelo == 1)
                        $metros_de_tela = 1.5 * $N_pantalones;
                    else
                        $metros_de_tela = 1.8 * $N_pantalones;
                    $costo_de_la_tela = $metros_de_tela * $metro_de_tela;
                    if ($modelo == 1)
                        $mano_de_obra = $costo_de_la_tela * 0.8;
                    else
                        $mano_de_obra = $costo_de_la_tela * 0.95;
                    if ($talla == 2 || $talla == 3)
                        $cargo_por_talla = $mano_de_obra * 0.04;
                    else
                        $cargo_por_talla = 0;
                    $ganancia_extra = ($costo_de_la_tela + $mano_de_obra + $cargo_por_talla) * 0.3;
                    $precio_final = $costo_de_la_tela + $mano_de_obra + $cargo_por_talla + $ganancia_extra;
                    $ganancia = $cargo_por_talla + $ganancia_extra;
                    echo 'Valor de cargo por talla: ' . $cargo_por_talla . "<br/>\n";
                    echo 'Valor de costo de la tela: ' . $costo_de_la_tela . "<br/>\n";
                    echo 'Valor de ganancia: ' . $ganancia . "<br/>\n";
                    echo 'Valor de ganancia extra: ' . $ganancia_extra . "<br/>\n";
                    echo 'Valor de mano de obra: ' . $mano_de_obra . "<br/>\n";
                    echo 'Valor de metros de tela: ' . $metros_de_tela . "<br/>\n";
                    echo 'Valor de precio final: ' . $precio_final . "<br/>\n";
                }
            }
            ?>

        </div>
    </div>
</div>


<?php include "../include/footer.php"; ?>