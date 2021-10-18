<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 08</title>
</head>
<body>
    <?php
        /* 
            * Author: Alberto Fernandez Ramirez
            * Created on: 14-octubre-2021
            * Ejercicio 8. Mostrar la direccion ip del equipo desde el que estas accediendo.
        */
        //Con la variable superglobal SERVER y el parametro 'REMOTE_ADDR' obtengo la ip desde donde se esta accediendo.
        echo "<p>La IP del equipo es <strong>".$_SERVER['REMOTE_ADDR']."</strong></p>";
    ?>
</body>
</html>


