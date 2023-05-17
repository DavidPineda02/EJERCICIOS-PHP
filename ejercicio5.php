<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Numeros</title>
    </head>
    <body>
        <h2>Ejercicio 5</h2>
        <!-- Construir el algoritmo que lea por teclado dos números, si el primero es mayor al segundo informar su suma y diferencia, en caso contrario, informar el producto y la división del primero respecto al segundo. -->
        <fieldset>
            <legend>
                <fieldset>Operaciones</fieldset>
            </legend>
            <br>
            <form action="" method="post">
                <label for="">Digite un numero</label>
                <input type="number" name="numero1" placeholder="Digite un numero">

                <br><br>

                <label for="">Digite un numero</label>
                <input type="number" name="numero2" placeholder="Digite un numero">

                <br><br>

                <input type="submit" value="Enviar">
            </form>
        </fieldset>
    </body>
</html>

<?php
    $numero1 = "{$_POST["numero1"]}";
    $numero2 = "{$_POST["numero2"]}";

    if ($numero1 > $numero2){
        $suma = $numero1 + $numero2;
        $resta = $numero1 - $numero2;
        echo "<br> La sumatoria es <strong>{$suma}</strong> y su diferencia es <strong>{$resta}</strong>";
    } else {
        $multiplicacion = $numero2 * $numero1;
        $division = $numero1 / $numero2;
        echo "<br> El producto es <strong>{$multiplicacion}</strong> y su division es <strong>{$division}</strong>";
    }
?>