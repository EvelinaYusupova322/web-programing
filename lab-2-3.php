<?php
echo 'Ассоциативный массив: ';
$cust= array("cnum"=>"2001", "cname"=>"Hoffman", "city"=>"London", "snum"=>"1001");
print_r ($cust);

echo '<br><br>' . 'Добавлен ключ rating со значением 100 в массив: ';
$cust["rating"] = 100;
foreach($cust as $k => $v)
echo  $k, ' => ', $v;
?>
