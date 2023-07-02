<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
sleep(2);
    $palabra = $_POST["palabra"];
    $md5Encriptado = md5($palabra);
    $sha1Encriptado = sha1($palabra);
    $respuesta = array(
        "md5Encriptado" => $md5Encriptado,
        "sha1Encriptado" => $sha1Encriptado,
        "estados" => "Success"
    );
    echo json_encode($respuesta);
?>
</body>
</html>