<meta charset="UTF-8">
<?php
$age=61;
if (($age>=18)&&($age<=59)) {
    echo 'Вам еще работать и работать';
}
elseif ($age>59){
    echo 'Вам пора на пенсию';
}