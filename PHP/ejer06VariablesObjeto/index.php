<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siito Luciano Vildosola</title>
    <style>
        span{
            color: blue;
        }
    </style>
</head>
<body>
    <h1>Variables tipo objeto en PHP. Objeto renglon de pedido</h1>

    <h1><span>$objRenglonPedido</span></h1>

    <?php
        $objPedido = new stdclass;
        $objPedido->codigoArt = "FF565D5";
        $objPedido->descripcion = "Cerveza Patagonia 710 cm3";
        $objPedido->precio = 650;
        $objPedido->cantidad = 2;

      
        $arregloPedidos = [];
        array_push($arregloPedidos, $objPedido);
        array_push($arregloPedidos, new $objPedido);
        $arregloPedidos[1]->codigoArt = "OOPPS88";
        $arregloPedidos[1]->descripcion = "Lata Tomate Cica 320 gr";
        $arregloPedidos[1]->precio = 150;
        $arregloPedidos[1]->cantidad = 22;

        foreach($arregloPedidos as $pedido){
            echo "<br> Codigo Articulo: ".  $pedido->codigoArt.", Descripcion: ".$pedido->descripcion.", Precio Unitario ".$pedido->precio.", Cantidad: ".$pedido->cantidad;
        }

        echo "<h1>Tipo de <span>$"."objRenglonPedido</span>: ". gettype($objPedido) ."</h1>";

        echo "<h1>Definamos arreglo de pedidos: <br> <span>\$arregloPedidos </span></h1>";


        echo "<h1>Cantidad de renglones: ". count($arregloPedidos)."</h1>";

        echo "<h1>Produccion de un objeto <span>\$objRenglonPedido</span> con dos atributos array renglonesPedido y cantidadDeRenglones</h1>";
        $objPedidos = new stdclass;
        $objPedidos->pedidos = $arregloPedidos;
        $objPedidos->cantidad = count($arregloPedidos);

        echo "<h3>Cantidad de renglones: ". count($arregloPedidos)."</h3>";

        $json = json_encode($objPedidos);

        echo "<h1>Produccion de JSON <span>\$objPedidos </span></h1>";
        echo $json;
    ?>
</body>
</html>