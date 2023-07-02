<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sitio Luciano Vildosola</title>
    <style>
        td{
            background-color: lightgreen;
            border: black solid 1px;
        }
    </style>
</head>
<body>
    <h1>Variables del servidor</h1>
    <table>
    <?php
        echo "<tr><td>SERVER_ADDR</td><td>". $_SERVER['SERVER_ADDR'] ."</td></tr>";
        echo "<tr><td>SERVER_PORT</td><td>". $_SERVER['SERVER_PORT'] ."</td></tr>";
        echo "<tr><td>SERVER_NAME</td><td>". $_SERVER['SERVER_NAME'] ."</td></tr>";
        echo "<tr><td>DOCUMENT_ROOT</td><td>". $_SERVER['DOCUMENT_ROOT'] ."</td></tr>";
    ?>
    </table>

    <h1>Variables del cliente</h1>
    
    <table>
    <?php
        echo "<tr><td>REMOTE_ADDR</td><td>". $_SERVER['REMOTE_ADDR'] ."</td></tr>";
        echo "<tr><td>REMOTE_PORT</td><td>". $_SERVER['REMOTE_PORT'] ."</td></tr>";

    ?>
    </table>

    <h1>Variables de requerimiento HTTP</h1>

    <table>
    <?php
        echo "<tr><td>SCRIPT_NAME</td><td>". $_SERVER['SCRIPT_NAME'] ."</td></tr>";
        echo "<tr><td>REQUEST_METHOD</td><td>". $_SERVER['REQUEST_METHOD'] ."</td></tr>";

    ?>
    </table>
    <h1>Todas las variables que hay en $_SERVER</h1>

    <?php

        foreach($_SERVER as $var){
            echo "<br>$var";
        }
    ?>
</body>
</html>