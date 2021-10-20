<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 04</title>
</head>
<body>
    <?php
        /* 
            * @author: Alberto Fernandez Ramirez
            * @version: v1.Realizacion ejercicio
            * Created on: 14-octubre-2021
            * Ejercicio 4. Mostrar en tu página index la fecha y hora actual en Oporto formateada en portugués. 
        */
        //Inicializar la variable $oFecha de tipo DateTime.
        $oFechaEspana = new DateTime(null, new DateTimeZone('Europe/Madrid'));
        $oFechaOporto = new DateTime(null, new DateTimeZone('Europe/Lisbon'));
        //Mostrar el dia, mes anyo y hora actual en Oporto
        echo '<p>Hoy es '.$oFechaOporto->format("d").' de '.$oFechaOporto->format("M").' de '.$oFechaOporto->format("Y").' y son las '.$oFechaOporto->format("H:i").' horas en Oporto</p>';
        //Mostrar el dia, mes anyo y hora actual en España
        echo '<p>Hoy es '.$oFechaEspana->format("d").' de '.$oFechaEspana->format("M").' de '.$oFechaEspana->format("Y").' y son las '.$oFechaEspana->format("H:i").' horas en España</p>';
    ?>
</body>
</html>


