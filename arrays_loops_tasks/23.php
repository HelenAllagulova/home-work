<?php
$number=444422;
$numb_str=(string)$number;
echo (is_numeric($numb_str)? 'Element ['.$numb_str. '] is number <br>':'Element ['.$numb_str.'] is not number <br>');
$sum_numb=0;
if(is_numeric($numb_str)) {
    for ($i = 0; $i < strlen($numb_str); $i++) {
        $sum_numb += $numb_str[$i];
    }
    echo 'Summ '.$sum_numb;
}