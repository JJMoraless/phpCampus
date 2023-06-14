
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





/* -------------------------------------------------------------------------- */
/*                                   punto 8                                  */
/* -------------------------------------------------------------------------- */
echo '<hr>';


/**
 * tipos de datos PHP
 * int = sin decimal
 * float = con decimal
 * booleanos = true or false
 * arrays = [1,2,3...]
 * object = instanciones de clases que son definiciones de objetos 
 * resource = refenrecias a recursos externos: conexiones dbs o archivos abiertos 
 * null = variables sin valor o sin definir
 */

$logeado = true;
$numero = 200;
$float = 200.5;
$nombre = "juan";
$array = [];



/* -------------------------------------------------------------------------- */
/*                                   punto 9                                  */
/* -------------------------------------------------------------------------- */
/**
 * numeros y operadores
 */


$num1 = 20;
$num2 = 30;
$num3 = 30;
$num3 = "30";
var_dump($num1 > $num2);
echo "<br/>";

var_dump($num1 <=> $num2);
echo "<br/>";


// -1 si izquierda es menor
// 0 si es igual 
// 1 si izquirda es mayor

var_dump($num2 <=> $num1);
echo "<br/>";


/**
 * metodos de cadenas
 */

$nombre_cliente = " AAA  campers campuslands";

// extension de un str
echo strlen($nombre_cliente);

echo "<br/>";
// eliminar expaciones en blanco alrededor
$texto = trim($nombre_cliente);
echo $texto;
echo "<br/>";

// convertir a mayuscula
echo strtoupper($texto);
echo "<br/>";

// convertir a minuscula
echo strtolower($texto);
echo "<br/>";

// touper y tolower
$email1 = "correo@correo.com";
$email2 = "Correo@correo.com";
var_dump(strtolower($email1) ===  strtolower($email2));
echo "<br/>";


// replazar (buscado, remplazo, texto) 
echo str_replace("AAA", "J", $nombre_cliente);
echo "<br/>";



echo "<h3> Arreglos, Arreglos asociativos y funciones para arreglos </h3>";
$carrito = array("tablet", "tv", "computer");


// buscar elementos en un array
// tambien busca arrays en un arrays de arrays
// devuelve booleano

$carrito[] = "new product";
var_dump($carrito);
$a = array(array('p', 'h'), array('p', 'r'), 'o');

if (in_array(array('p', 'h'), $a)) {
    echo "Se encontró 'ph'\n";
}

if (in_array(array('p'), $a)) {
    echo "Se encontró 'fi'\n";
}

if (in_array('o', $a)) {
    echo "Se encontró 'o'\n";
}


// -- añadir al inicio 



array_push($carrito, "iphone");






// property_exists(this, propoiedad);


/**
 * El resultado del ejemplo sería:
 *  Se encontró 'ph'
 *  Se encontró 'o'
 */


// ordenar elementos de un arreglo
// si lo muta
$numeros = array(312, 31, 3, 12, 3);
sort($numeros); // de menor a mayor
rsort($numeros); // de mayor a menor
var_dump($numeros);


$informacion = array(
    "nombre" => "Juan",
    "edad" => 25,
    "ciudad" => "México DF"
);


asort($informacion);
asort($informacion);
ksort($informacion);

/* -------------------------------------------------------------------------- */
/*                           1.8. Isset() y Empty()                           */
/* -------------------------------------------------------------------------- */


/**
 * isset()  comprueba si una variable o un elemento de un array está definido y no es null.
 * empty() comprueba si una variable o un elemento de un array está vacío.
*/

/* -------------------------------------------------------------------------- */
/*                       1.14. Json_encode y json_decode                      */
/* -------------------------------------------------------------------------- */


/**
 * Json_encode convertir una estructura de datos en PHP en una cadena JSON
 * json_decode convertir una cadena JSON a una estructura de datos en PHP 
*/

// --- Resumen Funciones más usadas en manipulación de data

// array_flip() Intercambia las claves con sus valores correspondientes en un array.
// array_fill() Rellena un array con un valor especificado.
// array_filter() Filtra los elementos de un array utilizando una función de devolución de llamada.
// array_map() Aplica una función a cada elemento de un array y devuelve un nuevo array con los
// array_reduce() Reduce un array a un solo valor aplicando una función de devolución de llamada.
// array_key_exists() Comprueba si una clave existe en un array.
// in_array() Comprueba si un valor existe en un array.
// array_rand() Devuelve una o varias claves aleatorias de un array
// array_unique(): Elimina los valores duplicados de un array.
// array_intersect(): Devuelve un array con los valores comunes a todos los arrays dados.
// array_diff(): Devuelve un array con los valores del primer array que no están presentes en los arrays
// array_push(): Agrega uno o más elementos al final de un array.
// array_pop(): Extrae y elimina el último elemento de un array.
// array_reverse(): Revierte el orden de los elementos en un array.
// array_sum(): Devuelve la suma de todos los valores de un array numérico.



/* -------------------------------------------------------------------------- */
/*                    2.1.1. Modificadores de acceso en PHP                   */
/* -------------------------------------------------------------------------- */



// public: accesibles desde cualquier lugar, desde dentro de la clase, desde las clases heredadas o desde fuera de la clase. 
// private: Los miembros declarados como private solo son accesibles desde dentro de la misma clase en la que se definen.
// protected: son accesibles desde dentro de la misma clase y desde las clases heredadas (subclases).




/* -------------------------------------------------------------------------- */
/*                                 2.2. Clases                                */
/* -------------------------------------------------------------------------- */











































