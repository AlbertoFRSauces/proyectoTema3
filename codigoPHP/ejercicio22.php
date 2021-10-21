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
            <h1>Formulario</h1>
        </header>
        <main>
            <?php
            /*
             * @author: Alberto Fernandez Ramirez
             * @version: v1.Realizacion de ejercicio
             * Created on: 21-octubre-2021
             * Ejercicio 22. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas. 
             */
            //
            //Creo el formulario, los datos los guardo en el mismo archivo ya que los tengo que mostrar en la misma pagina y uso el metodo post
            //Pido en el formulario el nombre, apellidos, calle, numero, ciudad, provincia y el codigo postal, todos los campos son de tipo text
            echo '<form action="ejercicio22.php" method="post">';
                echo '<p><strong>Nombre y Apellidos</strong></p>';
                    echo '<p>Su nombre: <input type="text" name="nombre" /></p>';
                    echo '<p>Su primer apellido: <input type="text" name="primerapellido" /></p>';
                    echo '<p>Su segundo apellido: <input type="text" name="segundoapellido" /></p>';
                echo '<p><strong>Direccion</strong></p>';
                    echo '<p>Calle: <input type="text" name="calle" /></p>';
                    echo '<p>Numero: <input type="text" name="numerocasa" /></p>';
                    echo '<p>Ciudad: <input type="text" name="ciudad" /></p>';
                    echo '<p>Provincia: <input type="text" name="provincia" /></p>';
                    echo '<p>Codigo Postal: <input type="text" name="codigopostal" /></p>';
                echo '<p><input type="submit" /></p>';
            echo '</form>';
            
            //Creo las variables y les asigno el valor recogido en el formulario
            //Muestro el contenido de la variable con print_r
            $nombre = $_REQUEST['nombre'];
            print_r('El nombre es: ' . $nombre);
            echo '<br>';
            $primerapellido = $_REQUEST['primerapellido'];
            print_r('El primer apellido es: ' . $primerapellido);
            echo '<br>';
            $segundoapellido = $_REQUEST['segundoapellido'];
            print_r('El segundo apellido es: ' . $segundoapellido);
            echo '<br>';
            $calle = $_REQUEST['calle'];
            print_r('La Calle es: ' . $calle);
            echo '<br>';
            $numerocasa = $_REQUEST['numerocasa'];
            print_r('El numero es: ' . $numerocasa);
            echo '<br>';
            $ciudad = $_REQUEST['ciudad'];
            print_r('La ciudad es: ' . $ciudad);
            echo '<br>';
            $provincia = $_REQUEST['provincia'];
            print_r('La provincia es: ' . $provincia);
            echo '<br>';
            $codigopostal = $_REQUEST['codigopostal'];
            print_r('El codigo postal es: ' . $codigopostal);
            echo '<br>';
            
            //Muestro el contenido del array con print_r
            echo '<pre>';
            print_r($_REQUEST);
            echo '</pre>';
            ?>
        </main>
    </body>
</html>


