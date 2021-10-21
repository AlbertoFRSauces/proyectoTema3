<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Ejercicio 20</title>
        <meta charset ="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">       
        <meta name="author" content="Alberto Fernandez Ramirez">
        <meta name="application-name" content="Proyecto 2021 DAW">
        <meta name="description" content="Mi pagina web DAW">
        <meta name="keywords" content="analítica web, seo, web semántica, seo semántico, analytics" >
        <meta name="robots" content="index, follow">
        <link href="webroot/css/estilo.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="../img/home.png" type="image/x-icon">
    </head>
    <body>
    <?php
        $nombre = $_POST['nombre'];
        print_r('El nombre es: '.$nombre);
        echo '<br>';
        print_r($_REQUEST);
    ?>
    </body>
</html>

