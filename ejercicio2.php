<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Par o Impar</title>
    </head>
    <body>
        <!-- Dado un número indicar si es par o impar y si es mayor de 10. -->
        <fieldset>
            <legend>
                <fieldset>Par o Impar</fieldset>
            </legend>
            <br>
            <form action="" method="post">
                <label for="">Digite un numero</label>
                <input type="number" name="numero" placeholder="Digite un numero">

                <br><br>

                <input type="submit" value="Enviar">
            </form>
        </fieldset>
    </body>
</html>

<?php
    $numeros = "{$_POST["numero"]}";
    $numero = $numeros % 2;

    if ($numero == 0){
        if ($numeros > 10){
            echo "<br> El numero <strong>{$numeros}</strong> es <strong>PAR</strong> ";
            echo "<br> El numero <strong>{$numeros}</strong> es <strong>MAYOR</strong> que <strong>10</strong>";
        } else{
            echo "<br> El numero <strong>{$numeros}</strong> es <strong>PAR</strong> ";
        }
    } else {
        if ($numeros > 10){
            echo "<br> El numero <strong>{$numeros}</strong> es <strong>IMPAR</strong>";
            echo "<br> El numero <strong>{$numeros}</strong> es <strong>MAYOR</strong> que <strong>10</strong>";
        } else{
            echo "<br> El numero <strong>{$numeros}</strong> es <strong>IMPAR</strong>";
        }
    }
?>