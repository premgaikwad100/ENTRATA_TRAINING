<?php
declare (strict_types=1);
use PHPUnit\Framework\TestCase;
require_once __DIR__.'/../lib/functions.php';
final class functionsTest extends TestCase
{
    public function testaddTwoPositiveIntegers() : void 
    {
        $this->assertSame(5,addTwoIntegers(2,3));
        
    }
    public function testaddTwoNegativeIntegers() : void 
    {
       $this->assertSame(-5,addTwoIntegers(-2,-3));
    }
    public function testaddPositiveAndNegativeIntegers() : void 
    {
        $this->assertSame(1,addTwoIntegers(4,-3));
    }
    public function testaddZeroToIntegers() : void 
    {
        $this->assertSame(3,addTwoIntegers(3,0));
    }
    public function testAddingIsCommutative() : void 
    {
        $this->assertSame(addTwoIntegers(2,3),addTwoIntegers(3,2));
    }
}