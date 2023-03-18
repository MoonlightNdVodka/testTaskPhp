<?php

class Calculator
{
    public int $a;
    public int $b;
    public int $temp = 0;

    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function add(): int
    {
        return $this->temp = $this->a + $this->b;
    }

    public function multiply()
    {
        return $this->temp = $this->a * $this->b;
    }

    public function divide()
    {
        return $this->temp = $this->a / $this->b;
    }

    public function subtract()
    {
        return $this->temp = $this->a - $this->b;
    }

    public function addBy($c)
    {
        return $this->temp += $this->temp + $c;
    }

    public function divideBy($c)
    {
        return $this->temp = $this->temp / $c;
    }

    public function multiplyBy($c)
    {
        return $this->temp = $this->temp * $c;
    }

    public function subtractBy($c)
    {
        return $this->temp = $this->temp - $c;
    }
}

$myCalc = new Calculator(12, 6);
echo $myCalc->add() . PHP_EOL;
echo $myCalc->divideBy(9) . PHP_EOL;
echo $myCalc->multiplyBy(9) . PHP_EOL;
echo $myCalc->subtractBy(6) . PHP_EOL;

echo $myCalc->add() . PHP_EOL;
