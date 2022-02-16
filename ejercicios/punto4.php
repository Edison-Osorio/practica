<?php require_once("../include/header.php");  ?>

<h1 class="text-center m-4">Persona menor de edad</h1>
<br>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 4</h1>
                <p>
                    Se tiene el nombre y la edad de tres personas. Se desea saber el nombre y la edad de la persona
                    de menor edad. Realice el algoritmo correspondiente.

                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="punto4.php" method="POST" class="was-validated">
                <div class="form-group">
                    <label for="nombre_1">Nombre persona 1</label>
                    <input type="text" name="nombre_1" class="form-control" placeholder="ingrese su nombre" required />
                </div>

                <div class="form-group">
                    <label for="edad_1">Edad persona 1</label>
                    <input type="number" name="edad_1" class="form-control" placeholder="ingrese su edad" required />
                </div>

                <div class="form-group">
                    <label for="nombre_2">Nombre persona 2</label>
                    <input type="text" name="nombre_2" class="form-control" placeholder="ingrese su nombre" required />
                </div>

                <div class="form-group">
                    <label for="edad_2">Edad persona 2</label>
                    <input type="number" name="edad_2" class="form-control" placeholder="ingrese su edad" required />
                </div>

                <div class="form-group">
                    <label for="nombre_3">Nombre persona 3</label>
                    <input type="text" name="nombre_3" class="form-control" placeholder="ingrese su nombre" required />
                </div>

                <div class="form-group">
                    <label for="edad_3">Edad persona 3</label>
                    <input type="number" name="edad_3" class="form-control" placeholder="ingrese su edad" required />
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
                $nombre_1 = $_REQUEST['nombre_1'];
                $nombre_2 = $_REQUEST['nombre_2'];
                $nombre_3 = $_REQUEST['nombre_3'];
                $edad_1 = $_REQUEST['edad_1'];
                $edad_2 = $_REQUEST['edad_2'];
                $edad_3 = $_REQUEST['edad_3'];

                if ($edad_1 < $edad_2 && $edad_1 < $edad_3) {
                    echo $nombre_1 . " es la persona menor con " . $edad_1 . " años";
                } elseif ($edad_2 < $edad_1 && $edad_2 < $edad_3) {
                    echo $nombre_2 . " es la persona menor con " . $edad_2 . " años";
                } elseif ($edad_3 < $edad_1 && $edad_3 < $edad_2) {
                    echo $nombre_3 . " es la persona menor con " . $edad_3 . " años";
                }
            }
            ?>
        </div>
    </div>
</div>
<?php include "../include/footer.php"; ?>