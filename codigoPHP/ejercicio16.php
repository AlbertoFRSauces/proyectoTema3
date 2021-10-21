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
             * @version: v2.Correcion del ejercicio
             * Created on: 20-octubre-2021
             * Ejercicio 16. Recorrer el array anterior utilizando funciones para obtener el mismo resultado.
             */
            //Inicializo el array y defino cada elemento tanto la clave como su valor
            $aSueldoSemana = array(
                "Lunes" => 85.21,
                "Martes" => 85.21,
                "Miercoles" => 85.21,
                "Jueves" => 85.21,
                "Viernes" => 85.21,
                "Sabado" => 125.59,
                "Domingo" => 135.59
            );
            //Recorro el array con la funcion reset()
            //Recorro el array con la funcion next()
            //Recorro el array con la funcion prev()
            //Recorro el array con la funcion end()
            //Recorro el array con la funcion current()
            //Recorro el array con la funcion key()
            foreach ($aSueldoSemana as $value) {
                echo $mykey = key($aSueldoSemana);
            }
            //Recorro el array con la funcion each()
            ?>
        </main>
    </body>
</html>


