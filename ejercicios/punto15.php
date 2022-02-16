<?php require_once("../include/header.php");  ?>

<h1 class="text-center m-4">¿Que paquete se podra comparar con el dinero de diciembre?</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 15</h1>
                <p>
                    Realice un algoritmo que permitan determinar qué paquete se puede comprar una persona con
                    el dinero que recibirá en diciembre, considerando lo siguiente:</p>
                <ul>
                    <li>
                        Paquete A. Si recibe $50,000 o más se comprará una televisión, un modular, tres pares de
                        zapatos, cinco camisas y cinco pantalones.
                    </li>
                    <li>
                        Paquete B. Si recibe menos de $50,000 pero más (o igual) de $20,000 se comprará una
                        grabadora, tres pares de zapatos, cinco camisas y cinco pantalones.
                    </li>
                    <li>
                        Paquete C. Si recibe menos de $20,000 pero más (o igual) de $10,000, se comprará dos pares
                        de zapatos, tres camisas y tres pantalones.
                    </li>
                    <li>
                        Paquete D. Si recibe menos de $10,000, se tendrá que conformar con un par de zapatos, dos
                        camisas y dos pantalones.
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="punto15.php" class="was-validated">
                <div class="form-group">
                    <label for="dinero">Dinero:</label>
                    <input class="form-control" type="number" name="dinero" placeholder="ingrese la cantida de dinero recibida" required step="any">
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

                $dinero = $_REQUEST['dinero'];

                if ($dinero >= 50000) {
                    echo "Paquete A. Se comprará una televisión, un modular, tres pares de
                    zapatos, cinco camisas y cinco pantalones.";
                } elseif ($dinero >= 20000 && $dinero < 50000) {
                    echo "Paquete B. Se comprará una grabadora, tres pares de zapatos, cinco camisas y cinco pantalones.";
                }elseif ($dinero >=10000 && $dinero < 20000) {
                    echo "Paquete C. Se comprará dos pares de zapatos, tres camisas y tres pantalones.";
                }elseif ($dinero < 10000) {
                    echo " Paquete D. Se tendrá que conformar con un par de zapatos, dos
                    camisas y dos pantalones.";
                }
            }
            ?>

        </div>
    </div>
</div>


<?php include "../include/footer.php"; ?>