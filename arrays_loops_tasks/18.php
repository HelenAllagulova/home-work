<meta charset="UTF-8">
<?php
$days=array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
$weekend=array('Sunday','Saturday');
foreach ($days as $val){
    if (($val==$weekend[0])||($val==$weekend[1])){
        echo '<b>'.$val.'</b><br>';
        continue;
    }
    echo $val.'<br>';
}
