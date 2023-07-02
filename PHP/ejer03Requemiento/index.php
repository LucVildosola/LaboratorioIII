<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio Luciano Vildosola</title>
</head>

<style>
    td{
        border: 2px solid black;
        padding: 10px;
    }
</style>

<body>

    <?php

    echo "<h2>En este ejemplo se utuliza la funcion require() que ubica codigo php definido en el archivo ejemplo.inc</h2>" ;

    echo "<h2>Antes de insertar el include las variables declaradas en el mismo no existen. Las variables son: </h2>" ;

    foreach($datos1 as $dato1){
        echo "<h3>$dato1</h3>";
    }
    foreach($datos2 as $dato2){
        echo "<h3>$dato2</h3>";
    }

    echo "<h2>La longitud del Arreglo es: 0 " . $datos1 . "</h2>";

    require 'ejemplo2.inc';

    echo "<h2> Aqui ya se ejecuto la funcion require(). Cuando se usa require ocurre que si el archivo 'inc' no existe,
    se visualiza un warning y el script sigue ejecutandose hasta el final</h2>";

    ?>

    <table>
    <?php
    echo "<h2> Las 2 variables de tipo array asociativo en el inc son: </h2>";
    echo "<tr>";
    foreach($datos1 as $dato1){
        echo "<td>" . $dato1. "</td>";
    }
    echo "</tr>";
    foreach($datos2 as $dato2){
        echo "<td>" . $dato2. "</td>";
    }


    ?></table>
    <?php
    echo "<h2> La longitud de los arreglos es: ". count($datos1) . "</h2>";
    ?>





</body>
</html>