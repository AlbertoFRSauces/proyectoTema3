<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 09</title>
</head>
<body>
    <?php
        /* 
            * Author: Alberto Fernandez Ramirez
            * Created on: 14-octubre-2021
            * Ejercicio 9. Mostrar el path donde se encuentra el fichero que se esta ejecutando.
        */
        //Mostrar con 'PHP_SELF' el path actual.
         echo "<p>Path del fichero que se esta ejecutando con PHP_SELF: " .  $_SERVER['PHP_SELF']."</p>"; //El nombre del archivo de script ejecutándose actualmente, relativa al directorio raíz de documentos del servidor.
    ?>
</body>
</html>


