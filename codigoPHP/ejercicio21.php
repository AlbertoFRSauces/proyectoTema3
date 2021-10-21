<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 20</title>
    </head>
    <body>
        <header>
            <h1>Formulario</h1>
        </header>
        <main>
            <?php
            /*
             * @author: Alberto Fernandez Ramirez
             * @version: v1.Realizacion de ejercicio
             * Created on: 21-octubre-2021
             * Ejercicio 21. Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php 
             * para que muestre las preguntas y las respuestas recogidas. 
             * 
             */
            //Creo el formulario, guardo los datos en el archivo tratamiento.php y uso el metodo post
            echo '<form action="tratamiento.php" method="post">';
                echo '<p>Su nombre: <input type="text" name="nombre" /></p>';
                echo '<p><input type="submit" /></p>';
            echo '</form>';
            ?>
        </main>
    </body>
</html>


