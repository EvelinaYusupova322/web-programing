<?php
 $treug = array(1,2,3,4,5,6,7,8,9,10);

echo'massiv treugolnuh chisel: ';
foreach($treug as $k=>$n) {
    $treug[$k]=$n*($n+1)/2;
    echo $treug[$k] .'&nbsp;&nbsp;';
   }
?>