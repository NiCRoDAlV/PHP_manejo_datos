<?php

$password = '123456';
//Solicitamos una contraseña de números [0-9]
//que tenga de 6 a 9 caracteres {6,9}
echo preg_match('/^[0-9]{6,9} $/', $password);


//Podemos ver el resultado de la condición con 
//la siguiente estructura

var_dump( (bool) preg_match('/^[0-9]{6,9} $/', $password));