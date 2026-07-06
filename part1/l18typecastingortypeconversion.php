<?php

// => Date Type 

// string 
// int 
// float 
// bool 
// array 
// object 
// unset 

// => Cast to String 

$val1 = "hello";    
var_dump($val1);             //string
$result = (string) $val1;    
var_dump($result);           //string

$val2 = 10;
var_dump($val2);             //integer
$result = (string) $val2;
var_dump($result);           //string

$val3 = 35.46;
var_dump($val3);             //float
$result = (string) $val3;
var_dump($result);           //string

$val4 = true;
var_dump($val4);             //boolean
$result = (string) $val4;
var_dump($result);           //true = "1: false = ""

$val5 = NULL;
var_dump($val5);             //null
$result = (string) $val5;
var_dump($result);           //string(0) ""


// => Cast to Integer

$val1 = "hello";
var_dump($val1);             //string
$result = (int) $val1;
var_dump($result);           //integer

$val2 = 10;
var_dump($val2);             //integer
$result = (int) $val2;
var_dump($result);           //integer

$val3 = 35.67;
var_dump($val3);             //float
$result = (int) $val3;
var_dump($result);           //int(35)

$val4 = true;
var_dump($val4);             //boolean
$result = (int) $val4;
var_dump($result);           //true = 1 false = 0

$val5 = NULL;
var_dump($val5);             //null
$result = (int) $val5;
var_dump($result);           //int(0)


// => Cast to Float

$val1 = "hello";
var_dump($val1);             //string
$result = (float) $val1;
var_dump($result);           //float(0)

$val2 = 10;
var_dump($val2);             //integer
$result = (float) $val2;
var_dump($result);           //float(10)

$val3 = 35.67;
var_dump($val3);             //float
$result = (float) $val3;
var_dump($result);           //float(35.67)

$val4 = true;
var_dump($val4);             //boolean
$result = (float) $val4;
var_dump($result);           //float(1) / float(0) for false

$val5 = NULL;
var_dump($val5);             //null
$result = (float) $val5;
var_dump($result);           //float(0)


// => Cast to Boolean

$val1 = "hello";
var_dump($val1);             //string
$result = (bool) $val1;
var_dump($result);           //bool(true)

$val2 = 10;
var_dump($val2);             //integer
$result = (bool) $val2;
var_dump($result);           //bool(true) / bool(false) for 0

$val3 = 35.67;
var_dump($val3);             //float
$result = (bool) $val3;
var_dump($result);           //bool(true)

$val4 = true;
var_dump($val4);             //boolean
$result = (bool) $val4;
var_dump($result);           //bool(true)

$val5 = NULL;
var_dump($val5);             //null
$result = (bool) $val5;
var_dump($result);           //bool(false)


// => Cast to Array

$val1 = "hello";
var_dump($val1);             //string
$result = (array) $val1;
var_dump($result);           //array(1) {[0]=>string(5) "hello"}

$val2 = 10;
var_dump($val2);             //integer
$result = (array) $val2;
var_dump($result);           //array(1) {[0]=>int(10)}

$val3 = 35.67;
var_dump($val3);             //float
$result = (array) $val3;
var_dump($result);           //array(1) {[0]=>float(35.67)}

$val4 = true;
var_dump($val4);             //boolean
$result = (array) $val4;
var_dump($result);           //array(1) {[0]=>bool(true)}

$val5 = NULL;
var_dump($val5);             //null
$result = (array) $val5;
var_dump($result);           //array(0) {}


// => Cast to Object

$val1 = "hello";
var_dump($val1);             //string
$result = (object) $val1;
var_dump($result);           //object(stdClass)#1 (1) {["scalar"]=>string(5) "hello"}

$val2 = 10;
var_dump($val2);             //integer
$result = (object) $val2;
var_dump($result);           //object ...

$val3 = 35.67;
var_dump($val3);             //float
$result = (object) $val3;
var_dump($result);           //object ...

$val4 = true;
var_dump($val4);             //boolean
$result = (object) $val4;
var_dump($result);           //object ...

$val5 = NULL;
var_dump($val5);             //null
$result = (object) $val5;
var_dump($result);           //object ... ()


// => Cast to NULL

$val1 = "hello";
var_dump($val1);             //string
// $result = (unset) $val1;
var_dump($result);           //NULL

$val2 = 10;
var_dump($val2);             //integer
// $result = (unset) $val2;
var_dump($result);           //NULL

$val3 = 35.67;
var_dump($val3);             //float
// $result = (unset) $val3;
var_dump($result);           //NULL

$val4 = true;
var_dump($val4);             //boolean
// $result = (unset) $val4;
var_dump($result);           //NULL

$val5 = NULL;
var_dump($val5);             //null
// $result = (unset) $val5;
var_dump($result);           //NULL



?>