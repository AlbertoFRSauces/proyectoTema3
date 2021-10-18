<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>
<body>
    <?php
        /* 
            * Author: Alberto Fernandez Ramirez
            * Created on: 18-octubre-2021
            * Ejercicio 13. Crear una función que cuente el número de visitas a la página actual desde una fecha concreta.
        */
        function visitas_pagina(){
            $archivo = "contador.txt"; //el archivo que contiene en numero
            $f = fopen($archivo, "r"); //abrimos el archivo en modo de lectura
            if($f){
                $contador = fread($f, filesize($archivo)); //leemos el archivo
                $contador = $contador + 1; //sumamos +1 al contador
                fclose($f);
            }
            $f = fopen($archivo, "w+");
            if($f){
                fwrite($f, $contador);
                fclose($f);
            }
        return $contador;
        }
        echo "Visitas totales a la pagina actual: <strong>".visitas_pagina()."</strong></p>";
    ?>
</body>
</html>


