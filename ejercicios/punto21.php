<?php require_once("../include/header.php");  ?>

<h1 class="text-center m-4">Utilidad</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 21</h1>
                <p>
                Un almacén que vende zapatos a un precio fijo desea conocer a cuanto asciende su utilidad en el total de las ventas, partiendo del número de artículos vendidos por día. Se conoce que la utilidad es del 35%
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="punto21.php" class="was-validated">
                <div class="form-group">
                    <label for="zapatos">zapatos vendidos</label>
                    <input class="form-control" type="number" name="zapatos" placeholder="ingrese la cantidad de zapatos vendidos" required step="any">
                </div>
                <div class="form-group">
                    <label for="precio">Precio por zapato</label>
                    <input class="form-control" type="number" name="precio" placeholder="Ingrese el precio por zapato" required>
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
                $zapatos = $_REQUEST['zapatos'];
                $precio = $_REQUEST['precio'];
                $utilidad;
                $ganaciato;
                $ganaciato=$zapatos*$precio;
                $utilida=$ganaciato*0.35;
                echo "La cantidad de zapatos que vendio hoy ".$zapatos." los cuales dieron una utilidad de: ".$utilida." pesos";
            }
            ?>

        </div>
    </div>
</div>


<?php include "../include/footer.php"; ?>