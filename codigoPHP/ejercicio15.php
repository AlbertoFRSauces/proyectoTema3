<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 15</title>
    </head>
    <body>
        <main>
            <?php
            /*
             * @author: Alberto Fernandez Ramirez
             * @version: v2.Ampliacion del ejercicio
             * Created on: 20-octubre-2021
             * Ejercicio 15. Crear e inicializar un array con el sueldo percibido de lunes a domingo. 
             * Recorrer el array para calcular el sueldo percibido durante la semana. (Array asociativo con los nombres de los días de la semana).
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
            //Declaro una variable llamada $iSuma
            $fSuma=0;
            //Recorro el array con un foreach y acumulo la suma de los valores en una variable llamada $iSuma
            foreach ($aSueldoSemana as $value) {
                $fSuma += $value;
            }
            //Muestro la variable $iSuma que contiene la suma de el sueldo percibido durante toda la semana
            echo "<p>El sueldo percibido durante toda la semana es <strong>" . $fSuma . " €</strong></p>";
            ?>
        </main>
    </body>
</html>


