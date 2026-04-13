<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/StringValidator.php';

class StringValidatorTest extends TestCase
{
    public function testValidEmail()
    {
        $validator = new StringValidator();
        $this->assertTrue($validator->isEmail("prem@gmail.com"));
    }

    public function testInvalidEmail()
    {
        $validator = new StringValidator();
        $this->assertFalse($validator->isEmail("premgmail.com"));
    }
}