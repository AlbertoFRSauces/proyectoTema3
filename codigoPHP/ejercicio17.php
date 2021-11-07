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
             * @version: v3.Correcion del ejercicio
             * Created on: 18-octubre-2021
             * Ejercicio 17. Inicializar un array (bidimensional con dos índices numéricos) donde almacenamos el nombre de 
             * las personas que tienen reservado el asiento en un teatro de 20 filas y 15 asientos por fila. 
             * (Inicializamos el array ocupando únicamente 5 asientos). Recorrer el array con distintas técnicas 
             * (foreach(), while(), for()) para mostrar los asientos ocupados en cada fila y las personas que lo ocupan. 
             */
            //Defino el maximo y el minimo tanto a las filas como a las columnas
            define("FILAS_MAXIMAS", 20); //Declaro la constante de filas maximas y la inicializo
            define("COLUMNAS_MAXIMAS", 15); //Declaro la constante de columnas maximas y la inicializo
            define("FILAS_MINIMAS", 1); //Declaro la constante de filas minimas y la inicializo
            define("COLUMNAS_MINIMAS", 1); //Declaro la constante de columnas minimas y la inicializo

            echo '<br>';
            //Inicializo el array con 20 filas y 15 asientos por fila con for() uno para las filas y otro para las columnas
            for ($fila = 1; $fila <= constant("FILAS_MAXIMAS"); $fila++) {//recorro las filas
                for ($columna = 1; $columna <= constant("COLUMNAS_MAXIMAS"); $columna++) {//recorro las columnas
                    echo $aTeatro[$fila][$columna] = null; //Inserto null en la posicion
                }
            }
            //Ocupo 5 asientos introduciendo los datos en el array
            $aTeatro[1][2] = ('Alberto');
            $aTeatro[6][5] = ('Jesus');
            $aTeatro[7][5] = ('Julia');
            $aTeatro[11][7] = ('Maria');
            $aTeatro[13][8] = ('Juan');

            //Recorro el array con foreach()
            echo '<h2>Recorrer array usando foreach()</h2>';
            $contadorFila = 0;
            foreach ($aTeatro as $fila) {//recorro las filas
                $contadorFila++;//avanzo el puntero en 1 de las filas
                foreach ($fila as $columna => $persona) {//recorro las columnas
                    if (isset($persona)) {//compruebo que no esta vacio
                        echo 'El asiento <strong>' . $contadorFila . 'F ' . $columna . 'C</strong> esta ocupado por <strong>' . $persona . '</strong><br>';//Muestro la fila y la columna junto con el nombre de la persona que lo ocupa
                    }
                }
            }
            echo '<br>';

            //Recorro el array con while() para mostrar los asientos ocupados en cada fila y las personas que lo ocupan.
            echo '<h2>Recorrer array usando while()</h2>';
            $fila = constant("FILAS_MINIMAS"); // asigno a $fila el numero de filas minimas
            while ($fila <= constant("FILAS_MAXIMAS")) {// recorre las filas
                $columna = constant("COLUMNAS_MINIMAS"); // asigno a $columna el numero de columnas minimas
                while ($columna <= constant("COLUMNAS_MAXIMAS")) {// recorre las columnas
                    if (!empty($aTeatro[$fila][$columna])) { //compruebo que no esta vacio 
                        echo 'El asiento <strong>' . $fila . 'F ' . $columna . 'C </strong> esta ocupado por <strong>' . $aTeatro[$fila][$columna] . '</strong></p>'; //Muestro la fila y la columna junto con el nombre de la persona que lo ocupa
                    }
                    $columna++; //Avanzo el puntero en la columna
                }
                $fila++; //Avanzo el puntero en la fila
            }
            echo '<br>';

            //Recorro el array con for() para mostrar los asientos ocupados en cada fila y las personas que lo ocupan.
            echo '<h2>Recorrer array usando for()</h2>';
            for ($fila = constant("FILAS_MINIMAS"); $fila <= constant("FILAS_MAXIMAS"); $fila++) { //recorro las filas
                for ($columna = constant("COLUMNAS_MINIMAS"); $columna <= constant("COLUMNAS_MAXIMAS"); $columna++) { //recorro las columnas
                    if (isset($aTeatro[$fila][$columna])) { //compruebo que no esta vacio
                        echo 'El asiento <strong>' . $fila . 'F ' . $columna . 'C </strong> esta ocupado por <strong>' . $aTeatro[$fila][$columna] . '</strong><br>';//Muestro la fila y la columna junto con el nombre de la persona que lo ocupa
                    }
                }
            }
            ?>
        </main>
        <footer class="piepagina">
            <a href="https://github.com/AlbertoFRSauces/proyectoTema3" target="_blank"><img src="../webroot/css/img/github.png" class="imagegithub" alt="IconoGitHub" /></a>
            <p><a>&copy;</a>Alberto Fernández Ramírez 29/09/2021 Todos los derechos reservados.</p>
            <p>Ultima actualización: 07/11/2021 21:00</p>
        </footer>
    </body>
</html>


