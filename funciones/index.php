<?php
/*

//Valores
function greet($name)
{
    return "Hola, $name";
}


echo greet('Nicolás');
*/


//Referencias
$course='PHP';
/**
 * Si pasamos $course como referencia haciendo uso de 
 * "&" entonces la variable se verá afectada en valor también
 * de forma externa
 * Si no estuviera referenciada entonces $course no cambiaría de
 * valor de forma externa a path()
 */

/*
function path(&$course) //pasanmos $course como referencia con "&"
 
{
    $course = 'Laravel';
    echo $course;
}

path($course);
echo $course;


//Predeterminado 

function greet($name = 'Nicolás')
{
    return "Hola, $name";
}

echo greet();//Imprime "Hola, Nicolás"
echo greet('Abel');//Imprime "Hola, Abel"

*/

//---------------------------return-------------------------------------
/*

//Lo que debemos hacer como buena práctica es imprimir con echo lo que la función retorna. 
function greet()
{
    return "Hola...";
}


echo greet();

//En el caso de que queramos retornar más de un elemento retornamos un array
//en la función y luego realizamos un var_dump de la misma

function greet_2()
{
    return ['PDF', 'vista'];
}


var_dump(greet_2());


*/
//---------------------Funciones anónimas-------------------------------

//ejemplo de funcion anónima

/**
 * Una función anónima se utiliza en una variable 
 * que requiere lógica
 * $greet (variable)
 */

/*
$greet = function ($name)
{
    return "Hola, $name";
};
//debe terminar en ";" porque es una variable


echo $greet('Nicolás');
*/


//Podemos pasar como parámetro una función anónima
function greet(Closure $lang, $name)
{
    return $lang($name);
    //En este caso la variable que contiene a la función
    //anónima es $lang
}

$es = function ($name)
{
    return "Hola, $name";
};

$en = function ($name)
{
    return "Hello, $name";
};

//Ahora podemos imprimir utilizando los diferentes valores
//De la función anónima, pasándolo como parámetro.
echo greet($es, 'Nico');
echo greet($en, 'Nico');