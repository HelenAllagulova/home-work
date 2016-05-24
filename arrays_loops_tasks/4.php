<meta charset="UTF-8">
<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $key=>$val){
    echo($key.'<br>');
}
echo '<hr>';
foreach ($arr as $key=>$val){
    echo($val.'<br>');
}