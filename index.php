
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

?>
