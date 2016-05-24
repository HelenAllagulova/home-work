<?php
$arr=array();
$max=0;
$min=555;
for ($i=0;$i<10;$i++){
    $arr[$i]=rand(1,333);
    if($arr[$i]<$min){
        $min=$arr[$i];
        $n_min=$i;
    }
    if($arr[$i]>$max) {
        $max = $arr[$i];
        $n_max=$i;
    }
}
print_r($arr);
echo '<br> Max array element #'.$n_max.'['.$max.']'.'<br> Min array element #'.$n_min.'['.$min.']'.'<br> Array after chenges: <br>';
$buf=$min;
$arr[$n_min]=$max;
$arr[$n_max]=$buf;
print_r($arr);


