<meta charset="UTF-8">
<?php
$arr = array('Коля'=>'200', 'Вася'=>'300', 'Петя'=>'400');
foreach ($arr as $key=>$val){
    echo $key.' — зарплата '.$val.' долларов'.'<br>';
}