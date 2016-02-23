<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 17.02.2016
 * Time: 17:09
 */


/*6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские — в массив $ru.
 $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
 $en = array('green', 'red','blue'); $ru = array('зеленый', 'красный', 'голубой');*/


$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = 0;
$ru = 0;
foreach ($arr as $key => $col) {


        $en = array("$key");
        $ru = array("$col");
        echo "$en[0]<br>";
        echo "$ru[0]<br>";
    }