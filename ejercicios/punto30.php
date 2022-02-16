<?php require_once("../include/header.php");
?>

<h1 class="text-center m-4">¿Que precio de venta tienen los huevos?</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 30</h1>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            Una distribuidora de huevos quiere contratarlo a usted para que realice un algoritmo que calcule
                            el precio de venta para una cantidad de huevos a llevar por un determinado cliente. Guiándose por
                            la siguiente información:
                        </p>
                    </div>
                    <div class="col-md-6">
                        <table class="table text-white table-bordered" border="1">
                            <tr>
                                <td colspan="2">Precio unitario huevo</td>
                                <td colspan="4">Descuento por cantidades a llevar</td>
                            </tr>
                            <tr>
                                <td><b>Tipo A</b></td>
                                <td><b>Tipo AA</b></td>
                                <td> <b>1 -100</b></td>
                                <td> <b>101 -200</b></td>
                                <td> <b>201 - 300</b></td>
                                <td> <b>>= a 301</b></td>
                            </tr>
                            <tr>
                                <td>220</td>
                                <td> 250</td>
                                <td> 3%</td>
                                <td> 5%</td>
                                <td> 8%</td>
                                <td> 10%</td>
                            </tr>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="punto30.php" class="was-validated">
                Seleccione el tipo de huevo <br />
                <br />
                <div class="form-group">
                    <label for="typeA">Tipo A </label>
                    <input type="radio" name="TypeA" value="220" />
                </div>

                <div class="form-group">
                    <label for="TypeAA">Tipo AA</label>
                    <input type="radio" name="TypeAA" value="250" />
                </div>

                <div class="form-group">
                    <label for="totalH">Ingrese la cantidad de huevos</label>
                    <input type="number" name="totalH" class="form-control" placeholder="Cantidad huevos" required />
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
                $totalH = $_REQUEST['totalH'];
                if (isset($_REQUEST['TypeA'])) {
                    $TypeA = $_REQUEST['TypeA'];
                    if ($totalH > 0 && $totalH <= 100) {
                        $descuento = $TypeA * 0.03;
                        $totalP = ($totalH * $TypeA) - $descuento;
                        echo "Su total a pagar es " . $totalP . "$";
                    } elseif ($totalH > 100 && $totalH <= 200) {
                        $descuento = $TypeA * 0.05;
                        $totalP = ($totalH * $TypeA) - $descuento;
                        echo "Su total a pagar es " . $totalP . "$";
                    } elseif ($totalH > 200 && $totalH < 300) {
                        $descuento = $TypeA * 0.08;
                        $totalP = ($totalH * $TypeA) - $descuento;
                        echo "Su total a pagar es " . $totalP . "$";
                    } elseif ($totalH > 300) {
                        $descuento = $TypeA * 0.1;
                        $totalP = ($totalH * $TypeA) - $descuento;
                        echo "Su total a pagar es " . $totalP . "$";
                    }
                }

                if (isset($_REQUEST['TypeAA'])) {
                    $TypeAA = $_REQUEST['TypeAA'];
                    if ($totalH > 0 && $totalH <= 100) {
                        $descuento = $TypeAA * 0.03;
                        $totalP = ($totalH * $TypeAA) - $descuento;
                        echo "Su total a pagar es " . $totalP . "$";
                    } elseif ($totalH > 100 && $totalH <= 200) {
                        $descuento = $TypeAA * 0.05;
                        $totalP = ($totalH * $TypeAA) - $descuento;
                        echo "Su total a pagar es " . $totalP . "$";
                    } elseif ($totalH > 200 && $totalH < 300) {
                        $descuento = $TypeAA * 0.08;
                        $totalP = ($totalH * $TypeAA) - $descuento;
                        echo "Su total a pagar es " . $totalP . "$";
                    } elseif ($totalH > 300) {
                        $descuento = $TypeAA * 0.1;
                        $totalP = ($totalH * $TypeAA) - $descuento;
                        echo "Su total a pagar es " . $totalP . "$";
                    }
                }
            }

            ?>
        </div>
    </div>
</div>



<?php include "../include/footer.php";
?>