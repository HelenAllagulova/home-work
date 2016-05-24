<meta charset="UTF-8">
<?php
$arr=array(24, 24, 5, 19, 3, 0, 10);
$Fl = 0;
foreach ($arr as $e)
{
    if (($e==2)||($e==3)||($e==4))
    {
        $Fl=1;
        break;
    }
}
echo (($Fl==1)? 'Есть':'Нет');