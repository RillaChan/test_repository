<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calculator extends Model
{
    use HasFactory;

    const
        ADD = 1,
        SUBTRACT = 2,
        MULTIPLY = 3,
        DIVIDE = 4;

    // this comment was not here hahahahahaha

    //2nd message from here

    //3rd message from here
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

    public function subtract(int $a, int $b): int
    {
        return $a - $b;
    }

    public function multiply(int $a, int $b): int
    {
        return $a * $b;
    }

    public function divide(int $a, int $b): int
    {
        return ($a / $b);
    }

    public function getOperations():array
    {
        return[
            self::ADD => 'Addition',
            self::SUBTRACT => 'Subtraction',
            self::MULTIPLY => 'Multiplication',
            self::DIVIDE => 'Division'
        ];
    }

    public function calculate(int $operation, int $a, int $b): ?int
    {
        
            switch ($operation) {
                case self::ADD:
                    return $this->add($a, $b);
                case self::SUBTRACT:
                    return $this->subtract($a, $b);
                case self::MULTIPLY:
                    return $this->multiply($a, $b);
                case self::DIVIDE:
                    return $this->divide($a, $b);
                default:
                    return null;
            }


    }

    public function RangeFinder(int $a, $b): array
    {
        if ($a>$b)
        {
            $a=$a+$b;
            $b=$a-$b;
            $a=$a-$b;
        }
    }
}
