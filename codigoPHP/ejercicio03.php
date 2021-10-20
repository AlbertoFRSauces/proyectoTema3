<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 03</title>
</head>
<body>
    <?php
        /* 
            * @author: Alberto Fernandez Ramirez
            * @version: v2.Correcion ejercicio
            * Created on: 14-octubre-2021
            * Ejercicio 3. Mostrar en tu pagina web la fecha y la hora actual formateada en castellano.(Utilizar cuando sea posible la clase datetime)
        */
        //Poner la zona por defecto en Europa/Madrid
        date_default_timezone_set('Europe/Madrid');
        //Inicializar la variable $oFechaActual de tipo DateTime.
        $oFechaActual = new DateTime();
        //Mostrar el dia, mes anyo y hora actual
        echo '<p>Hoy es '.$oFechaActual->format("d").' de '.$oFechaActual->format("M").' de '.$oFechaActual->format("Y").' y son las '.$oFechaActual->format("H:i").' horas</p>';
        //Mostrar la fecha con /
        echo "La fecha de hoy es ".$oFechaActual->format("d/m/Y");
        echo '</br>';
        //Mostrar la fecha con -
        echo "La fecha de hoy es ".$oFechaActual->format("d-m-Y");
        echo '</br>';
        //Mostrar el anyo
        echo "El año actual es ".$oFechaActual->format("Y");
        echo '</br>';
        //Mostrar el dia de la semana
        echo "El dia de la semana es ".$oFechaActual->format("l");
        echo '</br>';
        //Mostrar la hora
        echo "La hora actual es ".$oFechaActual->format("H:i");
        echo '</br>';
        //Mostrar la marca de tiempo actual
        echo "La marca de tiempo actual es ".$oFechaActual->getTimestamp();
        echo '</br>';
        //Inicializar la variable $oFechaCumpleanos
        $oFechaCumpleanos = new DateTime('1999-10-21');
        //Mostrar la fecha de cumpleaños con /
        echo '</br>';
        echo "La fecha de nacimiento es ".$oFechaCumpleanos->format("d/m/Y");
        echo '</br>';
        //Mostrar la fecha con -
        echo "La fecha de nacimiento es ".$oFechaCumpleanos->format("d-m-Y");
        echo '</br>';
        //Mostrar el año
        echo "El año de nacimiento es ".$oFechaCumpleanos->format("Y");
        echo '</br>';
        //Mostrar el dia de la semana de nacimiento
        echo "El dia de la semana de nacimiento es ".$oFechaCumpleanos->format("l");
        echo '</br>';
    ?>
</body>
</html>


