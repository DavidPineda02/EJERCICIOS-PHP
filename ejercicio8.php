<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perimetro y Area</title>
    </head>
    <body>
        <h2>Ejercicio 8</h2>
        <!-- Programa que Ingrese por teclado: 
        a. el valor del lado de un cuadrado para mostrar por pantalla el perímetro del mismo.
        b. la base y la altura de un rectángulo para mostrar el área del mismo -->
        <form action="" method="post">
            <fieldset>
                <legend>
                    <fieldset>Perimetro</fieldset>
                </legend>
                <br>
                
                <label for="">Valor de un lado del Cuadrado</label>
                <input type="number" name="lado" placeholder="Digite un numero"> 
            </fieldset>

            <br>

            <fieldset>
                <legend>
                    <fieldset>Area</fieldset>
                </legend>
                <br>
                
                <label for="">Base del Cuadrado</label>
                <input type="number" name="base" placeholder="Digite un numero">

                <br><br>

                <label for="">Altura del Cuadrado</label>
                <input type="number" name="altura" placeholder="Digite un numero">
            </fieldset>

            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>

<?php
    $lado = "{$_POST["lado"]}";
    $base = "{$_POST["base"]}";
    $altura = "{$_POST["altura"]}";

    $perimetro = $lado * 4;
    $area = $base * $altura;

    echo "<br> El Perimetro del Cuadrado es: <strong>{$perimetro}</strong>
    <br> El Area del Cuadrado es: <strong>{$area}</strong>";
?>