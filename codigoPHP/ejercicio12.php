<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>
<body>
    <?php
        /* 
            * Author: Alberto Fernandez Ramirez
            * Created on: 18-octubre-2021
            * Ejercicio 12. Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach()).
        */
        //Muestra del contenido de la variable $GLOBALS
        print_r($GLOBALS);
        echo "</br>";
        //Muestra del contenido de la variable $_SERVER
        print_r($_SERVER);
        echo "</br>";
        //Muestra del contenido de la variable $_GET
        print_r($_GET);
        echo "</br>";
        //Muestra del contenido de la variable $_POST
        print_r($_POST);
        echo "</br>";
        //Muestra del contenido de la variable $_FILES
        print_r($_FILES);
        echo "</br>";
        //Muestra del contenido de la variable $_COOKIE
        print_r($_COOKIE);
        echo "</br>";
        //Muestra del contenido de la variable $_SESSION
        print_r($_SESSION);
        echo "</br>";
        //Muestra del contenido de la variable $_REQUEST
        print_r($_REQUEST);
        echo "</br>";
        //Muestra del contenido de la variable $_ENV
        print_r($_ENV);
        echo "</br>";
    ?>
</body>
</html>


