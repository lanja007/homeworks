<?php
/**
 * Created by PhpStorm.
 * User: Юрий
 * Date: 17.02.2016
 * Time: 17:52
 */



echo "<h4>8.</h4>";
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr as $v) {
    echo "-" . $v;
    if ($v == 9) {
        echo "-";
    }
};