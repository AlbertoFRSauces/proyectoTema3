<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../webroot/css/estiloejercicio.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="../webroot/css/img/home.png" type="image/x-icon">
        <title>Ejercicio 18</title>
    </head>
    <body>
        <header>
            <h1>Recorrer el array anterior utilizando funciones para obtener el mismo resultado.</h1>
        </header>
        <main>
            <?php
            /*
             * @author: Alberto Fernandez Ramirez
             * @version: v1.Realizacion del ejercicio
             * Created on: 20-octubre-2021
             * Ejercicio 18. Recorrer el array anterior utilizando funciones para obtener el mismo resultado.
             */
            echo '<br>';
            //Inicializo el array con 20 filas y 15 asientos por fila
            for ($fila = 1; $fila <= 20; $fila++) {
                for ($columna = 1; $columna <= 15; $columna++) {
                    echo $aTeatro[$fila][$columna] = null;
                }
            }
            //Ocupo 5 asientos introduciendo los datos en el array
            $aTeatro[1][2] = ('Alberto');
            $aTeatro[6][5] = ('Jesus');
            $aTeatro[7][5] = ('Julia');
            $aTeatro[11][7] = ('Maria');
            $aTeatro[13][8] = ('Juan');
            
            //Poner el puntero al principio del array
            reset($aTeatro);
            while(key($aTeatro)){
                //key devuelve el valor clave donde se encuentre el puntero en el array
                echo ' '.key($aTeatro).'</br>';
                //Current devuelve el valor donde se encuentra el puntero en el array
                echo ' '.current($aTeatro).'</br>';
                next($aTeatro);
            }
            ?>
        </main>
        <footer class="piepagina">
            <a href="https://github.com/AlbertoFRSauces/proyectoTema3" target="_blank"><img src="../webroot/css/img/github.png" class="imagegithub" alt="IconoGitHub" /></a>
            <p><a>&copy;</a>Alberto Fernández Ramírez 29/09/2021 Todos los derechos reservados.</p>
            <p>Ultima actualización: 26/10/2021 21:00</p>
        </footer>
    </body>
</html>


