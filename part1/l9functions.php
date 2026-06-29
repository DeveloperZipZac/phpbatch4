<?php

// User Defined Function

// function name(){
//     code to be executed;
// }

// -------------

// Parameter Function (or) Arguments Funciton
// (i) Single
// (ii) Multi

// function name($arg1){
//     code to be executed;
// }

// function name($arg1,$arg2){
//     code to be executed;
// }

// ------------

// Default Parameter Function (or) Default Argument Function

// function name($name="aung aung",$age=20){
//      code to be executed;
// }

function myfun(){
    echo "My name is mr.zip";
}
myfun();
myfun();
myfun();

function myfun1(){
    $num1 = 10;
    $num2 = 20;
    $cal = $num1+$num2;
    echo $cal;
}

myfun1();   // 30

// ------------

function singlefun($name){
    echo "My name is $name";
}

singlefun("aung aung");
singlefun("su su");

// ------------

function multifun($name,$age){
    echo "My name is $name and I am {$age} years old.";
}

multifun("kyaw kyaw",20);
multifun("su su",30);

// -------------

function defaultfun($name="hla hla"){
    echo "My name is $name";
}

defaultfun();            // My name is hla hla.
defaultfun("aye aye");   // My name is aye aye.

function defaultfun1($num1=20, $num2=30, $num3=10){
    $cal = $num1 + $num2 + $num3;
    echo $cal;
}

defaultfun1();           //60
defaultfun1(30,50);      //90
defaultfun1(20,20,60);   //100

?>