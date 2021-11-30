   <meta charset="utf-8" />
</head>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
a: <INPUT type="text" name="a" size="3">
b: <INPUT type="text" name="b" size="3">
 <p><label for="font">Выбор действия: </label><select name="font" id="font">
      <option value="summation">Сложить</option>
	  <option value="substraction">Вычесть</option>
	  <option value="division">Разделить</option>
	  <option value="miltiply">Умножить</option>
	</select>
   </p>
 <P> <INPUT type="submit" name="obr" value="Посчитать!">
</FORM>
<?
switch ($_POST["font"]) {
  case summation:
  $s1=$_POST["a"]+$_POST["b"];
  echo $s1;
  break;
  case substraction:
  $s1=$_POST["a"]-$_POST["b"];
  echo $s1;
  break;
  case division:
  $s1=$_POST["a"]/$_POST["b"];
  echo $s1;
  break;
  case miltiply:
  $s1=$_POST["a"]*$_POST["b"];
  echo $s1;
  break;
}

?>