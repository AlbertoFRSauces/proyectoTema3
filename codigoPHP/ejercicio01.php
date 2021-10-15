<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 01</title>
</head>
<body>
    <?php
        /* 
            * Author: Alberto Fernandez Ramirez
            * Created on: 14-octubre-2021
            * Ejercicio 1. Inicializar variables de los distintos tipos de datos basicos(string, int, float, bool)
            * y mostrar los datos por pantalla(echo, print, printf, print_r,var_dump).
        */
        //Inicializar las variables con $
        $sString='Alberto';
        $iInt=8;
        $fFloat=8.5;
        $bBoolean=false;
        //Mostrar las variables con echo
        echo "<h1>Variables mostradas por pantalla con echo:</h1>";
        echo '<p>La variable $sString tiene el valor <strong>'.$sString."</strong> y es de tipo string.</p>";
        echo '<p>La variable $iInt tiene el valor <strong>'.$iInt."</strong> y es de tipo int.</p>";
        echo '<p>La variable $fFloat tiene el valor <strong>'.$fFloat."</strong> y es de tipo float.</p>";
        echo '<p>La variable $bBoolean tiene el valor <strong>'.$bBoolean."</strong> y es de tipo boolean.</p>";
        //Mostrar las variables con print
        print "<h1>Variables mostradas por pantalla con print:</h1>";
        print '<p>La variable $sString tiene el valor <strong>'.$sString."</strong> y es de tipo string.</p>";
        print '<p>La variable $iInt tiene el valor <strong>'.$iInt."</strong> y es de tipo int.</p>";
        print '<p>La variable $fFloat tiene el valor <strong>'.$fFloat."</strong> y es de tipo float.</p>";
        print '<p>La variable $bBoolean tiene el valor <strong>'.$bBoolean."</strong> y es de tipo boolean.</p>";
        //Mostrar las variables con printf
        printf("<h1>Variables mostradas por pantalla con printf:</h1>");
        printf('<p>La variable $sString tiene el valor <strong>'.$sString."</strong> y es de tipo string.</p>");
        printf('<p>La variable $iInt tiene el valor <strong>'.$iInt."</strong> y es de tipo string.</p>");
        printf('<p>La variable $fFloat tiene el valor <strong>'.$fFloat."</strong> y es de tipo string.</p>");
        printf('<p>La variable $bBoolean tiene el valor <strong>'.$bBoolean."</strong> y es de tipo boolean.</p>");
        //Mostrar las variables con print_r
        print_r("<h1>Variables mostradas por pantalla con print_r:</h1>");
        print_r('La variable $sString tiene el valor <strong>'.$sString."</strong> y es de tipo string.</p>");
        print_r('<p>La variable $iInt tiene el valor <strong>'.$iInt."</strong> y es de tipo string.</p>");
        print_r('<p>La variable $fFloat tiene el valor <strong>'.$fFloat."</strong> y es de tipo string.</p>");
        print_r('<p>La variable $bBoolean tiene el valor <strong>'.$bBoolean."</strong> y es de tipo boolean.</p>");
        //Mostrar las variables con var_dump\
        var_dump("<h1>Variables mostradas por pantalla con var_dump:</h1>");
        var_dump($sString);
        echo "<br>";
        var_dump($iInt);
        echo "<br>";
        var_dump($fFloat);
        echo "<br>";
        var_dump($bBoolean);
        echo "<br>";
    ?>
</body>
</html>


