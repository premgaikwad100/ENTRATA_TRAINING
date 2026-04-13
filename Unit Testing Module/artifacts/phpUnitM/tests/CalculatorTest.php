<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Calculator.php';

class CalculatorTest extends TestCase
{
    public function testAddition()
    {
        $calc = new Calculator();
        $this->assertEquals(8, $calc->add(5, 3));
    }

    public function testSubtraction()
    {
        $calc = new Calculator();
        $this->assertEquals(2, $calc->subtract(5, 3));
    }

    public function testMultiplication()
    {
        $calc = new Calculator();
        $this->assertEquals(15, $calc->multiply(5, 3));
    }

    public function testDivision()
    {
        $calc = new Calculator();
        $this->assertEquals(2, $calc->divide(6, 3));
    }

    public function testDivisionByZero()
    {
        $this->expectException(InvalidArgumentException::class);

        $calc = new Calculator();
        $calc->divide(5, 0);
    }
}