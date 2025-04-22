<?php

use PHPUnit\Framework\TestCase;
use App\Math;

class MathTest extends TestCase
{
    /**
     * Teste l'addition de deux nombres positifs
     */
    public function testAdditionPositiveNumbers()
    {
        // Arrange
        $math = new Math();
        $a = 2;
        $b = 3;
        $expected = 5;
        
        // Act
        $result = $math->addition($a, $b);
        
        // Assert
        $this->assertEquals($expected, $result);
    }
    
    /**
     * Teste l'addition d'un nombre positif et d'un nombre négatif
     */
    public function testAdditionPositiveAndNegative()
    {
        $math = new Math();
        $this->assertEquals(-1, $math->addition(2, -3));
    }
    
    /**
     * Teste l'addition de deux nombres négatifs
     */
    public function testAdditionNegativeNumbers()
    {
        $math = new Math();
        $this->assertEquals(-5, $math->addition(-2, -3));
    }
    
    /**
     * Teste l'addition avec zéro
     */
    public function testAdditionWithZero()
    {
        $math = new Math();
        $this->assertEquals(5, $math->addition(5, 0));
    }
}
