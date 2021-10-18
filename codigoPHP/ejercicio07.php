<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 07</title>
</head>
<body>
    <?php
        /* 
            * Author: Alberto Fernandez Ramirez
            * Created on: 14-octubre-2021
            * Ejercicio 7. Mostrar el nombre del fichero que se esta ejecutando.
        */
        //La funcion basename nos devuelve el ultimo componente de nombre de una ruta,
        //la ruta se obtiene con la variable superglobal SERVER y el parametro 'PHP_SELF'.
        echo "<p>El nombre del fichero que se esta ejecutando es <strong>".basename($_SERVER['PHP_SELF'])."</strong></p";
    ?>
</body>
</html>


