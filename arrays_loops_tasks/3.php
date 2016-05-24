<?php
$numbers=array(26, 17, 136, 12, 79, 15);
$result=0;
foreach ($numbers as $val){
    $result+= pow($val,2);
}
echo $result;