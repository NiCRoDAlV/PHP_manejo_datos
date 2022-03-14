<?php
/*
//-----------------Array simple----------------------------
$course = ['JavaScript', 'Laravel', 'VueJS', 10 => "php", "CSS"];

//Para visualizar mejor los datos de una array con var_dump()
//Usamos la etiqueta <pre>

echo "<pre>";
var_dump($course);

echo "<br> <br>";
*/

//---------------Array complejo-------------------------


/*
//Vamos a otorgar keys


$courses = [
    'frontend' => 'javascript',
    'framework' => 'laravel',
    'backend' => 'php',
    'frontend' => 'CSS'
];

//Ahora recorremos los elementos en el array
foreach ($courses as $key => $value) {
    echo "$key: $value <br>";
}

//Otra forma solo imprimiendo los elementos
foreach ($courses as $course) {
    echo " - $course <br>";
}

//Creamos una función que transforma a mayúscula un str
function upper($course)
{
    echo strtoupper("$course") . "<br>";

}
//Podemos usar la siguiente función propia de php para 
//recorrer un array
//pasamos como parámetro el nombre de la función str to upper
array_walk($courses, 'upper');


//Podemos ver si existe un key
var_dump(array_key_exists('frontend', $courses));
echo "<br>";

//Si existe un elemento en el array
var_dump (in_array('laravel', $courses));
echo "<br>";

//Nos devuelve un array con las keys con su correspondiente índice 
var_dump(array_keys($courses));
echo "<br>";


//Nos devuelve un array con los elementos de un array 
var_dump(array_values($courses));


*/


// --------------Funciones para manipular Arrays en BBDD------------

/*

//$courses = ['php', 'laravel', 'javascript'];

//sort() ordena los elementos de un array 
//en orden de longitud descendente por defecto
sort($courses);

echo "<pre>";
var_dump($courses);

echo "<br>";
//Ahora en orden ascendente. 
rsort($courses);
echo "<pre>";
var_dump($courses);

//Podemos ordenar según la key del elemento
$courses = [
    10 =>'php',
    100 =>'laravel',
    1000 =>'javascript'
];


//Entonces debemos usar ksort()
ksort($courses);
echo "<pre>";
var_dump($courses);




//Podemos seccionar un array
var_dump(array_slice($courses, 1));//comenzamos el array desde el elemento 1

//Podemos tomar un pedazo (chunk) y hacer que los elementos se organicen de 
//en un array dentro de otro o un diccionario
var_dump(array_chunk($courses, 2));



echo "<br>";

//eliminar el primer elemento y retornarlo
var_dump(array_shift($courses));

echo "<br>";

//Eliminar y retornar el último elemento
var_dump(array_pop($courses));

echo "<br>";


$courses = [
    10 =>'php',
    100 =>'laravel',
    1000 =>'javascript'
];

//Agregar elemento en el índice 0
array_unshift($courses, 'Elemento');

echo "<pre>";
var_dump($courses);

echo "<br>";


$courses = [
    10 =>'php',
    100 =>'laravel',
    1000 =>'javascript'
];

//Agregar elemento al final del array
array_push($courses, 'Elemento');
var_dump($courses);
echo "<br>";



$courses = [
    'backend' =>'php',
    'framework' =>'laravel',
    'frontend' =>'javascript'
];

//Intercambiar las key por los valores de un array
var_dump(array_flip($courses));
*/





//-------------------Comparación de Arrays------------------

/*
//Creamos arrays con los cursos disponibles
 // y los que los alumnos quieren
 // Luego analizamos la diferencia entre ambos
 //
$courses = ['javascript', 'php'];
$whishes = ['php', 'laravel', 'vuejs', 'javascript'];


//comparamos con array_diff. devuelve los elementos diferentes
//en forma de array

echo "<pre>";
var_dump(array_diff($whishes, $courses));

echo "<br>";
//Vemos que evalúa diferencias según el orden en el que 
//pongamos los arrays como parámetro
$arrayA = [1, 2, 3, 4, 5];
$arrayB = [3, 4, 5, 6, 7];

var_dump(array_diff($arrayA, $arrayB));
echo "<br>";
var_dump(array_diff($arrayB, $arrayA));
echo "<br>";


//array_diff_assoc() Vemos las diferencias en keys

$courses_1 = [
    'backend' =>'php',
    'framework' =>'laravel',
    'frontend' =>'javascript'
];
$courses_2 = [
    10 =>'php',
    100 =>'laravel',
    1000 =>'javascript'
];

var_dump(array_diff_assoc($courses_1, $courses_2));

var_dump(array_diff_assoc($courses_2, $courses_1));

*/



//---------------------------Unión---------------------------


/*
//Por ejemplo, cuando queremos mostrar los cursos disponibles
//y tenemos separados los cursos en dos arrays distintos

//$frontend = ['javascript'];
//$backend = ['php', 'laravel'];

//Si unimos directamente vemos que si un índice se repite
//entonces un elemento se reemplaza por el de otro array
echo "<pre>";
//var_dump($frontend + $backend);


//Para evitar esto debemos darle keys a nuestro array
$frontend = [
    'frontend' => 'javascript'
];
$backend = [
    'backend' => 'php',
    'framework' => 'laravel'
];


var_dump($frontend + $backend);



//En el caso de que los arrays no posean key
//podemos usar la siguiente función de php
$frontend = ['javascript'];
$backend = ['php', 'laravel'];

var_dump(array_merge($frontend, $backend));
//de esta forma se reinician los keys
//sirve solo para keys numéricos

//En el caso de tener keys de tipo str que coinciden
//podemos utilizar la opción recursiva de array_merge

$frontend = [
    'a' => 'javascript'
];
$backend = [
    'a' => 'php',
    'b' => 'laravel'
];
var_dump(array_merge_recursive($frontend, $backend));

//De esta forma crea un nuevo array contenido
//contenido en el general donde están todos los elementos
//con igual índice. 

*/


//-------------Combinación-------------------------

//Ahora combinamos un array courses con otro que contiene las
//categorías de un curso

$courses = ['javascript', 'php', 'laravel'];
$categories = ['frontend', 'backend', 'framework'];

echo "<pre>";

var_dump(array_combine($categories, $courses));