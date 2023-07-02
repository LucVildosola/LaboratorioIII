<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio Luciano Vildosola</title>
</head>
<body>
    <?php
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];

        echo "<h1> Valores Pasados: </h1>";
        echo "<h3> Nombre: ".$nombre."<br> Apellido: ".$apellido."</h3>";
    ?>
    
</body>
</html>