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
            $aSueldoSemana = [
                "Lunes" => 85.21,
                "Martes" => 85.21,
                "Miercoles" => 85.21,
                "Jueves" => 85.21,
                "Viernes" => 85.21,
                "Sabado" => 125.59,
                "Domingo" => 135.59
            ];
            //Poner puntero al principio del array
            reset($aSueldoSemana);
            while(key($aSueldoSemana)!=null){
                //key devuelve el vamor clave donde se encuentre el puntero en el array
                echo 'El dia de la semana es '.key($aSueldoSemana).'</br>';
                //Current devuelve el valor donde se encuentra el puntero en el array
                echo 'El sueldo de ese dia es '.current($aSueldoSemana).'€</br>';
                //Avanzo el puntero una posicion dentro del array
                next($aSueldoSemana);
            }
            ?>
        </main>
    </body>
</html>


