<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../calculator.php';

class CalculatorTest extends TestCase
{
    private $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAddition()
    {
        $this->assertEquals(5, $this->calculator->calculate('2+3'));
        $this->assertEquals(0, $this->calculator->calculate('-2+2'));
    }

    public function testSoustraction()
    {
        $this->assertEquals(-1, $this->calculator->calculate('2-3'));
        $this->assertEquals(4, $this->calculator->calculate('7-3'));
    }

    public function testMultiplication()
    {
        $this->assertEquals(6, $this->calculator->calculate('2*3'));
        $this->assertEquals(0, $this->calculator->calculate('0*5'));
    }

    public function testDivision()
    {
        $this->assertEquals(2, $this->calculator->calculate('6/3'));
        $this->assertEquals(0.5, $this->calculator->calculate('1/2'));
    }

    public function testDivisionParZero()
    {
        $this->expectException(RuntimeException::class);
        $this->calculator->calculate('5/0');
    }
}
