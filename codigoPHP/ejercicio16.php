<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 16</title>
    </head>
    <body>
        <main>
            <?php
            /*
             * @author: Alberto Fernandez Ramirez
             * @version: v1.Realizacion de ejercicio
             * Created on: 20-octubre-2021
             * Ejercicio 16. Recorrer el array anterior utilizando funciones para obtener el mismo resultado.
             */
            //Uso el include para poder usar el array del otro ejercicio aqui, si no uso el include no tengo acceso al array
            include_once('ejercicio15.php');
            //Recorro el array $aSueldoSemana creado en el ejercicio anterior con la funcion array_sum la cual me suma los valores del array
            echo "<p>El sueldo percibido durante toda la semana es <strong>" . array_sum($aSueldoSemana) . "</strong></p>";
            ?>
        </main>
    </body>
</html>


