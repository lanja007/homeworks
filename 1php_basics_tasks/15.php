<?php
$a = 100;
$b = 4;
$operator = '/';
switch ($operator)
{
    case '+':
        echo $a + $b;
        break;
    case  '-':
        echo $a - $b;
        break;
    case '*':
        echo $a * $b;
        break;
    case '/':
        if ($b == 0) echo 'На 0 делить нельзя!';
        else printf("%.2f", $a/$b);
        break;
    case '%':
        if ($b == 0) echo 'На 0 делить нельзя!';
        else echo $a % $b;
        break;
    default:
        echo 'Выбирите верный формат действия + - * / %0';
}

    ?>
<html>
<a href="menu.php">menu</a>


</html>
