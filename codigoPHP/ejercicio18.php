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
             * @version: v2.Correcion del ejercicio
             * Created on: 20-octubre-2021
             * Ejercicio 18. Recorrer el array anterior utilizando funciones para obtener el mismo resultado.
             */
            //Defino el maximo y el minimo tanto a las filas como a las columnas
            define("FILAS_MAXIMAS",20);//Declaro la constante de filas maximas y la inicializo
            define("COLUMNAS_MAXIMAS",15);//Declaro la constante de columnas maximas y la inicializo
            define("FILAS_MINIMAS",1);//Declaro la constante de filas minimas y la inicializo
            define("COLUMNAS_MINIMAS",1);//Declaro la constante de columnas minimas y la inicializo
            
            echo '<br>';
            //Inicializo el array con 20 filas y 15 asientos por fila con for() uno para las filas y otro para las columnas
            for ($fila = 1; $fila <= constant("FILAS_MAXIMAS"); $fila++) {//recorro las filas
                for ($columna = 1; $columna <= constant("COLUMNAS_MAXIMAS"); $columna++) {//recorro las columnas
                    echo $aTeatro[$fila][$columna] = null;//Inserto null en la posicion
                }
            }
            //Ocupo 5 asientos introduciendo los datos en el array
            $aTeatro[1][2] = ('Alberto');
            $aTeatro[6][5] = ('Jesus');
            $aTeatro[7][5] = ('Julia');
            $aTeatro[11][7] = ('Maria');
            $aTeatro[13][8] = ('Juan');
            
            //Recorro el array con while()
            $fila=constant("FILAS_MINIMAS"); // asigno a $fila el numero de filas minimas
             while($fila<=constant("FILAS_MAXIMAS")){// recorre las filas
                $columna=constant("COLUMNAS_MINIMAS");// asigno a $columna el numero de columnas minimas
                while($columna<= constant("COLUMNAS_MAXIMAS")){// recorre las columnas
                    if(!empty($aTeatro[$fila][$columna])){ //compruebo que no esta vacio 
                        echo "<p>Fila <strong>".$fila."</strong>, columna: <strong>".$columna."</strong>, nombre de la persona que ocupa el asiento: <strong>".$aTeatro[$fila][$columna]."</strong></p>"; // Muestro la fila y la columna junto con el nombre de la persona que lo ocupa
                    }
                    $columna++;//Avanzo el puntero en la columna
                }
                $fila++;//Avanzo el puntero en la fila
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


