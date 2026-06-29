<?php

// => Arithmetic Operators 
//	  +-*/%

$num1 = 100;
$num2 = 200;
$num3 = 30.28;
$city = "Mawalamyine";
$car = false;
$myarrs = ["maung maung",'kyaw kyaw'];
$colors = array("red","green",'blue');

echo $num1;
echo $num2;
echo $num1+$num2;
echo $num1-$num2;
echo $num1*$num2;
echo $num2/$num1;
echo $num1%$num2;

//Array to string conversion error (array can not output with echo)

var_dump($myarrs);  //check data type

$num4 = true;
$num5 = "10";
$num6 = '20';

var_dump($num5,$num6);  //string
echo $num5+$num6;       //30
echo $num6-$num5;       //10
echo $num4+$num5;       //11


// Overwrite or Override

$num5 = 50;
$num6 = "60";

var_dump($num5, $num6); //int, string
echo $num5+$num6;       //110

?>