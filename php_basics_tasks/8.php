<meta charset="UTF-8">
<?php
$age='fjk';
if (($age>=18)&&($age<=59)) {
    echo 'Вам еще работать и работать';
}
elseif ($age>=60){
    echo 'Вам пора на пенсию';
}
elseif (($age>0)&&($age<=17)){
    echo 'Вам еще рано работать';
}
else {
    echo 'Неизвестный возраст';
}