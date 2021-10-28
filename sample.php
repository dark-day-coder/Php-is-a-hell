<?php
$lado = 5;
echo '<table>';
for ($i=1;$i<=$lado;$i++){
    echo '<tr>';
    for ($j=1;$j<=$lado;$j++){
        echo '<td>';
        echo $i.$j;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';
?>