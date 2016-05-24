<?php
$months=array('january','february','march','april','may','june','july','august','september','october','november','desember');
$month='may';
foreach ($months as $item){
    if($item===$month){
        echo '<b>'.$item.'</b> ';
    }
    else {
        echo $item.' ';
    }
}
