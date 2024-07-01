<?php

namespace App;

class Calculator
{
    public function sum(int $firstValue, int $secondValue ): int 
    {
        return $firstValue + $secondValue;
    }

    public function multiplication(int $firstValue, int $secondValue): int{
        return $firstValue * $secondValue;
    }

    public function isEven(int $number) : bool{
         return $number % 2 === 0;
    }
}