<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../webroot/css/estiloejercicio.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="../webroot/css/img/home.png" type="image/x-icon">
        <title>Ejercicio 24</title>
        <style>
            form{
                margin-top: 15px;
                margin-bottom: 70px;
            }
            fieldset{
                border: 2px solid black;
                width: 550px;
                margin:auto;
            }
            ul{
                list-style: none;
            }
            ul li{
                padding-left: 15px;
                padding-bottom: 15px;
                padding-right: 15px;
            }
            span{
                font-size: 90%;
                color: red;
            }
            .enviar{
                width: 200px;
                font-size: 100%;
                padding: 5px;
                text-align: center;
                background-color: #252525;
                color: white;
                text-transform: uppercase;
                margin-left: 175px;
            }
            .sexo{
                width: 30px;
            }
            div input{
                width: 250px;
            }
            fieldset p:first-child{
                font-size: 190%;
                padding-top: 15px;
                padding-left: 15px;
                padding-bottom: 15px;
            }
            .ayuda{
                font-size: 80%;
                
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas; en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente, pero las respuestas que habíamos tecleado correctamente aparecerán en el formulario y no tendremos que volver a teclearlas.</h1>
        </header>
        <main>
            <?php
            /*
             * @author: Alberto Fernandez Ramirez
             * @version: v1.1.Realizacion de ejercicio
             * Created on: 21-octubre-2021
             * Ejercicio 24. Construir un formulario para recoger un cuestionario realizado a una persona y mostrar en la misma página las preguntas y las respuestas recogidas; 
             * en el caso de que alguna respuesta esté vacía o errónea volverá a salir el formulario con el mensaje correspondiente, pero las respuestas que habíamos tecleado 
             * correctamente aparecerán en el formulario y no tendremos que volver a teclearlas.
             */
            //Uso la libreria de validacion
            require_once '../core/210322ValidacionFormularios.php';
            
            //Variable obligatorio inicializada a 1
            define("OBLIGATORIO", 1);
            //Variables de maximos y minimos definidas
            define("TAMANYO_MINIMO_NOMBRE", 1);
            define("TAMANYO_MAXIMO_NOMBRE", 150);
            define("TAMANYO_MINIMO_EDAD", 1);
            define("TAMANYO_MAXIMO_EDAD", 150);
            define("TAMANYO_MINIMO_CALLE", 1);
            define("TAMANYO_MAXIMO_CALLE", 200);
            define("TAMANYO_MINIMO_ALTURA", 1);
            define("TAMANYO_MAXIMO_ALTURA", 300);
            define("FECHA_MINIMA", '01/01/1800');
            define("FECHA_MAXIMA", '01/01/2200');
            define("TAMANO_MAXIMO_DESCRIPCION", 255);
            //Variable de entrada correcta inicializada a true
            $entradaOK = true;
            
            //Creo el array con las opciones de la lista de idiomas
            $aListaOpciones = [
                'Espanol',
                'Portugues'
            ];
            
            //Creo el array con las opciones del checkbox
            $aCheckboxOpciones = [
                'Si',
                'No'
            ];
            
            //Creo el array con las opciones del RadioButton
            $aRadioOpciones = [
                'Masculino',
                'Femenino',
                'Otro'
            ];
            
            //Creo el array de errores y lo inicializo a null
            $aErrores = [
                'nombre' => null,
                'edad' => null,
                'calle' => null,
                'altura' => null,
                'boleano' => null,
                'fecha' => null,
                'momento_fecha_hora' => null,
                'descripcion' => null,
                'url' => null,
                'dni' => null,
                'codigoPostal' => null,
                'telefono' => null,
                'sexo' => null,
                'smartphone' => null,
                'idioma' => null
            ];
            //Creo el array de respuestas y lo incializo a null
            $aRespuestas = [
                'nombre' => null,
                'edad' => null,
                'calle' => null,
                'altura' => null,
                'boleano' => null,
                'fecha' => null,
                'momento_fecha_hora' => null,
                'descripcion' => null,
                'url' => null,
                'dni' => null,
                'codigoPostal' => null,
                'telefono' => null,
                'sexo' => null,
                'smartphone' => null,
                'idioma' => null
            ];

            //Comprobar si se ha pulsado el boton enviar en el formulario
            if (isset($_REQUEST['enviar'])) {
                //Comprobar si el campo nombre esta bien rellenado
                $aErrores['nombre'] = validacionFormularios::comprobarAlfabetico($_REQUEST['nombre'], TAMANYO_MAXIMO_NOMBRE, TAMANYO_MINIMO_NOMBRE, OBLIGATORIO);
                //Comprobar si el campo altura esta bien rellenado
                $aErrores['edad'] = validacionFormularios::comprobarEntero($_REQUEST['edad'], TAMANYO_MAXIMO_EDAD, TAMANYO_MINIMO_EDAD, OBLIGATORIO);
                //Comprobar si el campo calle esta bien rellenado
                $aErrores['calle'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['calle'], TAMANYO_MAXIMO_CALLE, TAMANYO_MINIMO_CALLE, OBLIGATORIO);
                //Comprobar si el campo altura esta bien rellenado
                $aErrores['altura'] = validacionFormularios::comprobarFloat($_REQUEST['altura'], TAMANYO_MAXIMO_ALTURA, TAMANYO_MINIMO_ALTURA, OBLIGATORIO);
                //Comprobar si el campo boleano esta bien rellenado
                //$aErrores[''] = validacionFormularios::
                //Comprobar si el campo fecha esta bien rellenado
                $aErrores['fecha'] = validacionFormularios::validarFecha($_REQUEST['fecha'], FECHA_MAXIMA, FECHA_MINIMA, OBLIGATORIO);
                //Comprobar si el campo momento_fecha_hora esta bien rellenado
                //$aErrores[''] = validacionFormularios::
                //Comprobar si el campo descripcion esta bien rellenado
                $aErrores['descripcion'] = validacionFormularios::comprobarMaxTamanio($_REQUEST['descripcion'], TAMANO_MAXIMO_DESCRIPCION);
                //Comprobar si el campo url esta bien rellenado
                $aErrores['url'] = validacionFormularios::validarURL($_REQUEST['url'], OBLIGATORIO);
                //Comprobar si el campo dni esta bien rellenado
                $aErrores['dni'] = validacionFormularios::validarDni($_REQUEST['dni'], OBLIGATORIO);
                //Comprobar si el campo codigo_postal esta bien rellenado
                $aErrores['codigoPostal'] = validacionFormularios::validarCp($_REQUEST['codigoPostal'], OBLIGATORIO);
                //Comprobar si el campo telefono esta bien rellenado
                $aErrores['telefono'] = validacionFormularios::validarTelefono($_REQUEST['telefono'], OBLIGATORIO);
                //Comprobar si el campo sexo esta bien rellenado
                //$aErrores['sexo'] = validacionFormularios::validarElementoEnLista($_REQUEST['sexo'], $aRadioOpciones);
                $aErrores['sexo'] = validacionFormularios::comprobarNoVacio($_REQUEST['sexo']);
                //Comprobar si el campo dispositivo esta bien rellenado
                //$aErrores['smartphone'] = validacionFormularios::validarElementoEnLista($_REQUEST['smartphone'], $aCheckboxOpciones);
                //Comprobar si el campo idioma esta bien rellenado
                $aErrores['idioma'] = validacionFormularios::validarElementoEnLista($_REQUEST['idioma'], $aListaOpciones);
                //Comprobar si algun campo del array de errores ha sido rellenado
                foreach ($aErrores as $campo => $error) {
                    if ($error != null) {
                        //Limpio el campo
                        $_REQUEST[$campo] = '';
                        $entradaOK = false;
                    }
                }
            } else {
                $entradaOK = false;
            }

            //Si los datos han sido introducidos correctamente, los mostramos 
            if ($entradaOK) {
                //Código que se ejecuta cuando se envía el formulario
                //Recojo los valores introducidos en el formulario del array respuestas
                $aRespuestas = [
                    'nombre' => $_REQUEST['nombre'],
                    'edad' => $_REQUEST['edad'],
                    'calle' => $_REQUEST['calle'],
                    'altura' => $_REQUEST['altura'],
                    //'boleano' => $_REQUEST['boleano'],
                    'fecha' => $_REQUEST['fecha'],
                    //'momento_fecha_hora' => $_REQUEST['momento_fecha_hora'],
                    'descripcion' => $_REQUEST['descripcion'],
                    'url' => $_REQUEST['url'],
                    'dni' => $_REQUEST['dni'],
                    'codigoPostal' => $_REQUEST['codigoPostal'],
                    'telefono' => $_REQUEST['telefono'],
                    'sexo' => $_REQUEST['sexo'],
                    //'dispositivo' => $_REQUEST['smartphone'],
                    'idioma' => $_REQUEST['idioma']
                ];

                //Muestro el contenido de las variables almacenadas en el array Respuestas
                echo 'El nombre es: ' . $aRespuestas['nombre'] . '<br>';
                echo 'La edad es: ' . $aRespuestas['edad'] . '<br>';
                echo 'La calle es: ' . $aRespuestas['calle'] . '<br>';
                echo 'La altura es: ' . $aRespuestas['altura'] . '<br>';
                //echo 'booleano';
                echo 'La fecha es: ' . $aRespuestas['fecha'] . '<br>';
                //echo 'momento fecha ';
                echo 'Descripción: ' . $aRespuestas['descripcion'] . '<br>';
                echo 'La URL es: ' . $aRespuestas['url'] . '</br>';
                echo 'El dni es: ' . $aRespuestas['dni'] . '<br>';
                echo 'El codigo postal es: ' . $aRespuestas['codigoPostal'] . '<br>';
                echo 'El telefono es: ' . $aRespuestas['telefono'] . '<br>';
                echo 'El sexo es: ' . $aRespuestas['sexo'] . '<br>';
                //echo 'Usa un smartphone: ' . $aRespuestas['smartphone'] . '<br>';
                echo 'El idioma es: ' . $aRespuestas['idioma'] . '<br>';
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
            } else {
                //Código que se ejecuta antes de rellenar el formulario
                ?> 
                <form name="formulario" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form">
                    <fieldset>
                        <p>Tus datos personales<p>
                        <ul>
                            <li>
                                <div>
                                    <label for="nombre"><strong>Nombre</strong></label>
                                </div>
                                <div>
                                    <input name="nombre" type="text" value="<?php echo isset($_REQUEST['nombre']) ? $_REQUEST['nombre'] : ''; ?>" placeholder="Introduzca su nombre">
                                    <?php echo '<span>' . $aErrores['nombre'] . '</span>' ?>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <label for="calle"><strong>Edad</strong></label>
                                </div>
                                <div>
                                    <input name="edad" type="text" value="<?php echo isset($_REQUEST['edad']) ? $_REQUEST['edad'] : ''?>" placeholder="Introduzca su edad">
                                    <?php echo '<span>' . $aErrores['edad'] . '</span>' ?>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <label for="calle"><strong>Calle</strong></label>
                                </div>
                                <div>
                                    <input name="calle" type="text" value="<?php echo isset($_REQUEST['calle']) ? $_REQUEST['calle'] : ''?>" placeholder="Introduzca calle y numero">
                                    <?php echo '<span>' . $aErrores['calle'] . '</span>' ?>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <label for="altura"><strong>Altura</strong></label>
                                </div>
                                <div>
                                    <input name="altura" type="text" value="<?php echo isset($_REQUEST['altura']) ? $_REQUEST['altura'] : ''?>" placeholder="Introduzca su altura">
                                    <?php echo '<span>' . $aErrores['altura'] . '</span>' ?>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <label for="boleano"><strong>Boleano</strong></label>
                                </div>
                                <div>
                                    
                                </div>
                            </li>
                            <li>
                                <div>
                                    <label for="fecha"><strong>Fecha</strong></label>
                                </div>
                                <div>
                                    <input name="fecha" type="text" value="<?php echo isset($_REQUEST['fecha']) ? $_REQUEST['fecha'] : ''?>" placeholder="Introduzca la fecha">
                                    <?php echo '<span>' . $aErrores['fecha'] . '</span>' ?>
                                    <p class="ayuda">El formato debe ser DD/MM/AAAA<p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <label for="momento_fecha_hora"><strong>Momento fecha hora</strong></label>
                                </div>
                                <div>
                                    
                                </div>
                            </li>
                            <li>
                                <div>
                                    <label for="descripcion"><strong>Descripción</strong></label>
                                </div>
                                <div>
                                    <textarea name="descripcion" rows="4" cols="29">Descripción</textarea>
                                    <?php echo '<span>' . $aErrores['descripcion'] . '</span>' ?>
                                    <p class="ayuda">Los caracteres maximos son 255.<p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <label for="url"><strong>URL</strong></label>
                                </div>
                                <div>
                                    <input name="url" type="text" value="<?php echo isset($_REQUEST['url']) ? $_REQUEST['url'] : ''?>" placeholder="Introduce tu URL">
                                    <?php echo '<span>' . $aErrores['url'] . '</span>'?>
                                    <p class="ayuda">El formato debe ser https://www.tuweb.com<p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <label for="dni"><strong>DNI</strong></label>
                                </div>
                                <div>
                                    <input name="dni" type="text" value="<?php echo isset($_REQUEST['dni']) ? $_REQUEST['dni'] : ''?>" placeholder="Introduzca su DNI">
                                    <?php echo '<span>' . $aErrores['dni'] . '</span>'?>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <label for="codigoPostal"><strong>Codigo Postal</strong></label>
                                </div>
                                <div>
                                    <input name="codigoPostal" type="text" value="<?php echo isset($_REQUEST['codigoPostal']) ? $_REQUEST['codigoPostal'] : ''?>" placeholder="Introduzca su codigo postal">
                                    <?php echo '<span>' . $aErrores['codigoPostal'] . '</span>'?>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <label for="telefono"><strong>Telefono</strong></label>
                                </div>
                                <div>
                                    <input name="telefono" type="text" value="<?php echo isset($_REQUEST['telefono']) ? $_REQUEST['telefono'] : ''?>" placeholder="Introduzca su telefono">
                                    <?php echo '<span>' . $aErrores['telefono'] . '</span>'?>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <label for="sexo"><strong>Sexo</strong></label>
                                </div>
                                <div>
                                    <label for="Masculino">
                                        <input class="sexo" type="radio" name="sexo" value="
                                            <?php if (isset($_REQUEST['sexo']) === 'Masculino') {echo "checked";}?>">Masculino
                                    </label>
                                    <label for="Femenino">
                                        <input class="sexo" type="radio" name="sexo" value="
                                            <?php if (isset($_REQUEST['sexo']) === 'Femenino') {echo "checked";}?>">Femenino
                                    </label>
                                    <label for="Otro">
                                        <input class="sexo" type="radio" name="sexo" value="
                                            <?php if (isset($_REQUEST['sexo']) === 'Otro') {echo "checked";}?>">Otro
                                    </label>
                                    <?php echo '<span>' . $aErrores['sexo'] . '</span>'?>
                                </div>
                                
                            </li>
                            <li>
                                <div>
                                    <label for="smartphone"><strong>Usa usted un smartphone</strong></label>
                                </div>
                                <div>
                                    
                                </div>
                            </li>
                            <li>
                                <div>
                                    <label for="idioma"><strong>Idioma</strong></label>
                                </div>
                                <div>
                                    <select name="idioma" value="<?php if (isset($_REQUEST['idioma'])) {echo $_REQUEST['idioma'];}?>">
                                        <option value=null></option>
                                        <option value="Espanol">Espanol</option>
                                        <option value="Portugues">Portugues</option>
                                    </select>
                                    <?php echo '<span>' . $aErrores['idioma'] . '</span>'?>
                                </div>
                            </li>
                            <li>
                                <input class="enviar" type="submit" name="enviar" value="Enviar"/>
                            </li>
                        </ul>
                    </fieldset>
                </form>
            <?php
            }
            ?>
        </main>
        <footer class="piepagina">
            <a href="https://github.com/AlbertoFRSauces/proyectoTema3" target="_blank"><img src="../webroot/css/img/github.png" class="imagegithub" alt="IconoGitHub" /></a>
            <p><a>&copy;</a>Alberto Fernández Ramírez 29/09/2021 Todos los derechos reservados.</p>
            <p>Ultima actualización: 26/10/2021 23:00</p>
        </footer>
    </body>
</html>