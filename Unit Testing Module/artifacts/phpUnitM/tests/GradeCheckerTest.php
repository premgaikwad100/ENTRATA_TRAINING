<?php

use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/GradeChecker.php';

class GradeCheckerTest extends TestCase
{
    public function testGradeA()
    {
        $checker = new GradeChecker();
        $this->assertEquals("A", $checker->getGrade(80));
    }

    public function testFailGrade()
    {
        $checker = new GradeChecker();
        $this->assertEquals("Fail", $checker->getGrade(30));
    }
}