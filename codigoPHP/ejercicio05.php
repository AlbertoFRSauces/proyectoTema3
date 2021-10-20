<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 05</title>
</head>
<body>
    <?php
        /* 
            * @author: Alberto Fernandez Ramirez
            * @version: v1.Realizacion ejercicio
            * Created on: 14-octubre-2021
            * Ejercicio 5. Inicializar y mostrar una variable que tiene una marca de tiempo.(timestamp)
        */
        //Mostrar la marca de tiempo obtenida con time() y mostrada con echo despues de almacenarla en una variable.
        $timestamp= time();
        echo "<p>Marca de tiempo con time <strong>".$timestamp."</strong></p>";;
        //Mostrar la marca de tiempo obtenida con DateTime() y luego mostrada con un echo haciendo un getTimestamp().
        $oFecha=new DateTime();
        echo "<p>Marca de tiempo con timestamp <strong>".$oFecha->getTimestamp()."</strong></p>";
    ?>
</body>
</html>


