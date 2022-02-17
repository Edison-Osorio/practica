<?php require_once("../include/header.php");
?>

<h1 class="text-center m-4">Bandido de peluche</h1>
<br>


<h1 class="text-center m-4"></h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 19</h1>
                <p>
                    El banco “Bandido de peluche” desea calcular para uno de sus clientes el saldo actual, el pago
                    mínimo y el pago para no generar intereses. Los datos que se conocen son: saldo anterior del cliente,
                    monto de las compras que realizó y el pago que depositó en el corte anterior. Para calcular el pago
                    mínimo se debe considerar 15% del saldo actual, y para no generar intereses corresponde 85% del
                    saldo actual, considerando que este saldo debe incluir 12% de los intereses causados por no realizar
                    el pago mínimo y $200 por multa por el mismo motivo.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="punto19.php" class="was-validated">
                <div class="form-group">
                    <label for="compraRealizada">Valor compras realizadas</label>
                    <input class="form-control" type="number" name="compraRealizada" placeholder="Valor de la compra realizada" required>
                </div>

                <div class="form-group">
                    <label for="pagoAnterior">Valor pago anterior</label>
                    <input class="form-control" type="number" name="pagoAnterior" placeholder="Valor pago anterior" required>
                </div>

                <div class="form-group">
                    <label for="saldoanterior">Saldo anterior</label>
                    <input class="form-control" type="number" name="saldoAnterior" placeholder="Total saldo anterior" required>
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
                $compraRealizada = $_REQUEST['compraRealizada'];
                $pagoAnterior = $_REQUEST['pagoAnterior'];
                $saldoAnterior = $_REQUEST['saldoAnterior'];
                $gananciaIntereses = 0;

                if ($saldoAnterior * 0.15 > $pagoAnterior) {
                    $interes = $saldoAnterior * 0.12;
                    $multa = 200;
                } else {
                    $interes = 0;
                    $multa = 0;
                }
                $saldoActual = ($saldoAnterior + $compraRealizada + $interes + $multa) - $pagoAnterior;
                $pagoMinimo = $saldoActual * 0.15;
                $pagoSinInteres = $saldoActual * 0.85;
                $gananciaIntereses = $gananciaIntereses + $interes;
                echo 'Valor de intereses: ' . $interes . "<br/>\n";
                echo 'Valor de multa: ' . $multa . "<br/>\n";
                echo 'Valor de pago minimo: ' . $pagoMinimo . "<br/>\n";
                echo 'Valor de pago para no generar intereses: ' . $pagoSinInteres . "<br/>\n";
                echo 'Valor de saldo actual: ' . $saldoActual . "<br/>\n";
            }
            ?>
        </div>
    </div>
    <h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit laudantium minus, nobis hic numquam recusandae nam quaerat ipsum doloremque velit nihil ex iure dolorum. Dicta numquam excepturi assumenda odio reiciendis!</h2>
</div>


<?php include "../include/footer.php";
?>