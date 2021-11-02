<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../webroot/css/estiloejercicio.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="../webroot/css/img/home.png" type="image/x-icon">
        <title>Ejercicio 17</title>
        <style>
        </style>
    </head>
    <body>
        <header>
            <h1>Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de las personas que tienen reservado el asiento en un teatro de 20 filas y 15 asientos por fila. 
            (Inicializamos el array ocupando únicamente 5 asientos). Recorrer el array con distintas técnicas (foreach(), while(), for()) para mostrar los asientos ocupados en cada fila y las personas que lo ocupan.</h1>
        </header>
        <main>
            <?php
            /*
             * @author: Alberto Fernandez Ramirez
             * @version: v2.Correcion del ejercicio
             * Created on: 18-octubre-2021
             * Ejercicio 17. Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de 
             * las personas que tienen reservado el asiento en un teatro de 20 filas y 15 asientos por fila. 
             * (Inicializamos el array ocupando únicamente 5 asientos). Recorrer el array con distintas técnicas 
             * (foreach(), while(), for()) para mostrar los asientos ocupados en cada fila y las personas que lo ocupan. 
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

            //Recorro el array con foreach()
            echo '<h2>Recorrer array usando foreach</h2>';
            $contador = 0;
            foreach ($aTeatro as $fila) {
                $contador++;
                foreach ($fila as $columna  => $persona) {
                    if(isset($persona)){
                        echo 'El asiento <strong>' . $contador . 'F ' . $columna. 'C</strong> esta ocupado por <strong>' . $persona . '</strong><br>';
                    }
                }
            }
            echo '<br>';
            //Recorro el array con while
            
            echo '<br>';
            //Recorro el array con for() para mostrar los asientos ocupados en cada fila y las personas que lo ocupan.
            echo '<h2>Recorrer array usando for</h2>';
            for ($fila = 1; $fila <= 20; $fila++) {
                for ($columna = 1; $columna <= 15; $columna++) {
                    if (isset($aTeatro[$fila][$columna])) {
                        echo 'El asiento <strong>' . $fila . 'F ' . $columna . 'C </strong> esta ocupado por <strong>' . $aTeatro[$fila][$columna] . '</strong><br>';
                    }
                }
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


