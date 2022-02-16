<?php require_once("../include/header.php");  ?>

<h1 class="text-center m-4">Calcular la definitiva del area programación</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 22</h1>
                <p>
                    Un estudiante desea saber a partir de sus notas parciales, la definitiva en la asignatura de
                    programación, teniendo en cuenta que esta se califica de la siguiente forma: un seguimiento que
                    equivale al 40%, un parcial que equivale al 20% un proyecto que equivale al 10% y un final que
                    equivale al 30%.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form method="POST" action="punto22.php" class="was-validated">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input class="form-control" type="text" name="nombre" placeholder="ingrese su nombre" required>
                </div>
                <div class="form-group">
                    <label for="seguimiento">Nota de seguimiento:</label>
                    <input class="form-control" type="number" name="seguimiento" placeholder="ingrese la nota de seguimiento" step="any" required>
                </div>
                <div class="form-group">
                    <label for="parcial">Nota parcial :</label>
                    <input class="form-control" type="number" name="parcial" placeholder="ingrese la nota parcial" step="any" required>
                </div>
                <div class="form-group">
                    <label for="proyecto">Nota proyecto:</label>
                    <input class="form-control" type="number" name="proyecto" placeholder="ingrese la nota del proyecto" step="any" required>
                </div>
                <div class="form-group">
                    <label for="notaFinal">Nota final :</label>
                    <input class="form-control" type="number" name="notaFinal" placeholder="ingrese la nota final" step="any" required>
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

            echo "Para ganar se debe de tener una nota superior o igual a 60 <br>";
            if (isset($_REQUEST['enviar'])) {

                $nombre = $_REQUEST['nombre'];

                $seguimiento = $_REQUEST['seguimiento'];
                $parcial1 = $_REQUEST['parcial'];
                $proyecto = $_REQUEST['proyecto'];
                $notaFinal = $_REQUEST['notaFinal'];

                $Nseguimiento = ($seguimiento * 40) / 100;
                $Nparcial = ($parcial1 * 20) / 100;
                $Nproyecto = ($proyecto * 10) / 100;
                $NotaFinal = ($notaFinal * 30) / 100;

                $definitiva = ($Nseguimiento + $Nparcial + $Nproyecto + $NotaFinal);

                // echo "Para ganar se debe de tener una nota superior o igual a 5 <br>";
                if ($definitiva >= 60) {
                    echo  $nombre . " <b><i> Felicitaciones ha ganado la competencia de programación</i></b>  su nota definitiva es de: " . $definitiva;
                } else {
                    echo  $nombre . "<b><i> perdio debe de esforsarse</i></b> más su nota definitiva es de: " . $definitiva;
                }
            }
            ?>

        </div>
    </div>
</div>


<?php include "../include/footer.php"; ?>
