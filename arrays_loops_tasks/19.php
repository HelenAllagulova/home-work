<meta charset="UTF-8">
<?php
$days=array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
$day='Monday';
foreach ($days as $val){
    if ($val==$day){
        echo '<i>'.$val.'</i> ';
        continue;
    }
    echo $val.' ';
}
