<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Promedio</title>
    </head>
    <body>
        <h2>Ejercicio 1</h2>
        <!-- Construir el algoritmo para un programa que ingrese tres notas de un alumno, si el promedio es menor o igual a 3.9 mostrar un mensaje "Estudie“, de lo contrario un mensaje que diga "becado" -->
        <fieldset>
            <legend>
                <fieldset>Promedio del Alumno</fieldset>
            </legend>
            <br>
            <form action="" method="post">
                <label for="">Nombre del Alumno</label>
                <input type="text" name="nombre" placeholder="Digite el nombre">

                <br><br>

                <label for="">Notas del Alumno</label>
                <input type="number" name="nota1" placeholder="Digite la nota">
                <input type="number" name="nota2" placeholder="Digite la nota">
                <input type="number" name="nota3" placeholder="Digite la nota">

                <br><br>

                <input type="submit" value="Enviar">
            </form>
        </fieldset>
    </body>
</html>

<?php
    $name = "{$_POST["nombre"]}";
    $nota1 = "{$_POST["nota1"]}";
    $nota2 = "{$_POST["nota2"]}";
    $nota3 = "{$_POST["nota3"]}";

    $notaTotal = ($nota1 + $nota2 + $nota3) / 3;

    if ($notaTotal <= 3.9 ){
        echo "<br> La institucion le manda a decir al estudiante <strong>{$name}</strong>: Estudie Vago.";
    } else{
        echo "<br> El estudiante <strong>{$name}</strong> fue becado.";
    }
    /* echo "<br> El estudiante {$name} obtuvo como promedio: {$notaTotal}." */
?>