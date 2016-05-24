<meta charset="utf-8">
<?php
$n = 1000;
$fl=0;
do {
    $n/=2;
    $fl++;
} while($n>50);
echo $n.'количество итераций'.$fl;
