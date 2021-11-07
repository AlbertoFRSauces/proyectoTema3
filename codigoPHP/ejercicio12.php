<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 12</title>
        <style>
            tr, td, th{
                border: 1px #212121 solid;
            }
            table{
                padding: 0;
                margin: 0;
                border-collapse:collapse;
            }
            .cajaizquierda{
                background-color: #A2A8C8;
            }
            .cajaderecha{
                background-color: #B3B3B3;
            }
        </style>
    </head>
    <body>
        <main>
            <?php
            /*
             * @author: Alberto Fernandez Ramirez
             * @version: v1.Realizacion de ejercicio
             * Created on: 18-octubre-2021
             * Ejercicio 12. Mostrar el contenido de las variables superglobales (utilizando print_r() y foreach()).
             */
            //Muestra del contenido de la variable $GLOBALS con print_r
            echo "<pre>";
            echo '<h2>Mostrar $GLOBALS con print_r</h2>';
            print_r ($GLOBALS);
            
            //Muestra del contenido de la variable $_SERVER con print_r
            echo '<h2>Mostrar $_SERVER con print_r</h2>';
            print_r ($_SERVER);
            
            //Muestra del contenido de la variable $_GET con print_r
            echo '<h2>Mostrar $_GET con print_r</h2>';
            print_r ($_GET);
            
            //Muestra del contenido de la variable $_POST con print_r
            echo '<h2>Mostrar $_POST con print_r</h2>';
            print_r ($_POST);
            
            //Muestra del contenido de la variable $_FILES con print_r
            echo '<h2>Mostrar $_FILES con print_r</h2>';
            print_r($_FILES);
            
            //Muestra del contenido de la variable $_COOKIE con print_r
            echo '<h2>Mostrar $_COOKIE con print_r</h2>';
            print_r ($_COOKIE);
            
            //Muestra del contenido de la variable $_SESSION con print_r
            echo '<h2>Mostrar $_SESSION con print_r</h2>';
            print_r ($_SESSION);
            
            //Muestra del contenido de la variable $_REQUEST con print_r
            echo '<h2>Mostrar $_REQUEST con print_r</h2>';
            print_r ($_REQUEST);
            
            //Muestra del contenido de la variable $_ENV con print_r
            echo '<h2>Mostrar $_ENV con print_r</h2>';
            print_r ($_ENV);
            echo "</pre>";
            
            
            
            
            
            
            //Muestra del contenido de la variable $_SERVER con foreach()
            echo '<h2>Mostrar $_SERVER con foreach()</h2>';
            echo "<table><tr><th class='cajaizquierda'>Clave</th><th class='cajaderecha'>Valor</th></tr>";
            foreach ($_SERVER as $key => $value) {
                echo "<tr>";
                echo "<td class='cajaizquierda'><strong>" . $key . "</strong></td>";
                echo "<td class='cajaderecha'>" . $value . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            echo "</br>";
            
            //Muestra del contenido de la variable $_REQUEST con foreach()
            echo '<h2>Mostrar $_REQUEST con foreach()</h2>';
            echo '<table><tr><th>Clave</th><th>Valor</th></th>';
            foreach ($_REQUEST as $key => $value) {
                echo "<td><strong>" . $key . "</strong></td>";
                echo "<td>" . $value . "</td>";
            }
            echo '</table>';
            
            //Muestra del contenido de la variable $_GET con foreach()
            echo '<h2>Mostrar $_GET con foreach()</h2>';
            echo '<table><tr><th>Clave</th><th>Valor</th></th>';
            foreach ($_GET as $key => $value) {
                echo "<td><strong>" . $key . "</strong></td>";
                echo "<td>" . $value . "</td>";
            }
            echo '</table>';
            echo "</br>";
            
            //Muestra del contenido de la variable $_FILES con foreach()
            echo '<h2>Mostrar $_FILES con foreach()</h2>';
            echo '<table><tr><th>Clave</th><th>Valor</th></th>';
            foreach ($_FILES as $key => $value) {
                echo "<td><strong>" . $key . "</strong></td>";
                echo "<td>" . $value . "</td>";
            }
            echo '</table>';
            echo "</br>";
            
            //Muestra del contenido de la variable $_ENV con foreach()
            echo '<h2>Mostrar $_ENV con foreach()</h2>';
            echo '<table><tr><th>Clave</th><th>Valor</th></th>';
            foreach ($_ENV as $key => $value) {
                echo "<td><strong>" . $key . "</strong></td>";
                echo "<td>" . $value . "</td>";
            }
            echo '</table>';
            echo "</br>";
            
            //Muestra del contenido de la variable $_POST con foreach()
            echo '<h2>Mostrar $_POST con foreach()</h2>';
            echo '<table><tr><th>Clave</th><th>Valor</th></th>';
            foreach ($_POST as $key => $value) {
                echo "<td><strong>" . $key . "</strong></td>";
                echo "<td>" . $value . "</td>";
            }
            echo '</table>';
            echo "</br>";
            
            
            
            //Muestra del contenido de la variable $_COOKIE con foreach()
            echo '<h2>Mostrar $_COOKIE con foreach()</h2>';
            echo '<table><tr><th>Clave</th><th>Valor</th></th>';
            foreach ($_COOKIE as $key => $value) {
                echo "<td><strong>" . $key . "</strong></td>";
                echo "<td>" . $value . "</td>";
            }
            echo '</table>';
            echo "</br>";
            
            //Muestra del contenido de la variable $_SESSION con foreach()
            echo '<h2>Mostrar $_SESSION con foreach()</h2>';
            echo '<table><tr><th>Clave</th><th>Valor</th></th>';
            foreach ($_SESSION as $key => $value) {
                echo '<tr>';
                echo "<td><strong>$key</strong></td>";
                echo "<td>$value</td>";
                echo '<tr>';
            }
            echo '</table>';
            echo "</br>";
            
            
            
            //Muestra del contenido de la variable $GLOBALS con foreach(), uso de dos foreach para mostrar el contenido de algunos arrays dentro del array de la variable
            echo '<h2>Mostrar $GLOBALS con foreach()</h2>';
            echo "<table><tr><th class='cajaizquierda'>Clave</th><th class='cajaderecha'>Valor</th></tr>";
            foreach ($GLOBALS as $clave){
                foreach ($clave as $segundaclave => $valor) {
                    echo "<tr>";
                    echo "<td class='cajaizquierda'><strong>$segundaclave</strong></td>";
                    echo "<td class='cajaderecha'>$valor</td>";
                    echo "</tr>";
                }
            }
            echo "</table>";
            echo "</br>";
            ?>
        </main>
    </body>
</html>


