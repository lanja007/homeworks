<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 17.02.2016
 * Time: 18:31
 */


/*
 *13. Вывести таблицу умножения
 *
 * */


$min = 2;
$max = 9;
$result = 1;
for($i=$min; $i <= $max; $i++)
{
    for($j=$min; $j <= $max; $j++)
    {
        $result = $i * $j;
        echo "$i * $j = $result";
        echo '<br>';
    }
    echo '<br>';
}