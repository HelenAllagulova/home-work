<meta charset="UTF-8">
<?php
$a=7;
$b=6;
$operator='%';
switch ($operator){
    case '+':
        echo $a.$operator.$b.'='.($a+$b).'<br>';
        break;
    case '-':
        echo $a.$operator.$b.'='.($a-$b).'<br>';
        break;
    case '/':
        echo (($b==0)? ('деление на 0 невозможно'): ($a.$operator.$b.'='.($a/$b).'<br>'));
        break;
    case '*':
        echo $a.$operator.$b.'='.($a*$b).'<br>';
        break;
    case '%':
        echo (($b==0)? ('остаток от деления на 0 невозможен'): ($a.$operator.$b.'='.($a%$b).'<br>'));
        break;
    default:
        echo 'Оператор не задан';
}