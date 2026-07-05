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


// => array_chunk(array,length,preservekey) Function 
$couples = ["aung aung","su su","kyaw kyaw","nu nu","tun tun","yin yin","zaw zaw","aye aye"];
$result = array_chunk($couples,2);
echo "<pre>".print_r($result,true)."</pre>";    

//  result

// <pre>Array
// (
//     [0] => Array
//         (
//             [0] => aung aung
//             [1] => su su
//         )

//     [1] => Array
//         (
//             [0] => kyaw kyaw
//             [1] => nu nu
//         )

//     [2] => Array
//         (
//             [0] => tun tun
//             [1] => yin yin
//         )

//     [3] => Array
//         (
//             [0] => zaw zaw
//             [1] => aye aye
//         )

// )
// </pre>

// ===========

echo $result[0][1];     //su su

//preservekey = true / false (default = false)

$result2 = array_chunk($couples,2,true);
echo "<pre>".print_r($result2,true)."</pre>";           // 01 23 45 67

$result2 = array_chunk($couples,2,false);
echo "<pre>".print_r($result2,true)."</pre>";           // 01 01 01 01


// => array_diff(array1,array2,...) Function 
// Note :: we don't need to consider any index or keyname 


$colors1 = ["red","green","blue","pink"];
$colors2 = ["red","blue","pink","silver"];
$colors3 = ["green","blue","orange","violet"];


echo "<pre>".print_r(array_diff($colors1, $colors2),true)."</pre>";     //( [1] => green )
echo "<pre>" . print_r(array_diff($colors2, $colors1), true) . "</pre>";     //( [3] => silver )
echo "<pre>" . print_r(array_diff($colors1, $colors2, $colors3), true) . "</pre>";     //( )

$col1 = ["a"=>"red","b"=>"green", "c"=>"blue", "d"=>"yellow"];
$col2 = ["e" => "red", "f" => "green", "g"=>"black"];

echo "<pre>" . print_r(array_diff($col1, $col2), true) . "</pre>";      //( [c] => blue [d] => yellow)
echo "<pre>" . print_r(array_diff($col2, $col1), true) . "</pre>";      //( [g] => black)


// => array_diff_assoc(array1,array2,...) Function 
// Note :: we need to consider keyname and value

$col1 = ["a" => "red", "b" => "yellow", "c" => "blue", "d" => "green"];
$col2 = ["a" => "red", "b" => "green", "c" => "blue"];

echo "<pre>" . print_r(array_diff_assoc($col1, $col2), true) . "</pre>";      //( [b] => yellow [d] => green)
echo "<pre>" . print_r(array_diff_assoc($col2, $col1), true) . "</pre>";      //( [b] => green)


// => array_diff_key(array1,array2,...) Function 
// Note :: we need to consider only key

$col1 = ["a" => "red", "b" => "yellow", "c" => "blue", "d" => "green"];
$col2 = ["a" => "red", "b" => "green", "c" => "blue"];

echo "<pre>" . print_r(array_diff_key($col1, $col2), true) . "</pre>";      //( [d] => green)
echo "<pre>" . print_r(array_diff_key($col2, $col1), true) . "</pre>";      //( )


// => array_intersect(array1,array2,...) Function 
// Note :: we don't need to consider keyname

$num1 = [10,20,30,60,70,80];
$num2 = array(10,20,30,40,50,90,80);

echo "<pre>" . print_r(array_intersect($num1, $num2), true) . "</pre>";    //( [0]=>10 [1]=>20 [2]=>30 [3]=>80 )
echo "<pre>" . print_r(array_intersect($num2, $num1), true) . "</pre>";    //( [0]=>10 [1]=>20 [2]=>30 [3]=>80 )

$col1 = ["a" => "red", "b" => "green", "c" => "blue", "d" => "yellow"];
$col2 = ["a" => "red", "f" => "green", "d" => "orange"];

echo "<pre>" . print_r(array_intersect($col1, $col2), true) . "</pre>";     //( [a]=>red [b]=green )
echo "<pre>" . print_r(array_intersect($col2, $col1), true) . "</pre>";     //( [a]=>red [b]=green )


// => array_fill(startindex,count,value) Function

echo "<pre>" . print_r(array_fill(0,3,"green"), true) . "</pre>";           //([0]=>green [1]=>green [2]=>green)
echo "<pre>".print_r(array_fill(2,2,"green"),true)."</pre>";           //([2]=>green [3]=>green)


// =>array_fill_keys(keys,value) Function 

$keys = ['a','b','c','d'];
$values = ["red","green","blue","pink"];
echo "<pre>".print_r(array_fill_keys($keys,"pink"),true)."</pre>";   //([a]=>pink [b]=>pink [c]=>pink [d]=>pink)
echo "<pre>".print_r(array_fill_keys($keys,$values),true)."</pre>";  //each keys got multidimensional array value


// => array_key_exists(key,array) Function (just for associative array) 
$operators = ["mpt"=>"ftth","ooredoo"=>"broadband"];

if(array_key_exists("mpt",$operators)){
    echo "Key exists";
}else{
    echo "Key does not exists";
}


// => array_merge(array1,array2,...) Fucntion 
$arr1 = ["red","green"];
$arr2 = array("blue","yellow");
$arr3 = ["orange","violet"];

echo "<pre>".print_r(array_merge($arr1,$arr2),true)."</pre>";  //[0]=>red [1]=>green [2]=>blue [3]=>yellow
echo "<pre>" . print_r(array_merge($arr1, $arr2, $arr3), true) . "</pre>";  
//[0]=>red [1]=>green [2]=>blue [3]=>yellow [4]=>orange [5]=>violet












?>