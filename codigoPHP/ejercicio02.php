<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 02</title>
</head>
<body>
    <?php
        /* 
            * Author: Alberto Fernandez Ramirez
            * Created on: 14-octubre-2021
            * Ejercicio 2. Inicializar y mostrar una variable heredoc.
        */
        //Si queremos mostrar por pantalla un texto con el formato de este tipo, usamos la variable heredoc,
        // la inicializamos, le ponemos el contenido, la cerramos con su nombre y cuando este terminada la imprimimos con print.
        $a=<<<MiCadena
        Desarrollo web entorno servidor</br>
        Esta es una variable heredoc
        MiCadena;
        print $a;
    ?>
</body>
</html>


