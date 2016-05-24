<?php
$row=rand(1,10);
$cols=rand(3,9);
$colors = array('red','yellow','blue','gray','maroon','brown','green');

echo '<table>';
for ($i=0;$i<$row;$i++){
    echo '<tr border="1">';
    for($j=0;$j<$cols;$j++){
        $color_rand=rand(0,6);
        echo '<td bgcolor="'.$colors[$color_rand].'">'.rand(1,9999).'</td>';
    }
    echo '</tr>';
}
echo '</table>';

