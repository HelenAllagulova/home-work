<meta charset="UTF-8">
<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en=array();
$ru=array();
foreach ($arr as $key=>$val){
    $en[]=$key;
    $ru[]=$val;
}
print_r($en);
echo '<br>';
print_r($ru);