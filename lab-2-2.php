<?php
$per = 16;
$array = array();
$rez = array();
echo ("Массив из ".$per." элементов, заполненный случайными числами: ");
for ($i=0;$i<$per;$i++)
{
    $array[$i]=rand(10,99);
    echo $array[$i].'&nbsp;&nbsp;';
}