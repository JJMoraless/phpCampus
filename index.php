
<?php

/* -------------------------------------------------------------------------- */
/*                                   punto 5                                  */
/* -------------------------------------------------------------------------- */


/**
 *
 * etiquetas que marcan el inicio y fin del script php
 */
 echo '<h1>hola mundo cruel</h1>';




/* -------------------------------------------------------------------------- */
/*                                   punto 6                                  */
/* -------------------------------------------------------------------------- */

/**
 * funciones de salidar
 * mostrar información al usuario cuando finaliza la ejecución de un proceso determinado o cuando finaliza el
 * proceso una petición realizada por el usuario final en la salida estandar.
 */


//mostrar una varias string
echo 'texto a imprimir';

// imprimir con formato
$strSaludo = "mundi"; 
printf("hola mundo %s ", $strSaludo);

// devuelve el texto formateado NO LO IMPRIME
$mensaje = sprintf("hola %s", $strSaludo);
echo $mensaje;


/* -------------------------------------------------------------------------- */
/*                                   punto 7                                  */
/* -------------------------------------------------------------------------- */

/**
 *  variables y constantes
 *  int string boolean
 */

 echo '<hr>';

 $edad = 25;
 $nombre = "juanc";
 $es_valido = true;
 
 // var_dump permite inspeccionar y depurar 
 // el contenido de las variables en tiempo de ejecución. 
 echo var_dump($nombre);
 
 
 
 // Constantes
 
 define('PI', 3.1416);
 define('SALUNA', "Hola Mundis");
 define("ES_VALIDO", true);
 

?>
