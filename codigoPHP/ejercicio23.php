<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../webroot/css/estiloejercicio.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="../webroot/css/img/home.png" type="image/x-icon">
        <title>Ejercicio 23</title>
    </head>
    <body>
        <header>
            <h1>Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente.</h1>
        </header>
        <main>
            <?php
            /*
             * @author: Alberto Fernandez Ramirez
             * @version: v2.Correcion del ejercicio
             * Created on: 21-octubre-2021
             * Ejercicio 23. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas; 
             * en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente. 
             */
            //Creo el if necesario para poder pedir los datos y mostrarlos en la misma pagina
            if (!empty($_POST['nombre']) && !empty($_POST['apellidos'])){
                //Código que se ejecuta cuando se envía el formulario
                //Creo las variables y les asigno el valor recogido en el formulario
                $nombre = $_REQUEST['nombre'];
                $apellidos = $_REQUEST['apellidos'];
                
                //Muestro el contenido de la variable nombre con print_r
                print_r('El nombre es: ' . $nombre);
                echo '<br>';
                //Muestro el contenido de la variable apellidos con print_r
                print_r('Los apellidos son: ' . $apellidos);
                echo '<br>';
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
                <form name="input" action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
                    <p><strong>Nombre y Apellidos</strong></p>
                    <?php
                        echo 'Su nombre: <input type="text" name="nombre"/>';
                        if (isset($_POST['enviar']) && empty($_POST['nombre'])){
                            echo "<span style='color:red'> Debe introducir un nombre!</span>";
                        }
                        echo '<br>';
                    ?>
                    <?php
                        echo 'Sus apellidos: <input type="text" name="apellidos"/>';
                        if (isset($_POST['enviar']) && empty($_POST['apellidos'])){
                            echo "<span style='color:red'> Debe introducir los apellidos!</span>";
                        }
                    ?>
                    <p><input type="submit" value="Enviar" name="enviar"/></p>
                </form>
            <?php
                }
            ?>
        </main>
        <footer class="piepagina">
            <a href="https://github.com/AlbertoFRSauces/proyectoTema3" target="_blank"><img src="../webroot/css/img/github.png" class="imagegithub" alt="IconoGitHub" /></a>
            <p><a>&copy;</a>Alberto Fernández Ramírez 29/09/2021 Todos los derechos reservados.</p>
            <p>Ultima actualización: 26/10/2021 22:00</p>
        </footer>
    </body>
</html>


