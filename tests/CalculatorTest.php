<?php

use App\Calculator;
use PHPUnit\Framework\TestCase;


class CalculatorTest extends TestCase
{
    public function testSum(): void
    {
        //Arrange
        $firstValue = 5;
        $secondValue = 8;
        $expectedResult = 13;

        //Act
        $calculator = new Calculator();
        $sum = $calculator->sum($firstValue, $secondValue);
        
        //Assert
        $this->assertSame($expectedResult, $sum, 
            "La méthode sum() ne fonctionne plus :-("
        );
    }

    public function TestMultiplication():void{
        //Arrange
        $firstValue = 3;
        $secondValue = 2;
        $expectedResult = 13;

        //Act
        $calculator = new Calculator();
        $multiplication = $calculator->multiplication($firstValue, $secondValue);

        //Assert
        $this->assertSame($expectedResult, $multiplication,  "La méthode multiplication() ne fonctionne plus :-(" );
    }

    public function testIsEven(): void{
        //Arrange
        $numberA = 2;
        $numberB = 3;
        //Act
        $calculator = new Calculator();
        $isResultA= $calculator->isEven($numberA);
        $isResultB= $calculator->isEven($numberB);
 
        //Assert
        $this->assertTrue($isResultA, "La méthode isEven() devrait retourner true pour un nombre pair");
        $this->assertFalse($isResultB, "La méthode isEven() devrait retourner false pour un nombre impair");

    }
}