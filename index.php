<?php

//-----------------------------------(  1  )-----------------------------------



/*
echo 'Un texto de una línea
varias lineas
comilla simple \' backslash \\ continuar con más texto';


$name = 'nicolás';
echo " <br> Mi nombre es $name";

//otra forma con comillas simples

echo 'Mi nombre es ' . $name . '<br>';


//Salto de linea <br>

echo "Una linea <br> otra linea <br>";


//Definimos estructuras de datos complejas

$courses = [
    'backend' => [
        'PHP',
        'Laravel'
    ]
];

//imprimo desde la estructura compleja 
//La información debe estar entre llaves

echo "{$courses['backend'][0]}<br>";

class User 
{
    public $name = 'Nicolás';
}

$user = new User();

//Mostramos el atributo name del objeto User

echo "$user->name quiere aprender {$courses['backend'][0]}";



//Uso de variables variables
$teacher = 'italo';
$italo = 'Profesor de PHP';

echo "<br> <br>$teacher es ${$teacher}";

//Otra forma. 
function getTeacher()
{
    return 'teacher';
}

$teacher = "Italo";

echo "<br> {${getTeacher()}} enseña PHP";
*/




//-----------------------------------(  2  )-----------------------------------



//$data = 'Estudio PHP';

//echo $data[0];



/*
$post = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Incidunt molestiae est placeat doloribus quidem ipsa unde, eaque adipisci doloremque nobis beatae blanditiis! Saepe, ad id. Harum culpa quam autem dolor!";

//la función substr() extrae un sub-string de un string.
$extract = substr($post, 0, 20);

echo  "$extract ... [ver más]";

*/



/*

$data = 'JavaScript, PHP, Laravel';//campo tag de la base de datos por ejemplo

//Podemos obtener un array a partir de un string con explode

//indicamos que los elementos del array están separados por ","
$tags = explode(', ', $data); //array donde guardamos la infromación del campo.

//<pre> estructura mejor la información del var_dump()
echo "<pre>";
var_dump($tags);    


*/



/*
$courses = ['JavaScript', 'PHP', 'Laravel'];

//implode() crea un str a partir de un array 
echo implode(",  ", $courses);
*/

/*
$course_1 = "  Curso PHP  ";


echo "<pre>";
echo "Quiero aprender $course_1.<br>";


//con trim() se eliminan los espacios vacíos a los lados del string
$course_2 = trim ($course_1);
echo "Quiero aprender $course_2.";

*/


//----------------------------------------(3)-----------------------------------------

$text_1 = "PHP es UN LENGUAJE";
$text_2 = "nicolás";

/*
//Convertir un str a minúscula
echo strtolower($text_1);
echo "<br>";
//Convertir en mayúscula
echo strtoupper($text_1);
echo "<br>";
//Primera letra en mayúscula
echo ucfirst($text_2);
echo "<br>";
//Primera letra en minúscula
echo lcfirst($text_1);
echo "<br>";
*/


/*
//Reemplazar espacio por guión. 
$slug = str_replace(' ', '-',$text_1);

echo $slug;
*/


//Modificar
//En este caso completamos con str_pad() un numero con
// '#' hasta que el str llegue a los 8 caracters. 


/*
$code = 39;
echo str_pad($code, 8, '#');
echo "<br>";
//para que complete a ambos lados. 
echo str_pad($code, 8, '#',STR_PAD_BOTH);
*/


/*
//Quitamos etiquetas html
$text = "<h1>Título</h1>";
echo $text;
echo strip_tags($text);
*/


//Trabajo con elementos monobyte y multibyte
$monobyte_text = "hola";
$multibyte_text = "mañana . vacío";

echo strtoupper($monobyte_text);
echo "<br>";
echo strtoupper($multibyte_text);
echo "<br>";
echo mb_strtoupper($multibyte_text);