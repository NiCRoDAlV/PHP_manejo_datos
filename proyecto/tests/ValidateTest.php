<?php

use PHPUnit\Framework\TestCase;
use App\Validate;


class ValidateTest extends TestCase
{   
    //comprobamos si un email es correcto
    public function test_email()
    {
        $email = Validate::email('i@gmail.com');
        $this->assertTrue($email);
    }
    //comprobamos si existe una url
    public function test_url()
    {
        $url = Validate::url('https://platzi.com');
        $this->assertTrue($url);
    }
    //comprobamos si una password cumple con una expresión
    public function test_password()
    {
        $password = Validate::password('1234567');
        $this->assertTrue($password);
    }
}