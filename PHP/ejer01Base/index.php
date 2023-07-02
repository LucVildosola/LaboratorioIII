
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
        background-color: lightblue;
    }
</style>
<body>

    <h4> Todo lo escrito fuera de las marcas de php en la respuesta http sin pasar por el procesador php</h4>

    <hr><?php
    echo "<h4> Todo texto y/o html <span style = 'color:blue'> entregado por el procesador php </span> usando la sentencia echo </h4>";
    ?></hr>

    <hr><?php
    $mivariable = "valor 1";
    echo "<h4> Sin usar concatenador <span style = 'color:blue'> \$mivariable </span> : $mivariable </h4>";
    echo "<h4> Usando concatenador <span style = 'color:blue'> \$mivariable </span> : " . $mivariable . "</h4>";
    ?></hr>

    <hr><?php
    define("MICONSTANTE", "valorConstante");
    echo "<h4> <span style = 'color:blue'> MICONSTANTE </span> : ". MICONSTANTE . "</h4>";
    echo "<h4> Tipo de <span style = 'color:blue'> MICONSTANTE </span> : ". gettype(MICONSTANTE) . "</h4>";
    ?></hr>

    <hr><?php
    $aPalabra = ["Hola", "Hello"];
    $aDiccionario = [];
    $i = 0;

    $aEnEspañol = ["Hola", "Adios", "Casa"];
    $aEnIngles = ["Hello", "Goodbye", "House"];
    $aEnPortugues = ["Olá", "Adeus", "Casa"];

    echo "<h3> Arreglos:</h3>";
    echo "<h4> <span style = 'color:blue'> SuPalabra [0] </span> : ". $aPalabra[0] . "</h4>";
    echo "<h4> <span style = 'color:blue'> SuPalabra [1] </span> : ". $aPalabra[1] . "</h4>";
    echo "<h4> Tipo de <span style = 'color:blue'> SuPalabra </span> : ". gettype($aPalabra) . "</h4>";

    echo "<h4> Se agrega por programa dos elementos nuevos.</h4>";
    echo "<h3> Todos los elementos originales y agregados: </h3>";

    array_push($aPalabra, "Ola", "Bonasera");
    foreach($aPalabra as $palabra){
        echo "<p> <ul style = list-style-type :circle> <li>" . $palabra . "</li> </ul> </p>";
    }
    ?></hr>

    <hr><table>
        <tr>
            <th>Español</th>
            <th>Ingles</th>
            <th>Portugues</th>
        </tr>
        <?php
            echo "<h3> Arreglo de dos dimensiones (diccionario)</h3>";
            echo "<h4> La variable \$aDiccionario tiene al siguiente tipo: " . gettype($aDiccionario) ."</h4>";

            $aPoliglota = [$aEnEspañol, $aEnIngles, $aEnPortugues];
            for ($i=0; $i< 3 ; $i++){
                echo "<tr>";
                for ($j=0; $j < 3 ; $j++){
                    echo "<td>" . $aPoliglota[$i][$j] . "</td>";
                }
                echo "</tr>";
            }
        ?>
    </table></hr>

    <hr><?php
    echo "<h3> Tambien asi se puede expresar el valor \$aPoliglota[1][2]: ". $aPoliglota[1][2] . "</h3>";
    echo "<h3> Cantidad de elementos de diccionario: ". count($aPoliglota) . "</h3>";


    echo "<h2> Variables de Tipo Arreglo Asociativo</h2>";

    $articulos = ["codArt" => "c0001", "descripcion" => "Harina", "precio" => 115, "cantidad" => 5];

    echo "<p> Codigo de Articulo: ". $articulos["codArt"] . "</p>";
    echo "<p> Descripcion de Articulo: ".$articulos["descripcion"] . "</p>";
    echo "<p> Precio Unitario: ".$articulos["precio"] . "</p>";
    echo "<p> Cantidad: ". $articulos["cantidad"]. "</p>";

    echo "<p> Cantidad de elementos: ". count($articulos). "</p>";
    echo "<p> Tipo de dato: ". gettype($articulos) . "</p>";

    ?></hr>

    <hr><?php

        $x = 3;
        $y = 4;

        echo "<h4> Expresiones aritmeticas</h4>";

        echo "<h4> La variable \$x tiene el siguiente valor: ". $x . "</h4>";
        echo "<h4> La variable \$y tiene el siguiente valor: ". $y . "</h4>";
        echo "<h4> La variable \$x tiene el siguiente tipo: ". gettype($x) . "</h4>";
        echo "<h4> La variable \$y tiene el siguiente valor: ". gettype($y) . "</h4>";

        echo "<h4> Asi se imprime una expresion aritmetica de Suma: (\$x + \$y) = ". $x + $y  . "</h4>";
        echo "<h4> Asi se imprime una expresion aritmetica de Multiplicacion: (\$x * \$y) = ". $x * $y  . "</h4>";
        echo "<h4> Asi se imprime una expresion aritmetica de Division: (\$x / \$y) = ". $x / $y  . "</h4>";

    ?></hr>


</body>
</html>