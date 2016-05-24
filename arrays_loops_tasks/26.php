<meta charset="utf-8">
<?php
$arr=array();
$pr=1;
for ($i=1;$i<=10;$i++){
    $arr[$i]=rand(1,100);
    if($i%2==0){
        $pr*=$arr[$i];

    }

}
print_r($arr);
echo '<br> Произведение четных элементов = '.$pr.'<br>';
foreach ($arr as $key=>$val){
    echo(($key%2!=0)?'Нечетный эллемент #'.$key.'['.$val.'],': '<br>');

}


