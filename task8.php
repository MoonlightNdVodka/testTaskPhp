<?php

class Matrix
{
    public array $matrix1;
    public int $matrixRows1;
    public int $matrixCols1;

    public function __construct($matrix1)
    {
        $this->matrix1 = $matrix1;
        $this->matrixCols1 = count($this->matrix1[2]);
        $this->matrixRows1 = count($this->matrix1);
    }

    public function addAnotherMatrix($matrix2)
    {
        echo "the addition of matrices is: " . PHP_EOL;
        for ($row = 0; $row < $this->matrixRows1; $row++) {
            for ($col = 0; $col < $this->matrixCols1; $col++) {
                echo " " . $this->matrix1[$row][$col] + $matrix2[$row][$col];
                $this->matrix1[$row][$col] = $this->matrix1[$row][$col] + $matrix2[$row][$col];
            }
            echo PHP_EOL;
        }
    }

    public function numMultiplication($number)
    {
        echo "the matrix * number: " . PHP_EOL;

        for ($row = 0; $row < $this->matrixRows1; $row++) {
            for ($col = 0; $col < $this->matrixCols1; $col++) {
                echo " " . $this->matrix1[$row][$col] * $number;
                $this->matrix1[$row][$col] = $this->matrix1[$row][$col] *$number;
            }
            echo PHP_EOL;
        }
    }

    public function printMatrix()
    {
        echo "Print the matrix: " . PHP_EOL;
        for ($row = 0; $row < $this->matrixRows1; $row++) {
            for ($col = 0; $col < $this->matrixCols1; $col++) {
                echo " " . $this->matrix1[$row][$col];
            }
            echo PHP_EOL;
        }
        echo "Rows:" . $this->matrixRows1 . PHP_EOL;
        echo "Cols:" . $this->matrixCols1 . PHP_EOL;
    }

    public function multiple($matrix2)
    {
        $p = count($matrix2);
        $q = count($matrix2[2]);

        echo " The multiplication of matrices: " . PHP_EOL;
        $result = array();
        for ($i = 0; $i < $this->matrixRows1; $i++) {
            for ($j = 0; $j < $q; $j++) {
                $result[$i][$j] = 0;
                for ($k = 0; $k < $this->matrixCols1; $k++) {
                    $result[$i][$j] += $this->matrix1[$i][$k] * $matrix2[$k][$j];
                }
            }
        }
        for ($row = 0; $row < $this->matrixRows1; $row++) {
            for ($col = 0; $col < $q; $col++) {
                echo " " . $result[$row][$col];
                $this->matrix1[$row][$col] = $result[$row][$col];
            }
            echo PHP_EOL;
        }
    }
}

$arr1 = new Matrix([
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
]);
$arr1->printMatrix();

$arr1->numMultiplication(3);
$arr1->printMatrix();

$arr1->multiple([
    [7, 8, 9],
    [4, 5, 6],
    [1, 2, 3]
]);
$arr1->printMatrix();

$arr1->addAnotherMatrix([
    [7, 8, 9],
    [4, 5, 6],
    [1, 2, 3]
]);
$arr1->printMatrix();





