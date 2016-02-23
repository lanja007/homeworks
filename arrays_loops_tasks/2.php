<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 */


/*Дан массив с элементами 1, 20, 15, 17, 24, 35. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result*/

$a = array(1, 20, 15, 17, 24, 35);
$result = 0;
foreach ($a as $item) {
    $result += $item;

echo "Сумма элементов данного массива = $result <br>";
}