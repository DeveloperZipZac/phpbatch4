<?php

// json_encode(array);

// json_decode(array);
// json_decode(array,associative);


$colors = ["red","green","blue"];
var_dump($colors);      //aray(3) {[0]=>string(3) "red" [1]=>string(5) "green" [2]=>string(4) "blue"}

$mycolors = json_encode($colors);
echo $mycolors;         //["red","green","blue"]    //string
var_dump($mycolors);    //string(22) "["red","green","blue"]"

$students = ["name"=>"aung aung","age"=>25,"city"=>"yangon"];
var_dump($students);     //array(3){["name"]=>string(9) "aung aung" ........}
echo $students["name"];
echo $students["age"];
echo $students["city"];

$studentinfos = json_encode($students);
echo $studentinfos;        //{"name":"aung aung","age":25,"city":"yangon"}
var_dump($studentinfos);   //string(45) "{"name":"aung aung","age":25,"city":"yangon"}"

// can't print bcoz they are string now
// echo $students["name"];
// echo $students["age"];
// echo $students["city"];


// => Decode by single parameter 

$studentdatas = '{"name":"aung aung","age":25,"city":"yangon"}';
$studentdecode = json_decode($studentdatas);

echo $studentdecode;            //can't echo bcoz they are not string

var_dump($studentdecode);       //object(stdClass)#1 .... //(it calls) standard class or object 

// can print ( object(stdclass) (-> object operator) )
echo $studentdecode->name;
echo $studentdecode->age;
echo $studentdecode->city;

foreach($studentdecode as $key=>$value){
    echo $key . " is " . $value . "<br/>";
}


// => Decode by multi parameter 
// Default is false

$staffdatas = '{"name":"aung aung","age":25,"city":"yangon"}';
$staffdecode = json_decode($staffdatas,true);
var_dump($studentdecode);       //array(3) {["name"]=>string......}     //array

$staffdatas = '{"name":"aung aung","age":25,"city":"yangon"}';
$staffdecode = json_decode($staffdatas, false);
var_dump($studentdecode);       //object(stdClass)#1 ....

echo $students["name"];     //aung aung
echo $students["age"];      //25
echo $students["city"];     //yangon


// can't print
// echo $studentdecode->name;
// echo $studentdecode->age;
// echo $studentdecode->city;







?>