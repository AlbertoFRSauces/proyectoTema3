<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../webroot/css/estiloejercicio.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="../webroot/css/img/home.png" type="image/x-icon">
        <title>Ejercicio 25</title>
        <style>
            form{
                margin-top: 15px;
                margin-bottom: 70px;
            }
            fieldset{
                border: 2px solid black;
                width: 900px;
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
            .radiobuttonObligatorio{
                width: 30px;
            }
            .checkboxObligatorio{
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
            <h1>Trabajar en PlantillaFormulario.php mi plantilla para hacer formularios como churros.</h1>
        </header>
        <main>
            <?php
            /*
             * @author: Alberto Fernandez Ramirez
             * @version: v1.Realizacion de ejercicio
             * Created on: 21-octubre-2021
             * Ejercicio 25. Trabajar en PlantillaFormulario.php mi plantilla para hacer formularios como churros.
             * 
             */
            //Uso la libreria de validacion
            require_once '../core/210322ValidacionFormularios.php';
            
            //Variable obligatorio inicializada a 1
            define("OBLIGATORIO", 1);
            //Variable opcional inicializaca a 0
            define("OPCIONAL", 0);
            //Variables de maximos y minimos definidas
            define("TAMANYO_MINIMO_ALFABETICO", 1);
            define("TAMANYO_MAXIMO_ALFABETICO", 150);
            define("TAMANYO_MINIMO_ALFANUMERICO", 1);
            define("TAMANYO_MAXIMO_ALFANUMERICO", 200);
            define("TAMANYO_MINIMO_ENTERO", 1);
            define("TAMANYO_MAXIMO_ENTERO", 150);
            define("TAMANYO_MINIMO_FLOAT", 1);
            define("TAMANYO_MAXIMO_FLOAT", 300);
            define("FECHA_MINIMA", '01/01/1800');
            define("FECHA_MAXIMA", '01/01/2200');
            define("TAMANO_MAXIMO_AREATEXTO", 255);
            //Variable de entrada correcta inicializada a true
            $entradaOK = true;
            
            //Creo el array con las opciones de la lista de idiomas
            $aListaOpciones = [
                'null',
                'OpcionLista1',
                'OpcionLista2'
            ];
            
            //Creo el array con las opciones del checkbox
            $aCheckboxOpciones = [
                'OpcionCheckbox1',
                'OpcionCheckbox2'
            ];
            
            //Creo el array con las opciones del RadioButton
            $aRadioOpciones = [
                'OpcionRadio1',
                'OpcionRadio2',
                'OpcionRadio3'
            ];
            
            //Creo el array de errores y lo inicializo a null
            $aErrores = [
                'alfabeticoObligatorio' => null,
                'alfabeticoOpcional' => null,
                'alfanumericoObligatorio' => null,
                'alfanumericoOpcional' => null,
                'enteroObligatorio' => null,
                'enteroOpcional' => null,
                'floatObligatorio' => null,
                'floatOpcional' => null,
                'fechaObligatorio' => null,
                'fechaOpcional' => null,
                'areaTextoObligatorio' => null,
                'areaTextoOpcional' => null,
                'urlObligatorio' => null,
                'urlOpcional' => null,
                'dniObligatorio' => null,
                'dniOpcional' => null,
                'codigoPostalObligatorio' => null,
                'codigoPostalOpcional' => null,
                'telefonoObligatorio' => null,
                'telefonoOpcional' => null,
                'radiobuttonObligatorio' => null,
                'checkboxObligatorio' => null,
                'listaDesplegableObligatorio' => null
            ];
            //Creo el array de respuestas y lo incializo a null
            $aRespuestas = [
                'alfabeticoObligatorio' => null,
                'alfabeticoOpcional' => null,
                'alfanumericoObligatorio' => null,
                'alfanumericoOpcional' => null,
                'enteroObligatorio' => null,
                'enteroOpcional' => null,
                'floatObligatorio' => null,
                'floatOpcional' => null,
                'fechaObligatorio' => null,
                'fechaOpcional' => null,
                'areaTextoObligatorio' => null,
                'areaTextoOpcional' => null,
                'urlObligatorio' => null,
                'urlOpcional' => null,
                'dniObligatorio' => null,
                'dniOpcional' => null,
                'codigoPostalObligatorio' => null,
                'codigoPostalOpcional' => null,
                'telefonoObligatorio' => null,
                'telefonoOpcional' => null,
                'radiobuttonObligatorio' => null,
                'checkboxObligatorio' => null,
                'listaDesplegableObligatorio' => null
            ];

            //Comprobar si se ha pulsado el boton enviar en el formulario
            if (isset($_REQUEST['enviar'])) {
                //Comprobar si el campo alfabetico esta bien rellenado
                $aErrores['alfabeticoObligatorio'] = validacionFormularios::comprobarAlfabetico($_REQUEST['alfabeticoObligatorio'], TAMANYO_MAXIMO_ALFABETICO, TAMANYO_MINIMO_ALFABETICO, OBLIGATORIO);
                $aErrores['alfabeticoOpcional'] = validacionFormularios::comprobarAlfabetico($_REQUEST['alfabeticoOpcional'], TAMANYO_MAXIMO_ALFABETICO, TAMANYO_MINIMO_ALFABETICO, OPCIONAL);
                //Comprobar si el campo alfanumerico esta bien rellenado
                $aErrores['alfanumericoObligatorio'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['alfanumericoObligatorio'], TAMANYO_MAXIMO_ALFANUMERICO, TAMANYO_MINIMO_ALFANUMERICO, OBLIGATORIO);
                $aErrores['alfanumericoOpcional'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['alfanumericoOpcional'], TAMANYO_MAXIMO_ALFANUMERICO, TAMANYO_MINIMO_ALFANUMERICO, OPCIONAL);
                //Comprobar si el campo entero esta bien rellenado
                $aErrores['enteroObligatorio'] = validacionFormularios::comprobarEntero($_REQUEST['enteroObligatorio'], TAMANYO_MAXIMO_ENTERO, TAMANYO_MINIMO_ENTERO, OBLIGATORIO);
                $aErrores['enteroOpcional'] = validacionFormularios::comprobarEntero($_REQUEST['enteroOpcional'], TAMANYO_MAXIMO_ENTERO, TAMANYO_MINIMO_ENTERO, OPCIONAL);
                //Comprobar si el campo float esta bien rellenado
                $aErrores['floatObligatorio'] = validacionFormularios::comprobarFloat($_REQUEST['floatObligatorio'], TAMANYO_MAXIMO_FLOAT, TAMANYO_MINIMO_FLOAT, OBLIGATORIO);
                $aErrores['floatOpcional'] = validacionFormularios::comprobarFloat($_REQUEST['floatOpcional'], TAMANYO_MAXIMO_FLOAT, TAMANYO_MINIMO_FLOAT, OPCIONAL);
                //Comprobar si el campo fecha esta bien rellenado
                $aErrores['fechaObligatorio'] = validacionFormularios::validarFecha($_REQUEST['fechaObligatorio'], FECHA_MAXIMA, FECHA_MINIMA, OBLIGATORIO);
                $aErrores['fechaOpcional'] = validacionFormularios::validarFecha($_REQUEST['fechaOpcional'], FECHA_MAXIMA, FECHA_MINIMA, OPCIONAL);
                //Comprobar si el campo areaTexto esta bien rellenado
                $aErrores['areaTextoObligatorio'] = validacionFormularios::comprobarMaxTamanio($_REQUEST['areaTextoObligatorio'], TAMANO_MAXIMO_AREATEXTO);
                $aErrores['areaTextoOpcional'] = validacionFormularios::comprobarMaxTamanio($_REQUEST['areaTextoOpcional'], TAMANO_MAXIMO_AREATEXTO);
                //Comprobar si el campo url esta bien rellenado
                $aErrores['urlObligatorio'] = validacionFormularios::validarURL($_REQUEST['urlObligatorio'], OBLIGATORIO);
                $aErrores['urlOpcional'] = validacionFormularios::validarURL($_REQUEST['urlOpcional'], OPCIONAL);
                //Comprobar si el campo dni esta bien rellenado
                $aErrores['dniObligatorio'] = validacionFormularios::validarDni($_REQUEST['dniObligatorio'], OBLIGATORIO);
                $aErrores['dniOpcional'] = validacionFormularios::validarDni($_REQUEST['dniOpcional'], OPCIONAL);
                //Comprobar si el campo codigoPostal esta bien rellenado
                $aErrores['codigoPostalObligatorio'] = validacionFormularios::validarCp($_REQUEST['codigoPostalObligatorio'], OBLIGATORIO);
                $aErrores['codigoPostalOpcional'] = validacionFormularios::validarCp($_REQUEST['codigoPostalOpcional'], OPCIONAL);
                //Comprobar si el campo telefono esta bien rellenado
                $aErrores['telefonoObligatorio'] = validacionFormularios::validarTelefono($_REQUEST['telefonoObligatorio'], OBLIGATORIO);
                $aErrores['telefonoOpcional'] = validacionFormularios::validarTelefono($_REQUEST['telefonoOpcional'], OPCIONAL);
                //Comprobar si el campo radiobutton esta bien rellenado
                if(isset($_REQUEST['radiobuttonObligatorio'])){
                    $aErrores['radiobuttonObligatorio'] = validacionFormularios::validarElementoEnLista($_REQUEST['radiobuttonObligatorio'], $aRadioOpciones);
                }else{
                    $aErrores['radiobuttonObligatorio'] = validacionFormularios::validarElementoEnLista(null, $aRadioOpciones);
                }
                //Comprobar si el campo checkbox esta bien rellenado
                if(isset($_REQUEST['checkboxObligatorio'])){
                    $aErrores['checkboxObligatorio'] = validacionFormularios::validarArrayPorArray($_REQUEST['checkboxObligatorio'], $aCheckboxOpciones);
                }else{
                    $aErrores['checkboxObligatorio'] = validacionFormularios::validarArrayPorArray(null, $aCheckboxOpciones);
                }
                //Comprobar si el campo listaDesplegable esta bien rellenado
                $aErrores['listaDesplegableObligatorio'] = validacionFormularios::validarElementoEnLista($_REQUEST['listaDesplegableObligatorio'], $aListaOpciones);
                
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
                    'alfabeticoObligatorio' => $_REQUEST['alfabeticoObligatorio'],
                    'alfabeticoOpcional' => $_REQUEST['alfabeticoOpcional'],
                    'alfanumericoObligatorio' => $_REQUEST['alfanumericoObligatorio'],
                    'alfanumericoOpcional' => $_REQUEST['alfanumericoOpcional'],
                    'enteroObligatorio' => $_REQUEST['enteroObligatorio'],
                    'enteroOpcional' => $_REQUEST['enteroOpcional'],
                    'floatObligatorio' => $_REQUEST['floatObligatorio'],
                    'floatOpcional' => $_REQUEST['floatOpcional'],
                    'fechaObligatorio' => $_REQUEST['fechaObligatorio'],
                    'fechaOpcional' => $_REQUEST['fechaOpcional'],
                    'areaTextoObligatorio' => $_REQUEST['areaTextoObligatorio'],
                    'areaTextoOpcional' => $_REQUEST['areaTextoOpcional'],
                    'urlObligatorio' => $_REQUEST['urlObligatorio'],
                    'urlOpcional' => $_REQUEST['urlOpcional'],
                    'dniObligatorio' => $_REQUEST['dniObligatorio'],
                    'dniOpcional' => $_REQUEST['dniOpcional'],
                    'codigoPostalObligatorio' => $_REQUEST['codigoPostalObligatorio'],
                    'codigoPostalOpcional' => $_REQUEST['codigoPostalOpcional'],
                    'telefonoObligatorio' => $_REQUEST['telefonoObligatorio'],
                    'telefonoOpcional' => $_REQUEST['telefonoOpcional'],
                    'radiobuttonObligatorio' => $_REQUEST['radiobuttonObligatorio'],
                    'checkboxObligatorio' => $_REQUEST['checkboxObligatorio'],
                    'listaDesplegableObligatorio' => $_REQUEST['listaDesplegableObligatorio']
                ];

                //Muestro el contenido de las variables almacenadas en el array Respuestas
                echo 'El alfabetico obligatorio es: ' . $aRespuestas['alfabeticoObligatorio'] . '<br>';
                echo 'El alfabetico opcional es: ' . $aRespuestas['alfabeticoOpcional'] . '<br>';
                echo 'El alfanumerico obligatorio es: ' . $aRespuestas['alfanumericoObligatorio'] . '<br>';
                echo 'El alfanumerico opcional es: ' . $aRespuestas['alfanumericoOpcional'] . '<br>';
                echo 'El entero obligatorio es: ' . $aRespuestas['enteroObligatorio'] . '<br>';
                echo 'El entero opcional es: ' . $aRespuestas['enteroOpcional'] . '<br>';
                echo 'El float obligatorio es: ' . $aRespuestas['floatObligatorio'] . '<br>';
                echo 'El float opcional es: ' . $aRespuestas['floatOpcional'] . '<br>';
                echo 'La fecha obligatoria es: ' . $aRespuestas['fechaObligatorio'] . '<br>';
                echo 'La fecha opcional es: ' . $aRespuestas['fechaOpcional'] . '<br>';
                echo 'El area de texto obligatoria es: ' . $aRespuestas['areaTextoObligatorio'] . '<br>';
                echo 'El area de texto opcional es: ' . $aRespuestas['areaTextoOpcional'] . '<br>';
                echo 'La URL obligatoria es: ' . $aRespuestas['urlObligatorio'] . '</br>';
                echo 'La URL opcional es: ' . $aRespuestas['urlOpcional'] . '</br>';
                echo 'El dni obligatorio es: ' . $aRespuestas['dniObligatorio'] . '<br>';
                echo 'El dni opcional es: ' . $aRespuestas['dniOpcional'] . '<br>';
                echo 'El codigo postal obligatorio es: ' . $aRespuestas['codigoPostalObligatorio'] . '<br>';
                echo 'El codigo postal opcional es: ' . $aRespuestas['codigoPostalOpcional'] . '<br>';
                echo 'El telefono obligatorio es: ' . $aRespuestas['telefonoObligatorio'] . '<br>';
                echo 'El telefono opcional es: ' . $aRespuestas['telefonoOpcional'] . '<br>';
                echo 'El radiobutton obligatorio es: ' . $aRespuestas['radiobuttonObligatorio'] . '<br>';
                echo 'El checkbox obligatorio es: ';
                foreach ($aRespuestas['checkboxObligatorio'] as $value) {
                    echo $Value . '<br>';
                }
                echo 'La lista desplegable obligatoria es: ' . $aRespuestas['listaDesplegableObligatorio'] . '<br>';
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
                        <p>Plantilla Formulario<p>
                        <ul>
                            <!--Campo Alfabetico Obligatorio -->
                            <li>
                                <div>
                                    <label for="alfabeticoObligatorio"><strong>Alfabetico Obligatorio</strong></label>
                                    <input name="alfabeticoObligatorio" id="alfabeticoObligatorio" type="text" value="<?php echo isset($_REQUEST['alfabeticoObligatorio']) ? $_REQUEST['alfabeticoObligatorio'] : ''; ?>" placeholder="Introduzca alfabetico obligatorio">
                                    <?php echo '<span>' . $aErrores['alfabeticoObligatorio'] . '</span>' ?>
                                </div>
                            </li>
                            <!--Campo Alfabetico Opcional -->
                            <li>
                                <div>
                                    <label for="alfabeticoOpcional"><strong>Alfabetico Opcional</strong></label>
                                    <input name="alfabeticoOpcional" id="alfabeticoOpcional" type="text" value="<?php echo isset($_REQUEST['alfabeticoOpcional']) ? $_REQUEST['alfabeticoOpcional'] : ''; ?>" placeholder="Introduzca alfabetico opcional">
                                    <?php echo '<span>' . $aErrores['alfabeticoOpcional'] . '</span>' ?>
                                </div>
                            </li>
                            <!--Campo Alfanumerico Obligatorio -->
                            <li>
                                <div>
                                    <label for="alfanumericoObligatorio"><strong>Alfanumerico Obligatorio</strong></label>
                                    <input name="alfanumericoObligatorio" id="alfanumericoObligatorio" type="text" value="<?php echo isset($_REQUEST['alfanumericoObligatorio']) ? $_REQUEST['alfanumericoObligatorio'] : ''?>" placeholder="Introduzca alfanumerico obligatorio">
                                    <?php echo '<span>' . $aErrores['alfanumericoObligatorio'] . '</span>' ?>
                                </div>
                            </li>
                            <!--Campo Alfanumerico Opcional -->
                            <li>
                                <div>
                                    <label for="alfanumericoOpcional"><strong>Alfanumerico Opcional</strong></label>
                                    <input name="alfanumericoOpcional" id="alfanumericoOpcional" type="text" value="<?php echo isset($_REQUEST['alfanumericoOpcional']) ? $_REQUEST['alfanumericoOpcional'] : ''?>" placeholder="Introduzca alfanumerico obligatorio">
                                    <?php echo '<span>' . $aErrores['alfanumericoOpcional'] . '</span>' ?>
                                </div>
                            </li>
                            <!--Campo Entero Obligatorio-->
                            <li>
                                <div>
                                    <label for="enteroObligatorio"><strong>Entero Obligatorio</strong></label>
                                    <input name="enteroObligatorio" id="enteroObligatorio" type="text" value="<?php echo isset($_REQUEST['enteroObligatorio']) ? $_REQUEST['enteroObligatorio'] : ''?>" placeholder="Introduzca entero obligatorio">
                                    <?php echo '<span>' . $aErrores['enteroObligatorio'] . '</span>' ?>
                                </div>
                            </li>
                            <!--Campo Entero Opcional-->
                            <li>
                                <div>
                                    <label for="enteroOpcional"><strong>Entero Opcional</strong></label>
                                    <input name="enteroOpcional" id="enteroOpcional" type="text" value="<?php echo isset($_REQUEST['enteroOpcional']) ? $_REQUEST['enteroOpcional'] : ''?>" placeholder="Introduzca entero opcional">
                                    <?php echo '<span>' . $aErrores['enteroOpcional'] . '</span>' ?>
                                </div>
                            </li>
                            <!--Campo Float Obligatorio-->
                            <li>
                                <div>
                                    <label for="floatObligatorio"><strong>Float Obligatorio</strong></label>
                                    <input name="floatObligatorio" id="floatObligatorio" type="text" value="<?php echo isset($_REQUEST['floatObligatorio']) ? $_REQUEST['floatObligatorio'] : ''?>" placeholder="Introduzca Float Obligatorio">
                                    <?php echo '<span>' . $aErrores['floatObligatorio'] . '</span>' ?>
                                </div>
                            </li>
                            <!--Campo Float Opcional-->
                            <li>
                                <div>
                                    <label for="floatOpcional"><strong>Float Opcional</strong></label>
                                    <input name="floatOpcional" id="floatOpcional" type="text" value="<?php echo isset($_REQUEST['floatOpcional']) ? $_REQUEST['floatOpcional'] : ''?>" placeholder="Introduzca Float Opcional">
                                    <?php echo '<span>' . $aErrores['floatOpcional'] . '</span>' ?>
                                </div>
                            </li>
                            <!--Campo Fecha Obligatorio-->
                            <li>
                                <div>
                                    <label for="fechaObligatorio"><strong>Fecha Obligatoria</strong></label>
                                    <input name="fechaObligatorio" id="fechaObligatorio" type="text" value="<?php echo isset($_REQUEST['fechaObligatorio']) ? $_REQUEST['fechaObligatorio'] : ''?>" placeholder="Introduzca Fecha Obligatoria">
                                    <?php echo '<span>' . $aErrores['fechaObligatorio'] . '</span>' ?>
                                    <p class="ayuda">El formato debe ser DD/MM/AAAA<p>
                                </div>
                            </li>
                            <!--Campo Fecha Opcional-->
                            <li>
                                <div>
                                    <label for="fechaOpcional"><strong>Fecha Opcional</strong></label>
                                    <input name="fechaOpcional" id="fechaOpcional" type="text" value="<?php echo isset($_REQUEST['fechaOpcional']) ? $_REQUEST['fechaOpcional'] : ''?>" placeholder="Introduzca Fecha Opcional">
                                    <?php echo '<span>' . $aErrores['fechaOpcional'] . '</span>' ?>
                                    <p class="ayuda">El formato debe ser DD/MM/AAAA<p>
                                </div>
                            </li>
                            <!--Campo AreaTexto Obligatorio-->
                            <li>
                                <div>
                                    <label for="areaTextoObligatorio"><strong>AreaTexto Obligatoria</strong></label>
                                    <textarea name="areaTextoObligatorio" rows="4" cols="29">AreaTexto Obligatoria</textarea>
                                    <?php echo '<span>' . $aErrores['areaTextoObligatorio'] . '</span>' ?>
                                    <p class="ayuda">Los caracteres maximos son 255.<p>
                                </div>
                            </li>
                            <!--Campo AreaTexto Opcional-->
                            <li>
                                <div>
                                    <label for="areaTextoOpcional"><strong>AreaTexto Opcional</strong></label>
                                    <textarea name="areaTextoOpcional" rows="4" cols="29">AreaTexto Opcional</textarea>
                                    <?php echo '<span>' . $aErrores['areaTextoOpcional'] . '</span>' ?>
                                    <p class="ayuda">Los caracteres maximos son 255.<p>
                                </div>
                            </li>
                            <!--Campo URL Obligatorio-->
                            <li>
                                <div>
                                    <label for="urlObligatorio"><strong>URL Obligatorio</strong></label>
                                    <input name="urlObligatorio" id="urlObligatorio" type="text" value="<?php echo isset($_REQUEST['urlObligatorio']) ? $_REQUEST['urlObligatorio'] : ''?>" placeholder="URL Obligatorio">
                                    <?php echo '<span>' . $aErrores['urlObligatorio'] . '</span>'?>
                                    <p class="ayuda">El formato debe ser https://www.URLObligatorio.com<p>
                                </div>
                            </li>
                            <!--Campo URL Opcional-->
                            <li>
                                <div>
                                    <label for="urlOpcional"><strong>URL Opcional</strong></label>
                                    <input name="urlOpcional" id="urlOpcional" type="text" value="<?php echo isset($_REQUEST['urlOpcional']) ? $_REQUEST['urlOpcional'] : ''?>" placeholder="URL Opcional">
                                    <?php echo '<span>' . $aErrores['urlOpcional'] . '</span>'?>
                                    <p class="ayuda">El formato debe ser https://www.URLOpcional.com<p>
                                </div>
                            </li>
                            <!--Campo DNI Obligatorio-->
                            <li>
                                <div>
                                    <label for="dniObligatorio"><strong>DNI Obligatorio</strong></label>
                                    <input name="dniObligatorio" type="text" value="<?php echo isset($_REQUEST['dniObligatorio']) ? $_REQUEST['dniObligatorio'] : ''?>" placeholder="DNI Obligatorio">
                                    <?php echo '<span>' . $aErrores['dniObligatorio'] . '</span>'?>
                                </div>
                            </li>
                            <!--Campo DNI Opcional-->
                            <li>
                                <div>
                                    <label for="dniOpcional"><strong>DNI Opcional</strong></label>
                                    <input name="dniOpcional" type="text" value="<?php echo isset($_REQUEST['dniOpcional']) ? $_REQUEST['dniOpcional'] : ''?>" placeholder="DNI Opcional">
                                    <?php echo '<span>' . $aErrores['dniOpcional'] . '</span>'?>
                                </div>
                            </li>
                            <!--Campo CodigoPostal Obligatorio-->
                            <li>
                                <div>
                                    <label for="codigoPostalObligatorio"><strong>Codigo Postal Obligatorio</strong></label>
                                    <input name="codigoPostalObligatorio" type="text" value="<?php echo isset($_REQUEST['codigoPostalObligatorio']) ? $_REQUEST['codigoPostalObligatorio'] : ''?>" placeholder="Codigo Postal Obligatorio">
                                    <?php echo '<span>' . $aErrores['codigoPostalObligatorio'] . '</span>'?>
                                </div>
                            </li>
                            <!--Campo CodigoPostal Opcional-->
                            <li>
                                <div>
                                    <label for="codigoPostalOpcional"><strong>Codigo Postal Opcional</strong></label>
                                    <input name="codigoPostalOpcional" type="text" value="<?php echo isset($_REQUEST['codigoPostalOpcional']) ? $_REQUEST['codigoPostalOpcional'] : ''?>" placeholder="Codigo Postal Opcional">
                                    <?php echo '<span>' . $aErrores['codigoPostalOpcional'] . '</span>'?>
                                </div>
                            </li>
                            <!--Campo Telefono Obligatorio-->
                            <li>
                                <div>
                                    <label for="telefonoObligatorio"><strong>Telefono Obligatorio</strong></label>
                                    <input name="telefonoObligatorio" id="telefonoObligatorio" type="text" value="<?php echo isset($_REQUEST['telefonoObligatorio']) ? $_REQUEST['telefonoObligatorio'] : ''?>" placeholder="Telefono Obligatorio">
                                    <?php echo '<span>' . $aErrores['telefonoObligatorio'] . '</span>'?>
                                </div>
                            </li>
                            <!--Campo Telefono Opcional-->
                            <li>
                                <div>
                                    <label for="telefonoOpcional"><strong>Telefono Opcional</strong></label>
                                    <input name="telefonoOpcional" id="telefonoOpcional" type="text" value="<?php echo isset($_REQUEST['telefonoOpcional']) ? $_REQUEST['telefonoOpcional'] : ''?>" placeholder="Telefono Opcional">
                                    <?php echo '<span>' . $aErrores['telefonoOpcional'] . '</span>'?>
                                </div>
                            </li>
                            <!--Campo Radiobutton Obligatorio-->
                            <li>
                                <div>
                                    <label for="radiobuttonObligatorio"><strong>Radiobutton Obligatorio</strong></label>
                                    <label for="OpcionRadio1">
                                        <input class="radiobuttonObligatorio" id="OpcionRadio1" type="radio" name="OpcionRadio1" value="OpcionRadio1"
                                            <?php if (isset($_REQUEST['radiobuttonObligatorio']) && $_REQUEST['radiobuttonObligatorio'] == 'OpcionRadio1') {echo "checked";}?>>OpcionRadio1</label>
                                    <label for="OpcionRadio2">
                                        <input class="radiobuttonObligatorio" id="OpcionRadio2" type="radio" name="OpcionRadio2" value="OpcionRadio2"
                                            <?php if (isset($_REQUEST['radiobuttonObligatorio']) && $_REQUEST['radiobuttonObligatorio']  == 'OpcionRadio2') {echo "checked";}?>>OpcionRadio2</label>
                                    <label for="OpcionRadio3">
                                        <input class="radiobuttonObligatorio" id="OpcionRadio3" type="radio" name="OpcionRadio3" value="OpcionRadio3"
                                            <?php if (isset($_REQUEST['radiobuttonObligatorio']) && $_REQUEST['radiobuttonObligatorio']  == 'OpcionRadio3') {echo "checked";}?>>OpcionRadio3</label>
                                    <?php echo '<span>' . $aErrores['radiobuttonObligatorio'] . '</span>'?>
                                </div>
                            </li>
                            <!--Campo Checkbox Obligatorio-->
                            <li>
                                <div>
                                    <label for="checkboxObligatorio"><strong>Checkbox Obligatorio</strong></label>
                                    <label for="OpcionCheckbox1">
                                    <input class="checkboxObligatorio" type="checkbox" name="checkboxObligatorio[]" id="OpcionCheckbox1" value="OpcionCheckbox1" 
                                        <?php if (!empty($_REQUEST['checkboxObligatorio'])){
                                            if (in_array('OpcionCheckbox1', $_REQUEST['checkboxObligatorio'])) {echo "checked";}
                                        }
                                        ?>>OpcionCheckbox1</label>
                                    <label for="OpcionCheckbox2">
                                    <input class="checkboxObligatorio" type="checkbox" name="checkboxObligatorio[]" id="OpcionCheckbox2" value="OpcionCheckbox2" 
                                        <?php if (!empty($_REQUEST['checkboxObligatorio'])){
                                            if (in_array('OpcionCheckbox2', $_REQUEST['checkboxObligatorio'])) {echo "checked";}
                                        }
                                        ?>>OpcionCheckbox2</label>
                                </div>
                            </li>
                            <!--Campo ListaDesplegable Obligatorio-->
                            <li>
                                <div>
                                    <label for="listaDesplegableObligatorio"><strong>Lista Desplegable Obligatoria</strong></label>
                                    <select name="listaDesplegableObligatorio" value="<?php if (isset($_REQUEST['listaDesplegableObligatorio'])) {echo $_REQUEST['listaDesplegableObligatorio'];}?>">
                                        <option value="null">Elija una opcion</option>
                                        <option value="OpcionLista1">OpcionLista1</option>
                                        <option value="OpcionLista2">OpcionLista2</option>
                                    </select>
                                    <?php echo '<span>' . $aErrores['listaDesplegableObligatorio'] . '</span>'?>
                                </div>
                            </li>
                            <!--Campo Boton Enviar-->
                            <li>
                                <input class="enviar" id="enviar" type="submit" name="enviar" value="Enviar"/>
                            </li>
                        </ul>
                    </fieldset>
                </form>
            <?php
            }
            ?>
        </main>
        <!--Footer de la pagina -->
        <footer class="piepagina">
            <a href="https://github.com/AlbertoFRSauces/proyectoTema3" target="_blank"><img src="../webroot/css/img/github.png" class="imagegithub" alt="IconoGitHub" /></a>
            <p><a>&copy;</a>Alberto Fernández Ramírez 29/09/2021 Todos los derechos reservados.</p>
            <p>Ultima actualización: 28/10/2021 23:00</p>
        </footer>
        </main>
    </body>
</html>


