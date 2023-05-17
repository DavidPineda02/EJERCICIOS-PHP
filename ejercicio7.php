<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Factura</title>
    </head>
    <body>
        <h2>Ejercicio 7</h2>
        <!-- Programa que pida el ingreso del nombre y precio de un artículo y la cantidad que lleva el cliente. Mostrar lo que debe pagar el comprador en su factura. -->
        <fieldset>
            <legend>
                <fieldset>Compra del Producto</fieldset>
            </legend>
            <br>
            <form action="" method="post">
                <label for="">Nombre del Comprador</label>
                <input type="text" name="nombre" placeholder="Digitar nombre">

                <br><br>
                
                <label for="">Nombre del Producto</label>
                <input type="text" name="nombreP" placeholder="Digitar nombre">

                <br><br>

                <label for="">Cantidad de Compra</label>
                <input type="number" name="compra" placeholder="Digite un numero">

                <br><br>

                <label for="">Precio del Producto</label>
                <input type="number" name="precio" placeholder="Digite el precio">

                <br><br>

                <input type="submit" value="Enviar">
            </form>
        </fieldset>
    </body>
</html>

<?php
    $nombre = "{$_POST["nombre"]}";
    $nombreP = "{$_POST["nombreP"]}";
    $cantidad = "{$_POST["compra"]}";
    $precio = "{$_POST["precio"]}";
    $total = $precio * $cantidad;

    echo "<br> ------ FACTURA ------
    <br> Nombre: <strong>{$nombre}</strong>
    <br> Producto: <strong>{$nombreP}</strong>
    <br> Cantidad: <strong>{$cantidad}</strong>
    <br> Precio: <strong>{$precio}</strong>
    <br>
    <br> Total: <strong>{$total}</strong> 
    <br> -----------------------------
    "
?>