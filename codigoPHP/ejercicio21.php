<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../webroot/css/estiloejercicio.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="../webroot/css/img/home.png" type="image/x-icon">
        <title>Ejercicio 20</title>
    </head>
    <body>
        <header>
            <h1>Construir un formulario para recoger un cuestionario realizado a una persona y enviarlo a una página Tratamiento.php para que muestre las preguntas y las respuestas recogidas.</h1>
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
        <footer class="piepagina">
            <a href="https://github.com/AlbertoFRSauces/proyectoTema3" target="_blank"><img src="../webroot/css/img/github.png" class="imagegithub" alt="IconoGitHub" /></a>
            <p><a>&copy;</a>Alberto Fernández Ramírez 29/09/2021 Todos los derechos reservados.</p>
            <p>Ultima actualización: 26/10/2021 22:00</p>
        </footer>
    </body>
</html>


