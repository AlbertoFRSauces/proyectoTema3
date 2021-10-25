<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ejercicio 22</title>
    </head>
    <body>
        <header>
            <h1>Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas.</h1>
        </header>
        <main>
            <?php
            /*
             * @author: Alberto Fernandez Ramirez
             * @version: v2.Correcion ejercicio
             * Created on: 21-octubre-2021
             * Ejercicio 22. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas. 
             */
            //Creo el if necesario para poder pedir los datos y mostrarlos en la misma paginaa
            if (isset($_REQUEST['enviar'])){
                //Código que se ejecuta cuando se envía el formulario
                //Creo las variables y les asigno el valor recogido en el formulario
                //Muestro el contenido de la variable nombre con print_r
                $nombre = $_REQUEST['nombre'];
                print_r('El nombre es: ' . $nombre);
                echo '<br>';
                //Muestro el contenido de la variable apellidos con print_r
                $apellidos = $_REQUEST['apellidos'];
                print_r('Los apellidos son: ' . $apellidos);
                echo '<br>';

                //Muestro con print_r el contenido de la variable $_REQUEST
                echo '<p>El contenido de $_REQUEST es:</p>';
                echo '<pre>';
                print_r($_REQUEST);
                echo '</pre>';
                //Muestro con print_r el contenido de la variable $_GET
                echo '<p>El contenido de $_GET es:</p>';
                echo '<pre>';
                print_r($_GET);
                echo '</pre>';
                //Muestro con print_r el contenido de la variable $_POST
                echo '<p>El contenido de $_POST es:</p>';
                echo '<pre>';
                print_r($_POST);
                echo '</pre>';
            }else{
                //Código que se ejecuta antes de rellenar el formulario
                //Creo el formulario, los datos los guardo en el mismo archivo ya que los tengo que mostrar en la misma pagina y uso el metodo post
                //Pido en el formulario el nombre y los  apellidos, todos los campos son de tipo text
                ?> 
                <form name="input" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
                    <p><strong>Nombre y Apellidos</strong></p>
                    <p>Su nombre: <input type="text" name="nombre" /></p>
                    <p>Sus apellidos: <input type="text" name="apellidos" /></p>
                    <p><input type="submit" value="Enviar" name="enviar"/></p>
                </form>
            <?php
                }
            ?>
        </main>
    </body>
</html>


