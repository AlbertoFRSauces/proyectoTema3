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
            * Author: Alberto Fernandez Ramirez
            * Created on: 14-octubre-2021
            * Ejercicio 3. Mostrar en tu pagina web la fecha y la hora actual formateada en castellano.(Utilizar cuando sea posible la clase datetime)
        */
        //Ver zona horaria en la que estamos.
        echo '<p>Zona horaria por defecto</p>';
        echo date_default_timezone_get();
        echo '</br>';
        //Cambiar la zona horaria a España.
        date_default_timezone_set('Europe/Madrid');
        $fechaActual = getdate();
        print_r($fechaActual);
        
        
        
       
    ?>
</body>
</html>


