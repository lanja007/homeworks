<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 */

/*4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с помощью второго — столбец элементов.
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'); */


$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
echo "<h3>столбец ключей:</h3> <br>";
foreach ($arr as $key => $col) {
    echo "$key <br>";
};

echo "<h3>столбец элементов:</h3> <br>";
foreach ($arr as $key => $col) {
    echo "$col <br>";
}
