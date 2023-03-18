<?php

use JetBrains\PhpStorm\Pure;

class Student
{
    public string $firstName;
    public string $secondName;
    public int $group;
    public float $averageMark;

    public function __construct($firstName, $secondName, $group, $averageMark)
    {
        $this->firstName = $firstName;
        $this->secondName = $secondName;
        $this->group = $group;
        $this->averageMark = $averageMark;
    }

    public function getScholarship(): string
    {
        if ($this->averageMark == 5.0) {
            return $this->firstName . " scholarship is 100 USD" . PHP_EOL;
        } else {
            return $this->firstName . " scholarship is 80 USD" . PHP_EOL;
        }
    }

}

class Aspirant extends Student
{
    public string $research;

    function __construct($firstName, $secondName, $group, $grade, $research)
    {
        parent::__construct($firstName, $secondName, $group, $grade);
        $this->research = $research;
    }

    public function getScholarship(): string
    {
        if ($this->averageMark == 5.0) {
            return $this->firstName . " scholarship is 200 USD" . PHP_EOL;
        } else {
            return $this->firstName . " scholarship is 180 USD" . PHP_EOL;
        }
    }
}

$student = [
    new Student("Nurlan", "Saburow", 777, 3.2),
    new Student("Tambi", "Masaev", 771, 4.1),
    new Student("Ilya", "Makar", 737, 5.0),
    new Aspirant("Richard", "Sapogow", 451, 5.0, "whiskey"),
    new Aspirant("Dmitriy", "Lapenko", 11, 4.9, "hi-hi and ha-ha"),
    new Aspirant("Evgeniy", "Katamaranow", 69, 2.1, "vodochka"),
];
foreach ($student as $item) {
        echo $item->getScholarship();
}