<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Voltaje</title>
    </head>
    <body>
        <h2>Ejercicio 3</h2>
        <!-- Construir el algoritmo para determinar el voltaje de un circuito a partir de la resistencia y la intensidad de corriente. -->
        <fieldset>

            <legend>
                <fieldset>Voltaje de un circuito</fieldset>
            </legend>
            <br>
            <form action="" method="post">
                <label for="">Resistencia</label>
                <input type="number" name="resistencia" placeholder="Digitar Resistencia">

                <br><br>

                <label for="">Intensidad</label>
                <input type="number" name="intensidad" placeholder="Digitar Intensidad">

                <br><br>

                <input type="submit" value="Enviar">
            </form>
        </fieldset>
    </body>
</html>

<?php
    $resistencia = "{$_POST["resistencia"]}";
    $intensidad = "{$_POST["intensidad"]}";
    $voltaje = $resistencia * $intensidad;

    echo "<br> El voltaje de la pista es de <strong>{$voltaje}</strong>";
?>