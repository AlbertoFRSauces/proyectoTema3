<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 21 - tratamiento</title>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">       
        <meta name="author" content="Alberto Fernandez Ramirez">
        <meta name="application-name" content="Proyecto 2021 DAW">
        <meta name="description" content="Mi pagina web DAW">
        <meta name="keywords" content="analítica web, seo, web semántica, seo semántico, analytics" >
        <meta name="robots" content="index, follow">
        <link href="webroot/css/estilo.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="../proyectoTema3/webroot/css/img/home.png" type="image/x-icon">
    </head>
    <body>
    <?php
        //Muestro el valor de la variable nombre con print_r
        $nombre = $_POST['nombre'];
        print_r('El nombre es: '.$nombre);
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
    ?>
    </body>
</html>

