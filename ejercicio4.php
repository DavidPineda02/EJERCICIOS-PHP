<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edades</title>
    </head>
    <body>
        <h2>Ejercicio 4</h2>
        <!-- Construir el algoritmo que solicite el nombre y edad de 3 personas y determine el nombre de la persona con mayor edad. -->
        <fieldset>
            <legend>
                <fieldset>Persona Mayor</fieldset>
            </legend>
            <br>
            <form action="" method="post">
                <label for="">Persona 1</label>
                <input type="text" name="nombre1" placeholder="Digite el nombre">
                <input type="number" name="edad1" placeholder="Digite la edad">

                <br><br>

                <label for="">Persona 2</label>
                <input type="text" name="nombre2" placeholder="Digite el nombre">
                <input type="number" name="edad2" placeholder="Digite la edad">

                <br><br>

                <label for="">Persona 3</label>
                <input type="text" name="nombre3" placeholder="Digite el nombre">
                <input type="number" name="edad3" placeholder="Digite la edad">

                <br><br>

                <input type="submit" value="Enviar">
            </form>
        </fieldset>
    </body>
</html>

<?php
    $nombre1 = "{$_POST["nombre1"]}";
    $nombre2 = "{$_POST["nombre2"]}";
    $nombre3 = "{$_POST["nombre3"]}";
    $edad1 = "{$_POST["edad1"]}";
    $edad2 = "{$_POST["edad2"]}";
    $edad3 = "{$_POST["edad3"]}";

    if($edad1 > $edad2 && $edad1 > $edad3){
        echo "<br><strong>{$nombre1}</strong> tiene <strong>{$edad1}</strong> asi que es <strong>MAYOR</strong>.";
    } elseif ($edad2 > $edad1 && $edad2 > $edad3) {
        echo "<br><strong>{$nombre2}</strong> tiene <strong>{$edad2}</strong> asi que es <strong>MAYOR</strong>.";
    } elseif ($edad3 > $edad2 && $edad3 > $edad1) {
        echo "<br><strong>{$nombre3}</strong> tiene <strong>{$edad3}</strong> asi que es <strong>MAYOR</strong>.";
    }
?>