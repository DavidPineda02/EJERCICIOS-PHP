<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Estudiantes</title>
    </head>
    <body>
        <h2>Ejercicio 06</h2>
        <!-- Construir el algoritmo en Javascript para un programa para cualquier cantidad de estudiantes que lea el nombre, el sexo y la nota definitiva y halle al estudiante con la mayor nota y al estudiante con la menor nota y cuantos eran hombres y cuantos mujeres. -->
        <form action="06-ejercicio.php" method="post">
            <fieldset>
                <legend><fieldset>Primer Estudiante</fieldset></legend>

                <br>

                <div>
                    <label for="">Ingrese el nombre del estudiante: </label>
                    <input type="text" name="estudiante1" id="">
                </div>

                <br>

                <div>
                    <label for="">Ingrese el sexo: </label>
                    <select name="sexo1" id="">
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                    </select>
                </div>

                <br>

                <div>
                    <label for="">Ingrese la Primera Nota: </label>
                    <input type="number" name="est1Nota1" id="" min="1" max="5">

                    <label for="">Ingrese la Segunda Nota: </label>
                    <input type="number" name="est1Nota2" id="" min="1" max="5">

                    <label for="">Ingrese la Tercer Nota: </label>
                    <input type="number" name="est1Nota3" id="" min="1" max="5">
                </div>
            </fieldset>

            <br>
            <!-- Segundo -->
            <fieldset>
                <legend><fieldset>Segundo Estudiante</fieldset></legend>

                <br>

                <div>
                    <label for="">Ingrese el nombre del estudiante: </label>
                    <input type="text" name="estudiante2" id="">
                </div>

                <br>

                <div>
                    <label for="">Ingrese el sexo: </label>
                    <select name="sexo2" id="">
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                    </select>
                </div>

                <br>

                <div>
                    <label for="">Ingrese la Primer Nota: </label>
                    <input type="number" name="est2Nota1" id="" min="1" max="5">

                    <label for="">Ingrese la Segunda Nota: </label>
                    <input type="number" name="est2Nota2" id="" min="1" max="5">

                    <label for="">Ingrese la Tercer Nota: </label>
                    <input type="number" name="est2Nota3" id="" min="1" max="5">
                </div>
            </fieldset>

            <br>
            <!-- Tercer -->
            <fieldset>
                <legend><fieldset>Tercer Estudiante</fieldset></legend>

                <br>

                <div>
                    <label for="">Ingrese el nombre del estudiante: </label>
                    <input type="text" name="estudiante3" id="">
                </div>

                <br>

                <div>
                    <label for="">Ingrese el sexo: </label>
                    <select name="sexo3" id="">
                        <option value="Hombre">Hombre</option>
                        <option value="Mujer">Mujer</option>
                    </select>
                </div>

                <br>

                <div>
                    <label for="">Ingrese la Primer Nota: </label>
                    <input type="number" name="est3Nota1" id="" min="1" max="5">
                    
                    <label for="">Ingrese la Segunda Nota: </label>
                    <input type="number" name="est3Nota2" id="" min="1" max="5">
                    
                    <label for="">Ingrese la Tercer Nota: </label>
                    <input type="number" name="est3Nota3" id="" min="1" max="5">
                </div>
            </fieldset>
            <br>
            <input type="submit" value="Enviar">
            <br>
        </form>
    </body>
</html>

<?php
    $mayor;
    $menor;

    $hombres = 0;
    $mujeres = 0;

    $sexo1 = $_POST["sexo1"];
    $sexo2 = $_POST["sexo2"];
    $sexo3 = $_POST["sexo3"];

    $estudiante1 = $_POST["estudiante1"];
    $estudiante2 = $_POST["estudiante2"];
    $estudiante3 = $_POST["estudiante3"];

    if ($_POST) {
        if ($sexo1 == 'Hombre') {
            $hombres++;
        } else {
            $mujeres++;
        }
        if ($sexo2 == 'Hombre') {
            $hombres++;
        } else {
            $mujeres++;
        }
        if ($sexo3 == 'Hombre') {
            $hombres++;
        } else {
            $mujeres++;
        }
        echo "$mujeres mujeres";
        echo "$hombres hombres";
    }

    $promedioEst1 = ($_POST["est1Nota1"] + $_POST["est1Nota2"] + $_POST["est1Nota3"])/3;
    $promedioEst2 = ($_POST["est2Nota1"] + $_POST["est2Nota2"] + $_POST["est2Nota3"])/3;
    $promedioEst3 = ($_POST["est3Nota1"] + $_POST["est3Nota2"] + $_POST["est3Nota3"])/3;

    //Mayor
    if ($promedioEst1 > $promedioEst2 && $promedioEst1 > $promedioEst3) {
        echo "<br>$estudiante1 tiene el mejor promedio con $promedioEst1";
        $mayor = $estudiante1;
    } elseif ($promedioEst2 > $promedioEst3 && $promedioEst2 > $promedioEst1) {
        echo "<br>$estudiante2 tiene el mejor promedio con $promedioEst2";
        $mayor = $estudiante2;
    } elseif ($promedioEst3 > $promedioEst1 && $promedioEst3 > $promedioEst2) {
        echo "<br>$estudiante3 tiene el mejor promedio con $promedioEst3";
        $mayor = $estudiante3;
    }

    //Menor
    if ($promedioEst1 < $promedioEst2 && $promedioEst1 < $promedioEst3) {
        echo "<br>$estudiante1 tiene el peor promedio con $promedioEst1";
        $menor = $estudiante1;
    } elseif ($promedioEst2 < $promedioEst3 && $promedioEst2 < $promedioEst1) {
        echo "<br>$estudiante2 tiene el peor promedio con $promedioEst2";
        $menor = $estudiante2;
    } elseif ($promedioEst3 < $promedioEst1 && $promedioEst3 < $promedioEst2) {
        echo "<br>$estudiante3 tiene el peor promedio con $promedioEst3";
        $menor = $estudiante3;
    }
?>