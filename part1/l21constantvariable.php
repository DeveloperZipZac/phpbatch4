<?php

// => Constant Variable 

// define('variablename','value')
// string/int/boolean/float 
// variablename should be uppercase 
// redefine are not allowed 

define('FULLNAME','Honey Nway Oo');
echo FULLNAME;      //Honey Nway Oo


// define('FULLNAME', 'Ma Ma Mya');    //can't overwrite
// echo FULLNAME;      //Honey Nway Oo

define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASS","123456789");
define("DB_NAME","phpdbone");

echo DB_HOST;
echo "<br/>";
echo DB_USER;
echo "<br/>";
echo DB_PASS;
echo "<br/>";
echo DB_NAME;
echo "<br/>";


// => constant("variablename") Function 

echo  constant("DB_HOST");
echo "<br/>";
echo constant("DB_USER");
echo "<br/>";
echo constant("DB_PASS");
echo "<br/>";
echo constant("DB_NAME");
echo "<br/>";


// => constant : const keyword 
// string/int/boolean/float 
// variablename should be uppercase 
// redefine are not allowed 

const MESSAGE = "Hello sir, are you ready to learn PHP OOP concept ?";
echo MESSAGE;               //Hello sir, are you ready to learn PHP OOP concept ?
echo constant('MESSAGE');   //Hello sir, are you ready to learn PHP OOP concept ?

// const MESSAGE = "Hello sir, are you ready to learn PHP OOP concept ?";       //can't overwrite
echo MESSAGE;               //Hello sir, are you ready to learn PHP OOP concept ?
echo constant('MESSAGE');   //Hello sir, are you ready to learn PHP OOP concept ?

?>