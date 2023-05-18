<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atletas</title>
    </head>
    <body>
        <!-- N atletas han pasado a finales en salto triple en los juegos olímpicos femenino de 2022. Diseñe un programa que pida por teclado los nombres de cada atleta finalista y a su vez, susmarcas del salto en metros. Informar el nombre de la atleta campeona que se quede con la medalla de oro y si rompió récord, reportar el pago que será de 500 millones. El récordesta en 15,50 metros. -->
        <h2>Ejercicio 9</h2>
        <form action="" method="post">
            <fieldset>
                <legend><fieldset>Numero De Atletas</fieldset></legend>

                <br>

                <div>
                    <label for="">Cantidad de atletas:</label>
                    <input type="number" name="atletas" id="" min="0">
                </div>
        </form>
    </body>
</html>

<?php
    $num = "{$_POST["atletas"]}";
    $marcaM = 0;
    $marcas = 0;
    $atletaM;
    for ($n = 0; $n < $num; $n++) { 
        echo '
            <br>
            <br>
            <fieldset>
                <form action="" method="post">
                    <legend><fieldset>Numero De Atletas</fieldset></legend>

                    <br>

                    <div>
                        <label for="">Nombre del Atleta</label>
                        <input type="text" name="nombre" id="">
                    </div>

                    <div>
                        <label for="">Marca del Atleta:</label>
                        <input type="number" name="record" id="" min="0">
                    </div>

                    <br>

                    <input type="submit" value="Enviar">

                    <br>
                </form>
            </fieldset>
        ';
        $atleta = "{$_POST["nombre"]}";
        $marcas = "{$_POST["record"]}";

        if ($marcas > $marcaM ){
            $marcaM = $marcas;
            $atletaM = $atleta;
        }

        echo "<br> El atleta: {$atletaM} ganó la medalla de oro con una marca de: {$marcaM}";
        if ($marcaM < 15) {
            echo "<br> El atleta ganó pero no rompio el record de 15,50m";
        } elseif ($marcaM > 15) {
            echo "<br> El atleta rompio el record asi que ha ganado 500 millones";
        }
    }
?>