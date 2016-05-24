<?php
$number='5442223315557455';
$numb_str=(string)$number;
echo (is_numeric($numb_str)? 'Element ['.$numb_str. '] is number <br>':'Element ['.$numb_str.'] is not number <br>');
$cifra=5;
$counter=0;
if(is_numeric($numb_str)) {
    for ($i = 0; $i < strlen($numb_str); $i++) {
        if($numb_str[$i]==$cifra){
            $counter++;
        }
    }
    echo 'Kolichestvo cifr "'.$cifra.'" v elemente '.$counter;
}