<?php
 $treug = array(1,2,3,4,5,6,7,8,9,10);
 $kvd=array(1,2,3,4,5,6,7,8,9,10);
echo'Массив треугольных чисел: ';
foreach($treug as $k=>$n) {
    $treug[$k]=$n*($n+1)/2;
    echo $treug[$k] .'&nbsp;&nbsp;';
   }
echo '<br>';
 echo'Массив квадратов натуральных чисел: ';
 foreach($kvd as $a=>$b) {
    $kvd[$a]=$b*$b;
    echo $kvd[$a].'&nbsp;';
    }
?>
