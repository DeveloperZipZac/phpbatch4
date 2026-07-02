<?php

// => array_combine(key,value) Function 

$name = array("aung aung","su su","kyaw kayw","hla hla");
$age = [30,25,35,40];

$result = array_combine($name,$age);

echo "<pre>".print_r($result,true)."</pre>";
// [aung aung] => 30 [su su] => 25 [kyaw kyaw] = 35 [hla hla] = 40

echo $result['kyaw kyaw'];          //35


// => count(array) Function

$vehicles = ["toyota","ford","audi","mazda","suzuki","ford","mazda","bmw"];
echo count($vehicles);              //8


// => array_count_values(array) Function  (case-sensitive)

$cars = ["toyota", "ford", "audi", "mazda"];
echo count($cars);                  //4
echo "<pre>".print_r(array_count_values($cars),true)."</pre>";     //[toyota]=>1 [ford]=>1 [mazda]=>1 [audi]=>1


$brands = ["toyota", "ford", "audi", "mazda", "suzuki", "ford", "mazda", "bmw"];
echo "<pre>".print_r(array_count_values($brands),true)."</pre>";     
//[toyota]=>1 [ford]=>2 [mazda]=>2 [audi]=>1 [bmw]=>1


?>