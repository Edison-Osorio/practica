<?php require_once("../include/header.php");  ?>


<h1 class="text-center m-4">¿A que signo corresponde?</h1>
<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h1 class="text-center">Ejercicio 26</h1>
                <p>
                    Leer por pantalla un número entre 1 y 12, luego imprimir en letras el mes a que corresponde dicho
                    valor y a que signo del zodiaco pertenece, ejemplo: si es mes de Mayo, los signos a que corresponde
                    son: Tauro-Geminis.
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="punto26.php" method="POST" class="was-validated">
                <div class="form-group">
                    <label for="n">Numero del mes</label>
                    <input class="form-control" type="number" name="n" placeholder="Ingrese un numero del 1 al 12" required>
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
                $n = $_REQUEST['n'];
                if ($n >= 1 && $n <= 12) {
                    switch ($n) {
                        case '1':
                            echo "El numero " . $n . " corresponde a Enero y sus signos zodiacales son Capricornio - Acuario ";
                            break;
                        case '2':
                            echo  "El numero " . $n . " corresponde a Febrero y sus signos zodiacales son Acuario - Pisis ";
                            break;
                        case '3':
                            echo  "El numero " . $n . " corresponde a Marzo y sus signos zodiacales son Pisis - Aries ";
                            break;
                        case '4':
                            echo  "El numero " . $n . " corresponde a Abril y sus signos zodiacales son Aries - Tauro ";
                            break;
                        case '5':
                            echo  "El numero " . $n . " corresponde a Mayo y sus signos zodiacales son Tauro - Geminis";
                            break;
                        case '6':
                            echo  "El numero " . $n . " corresponde a Junio y sus signos zodiacales son Geminis - Cancer ";
                            break;
                        case '7':
                            echo  "El numero " . $n . " corresponde a Julio y sus signos zodiacales son Cancer - Leo ";
                            break;
                        case '8':
                            echo  "El numero " . $n . " corresponde a Agosto y sus signos zodiacales son Leo - Virgo ";
                            break;
                        case '9':
                            echo  "El numero " . $n . " corresponde a Septiembre y sus signos zodiacales son Virgo - Libra ";
                            break;
                        case '10':
                            echo $n . " corresponde a Octubre y sus signos zodiacales son Libra - Escorpio ";
                            break;
                        case '11':
                            echo  "El numero " . $n . " corresponde a Noviembre y sus signos zodiacales son Escorpio - Sagitario ";
                            break;

                        default:
                            echo  "El numero " . $n . " corresponde a Diciembre y sus signos zodiacales son Sagitario - Capricornio ";
                            break;
                    }
                } else {
                    echo "Ingrese solo numeros del 1 al 12";
                }
            }

            ?>
        </div>
    </div>
</div>
<?php include "../include/footer.php"; ?>