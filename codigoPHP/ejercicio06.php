<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 06</title>
</head>
<body>
    <?php
        /* 
            * Author: Alberto Fernandez Ramirez
            * Created on: 14-octubre-2021
            * Ejercicio 6. Operar con fechas: Calcular la fecha y el dia de la semana dentro de 60 dias.
        */
        //Operacion realizada con la funcion date para darle formato a la fecha 
        //y con la funcion strtotime() la cual permite pasarle los dias que le queremos sumar a la fecha actual.
        echo "<p>La fecha actual mas 60 dias es <strong>".date("d-m-Y", strtotime("+60 days"))."</strong></p>";
    ?>
</body>
</html>


