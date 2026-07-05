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


// => array_keys(array,value) Function 
// => array_keys(array,value,strict) 

$phones = ["mpt"=>"ftth","ooredoo"=>"broadband","telenor"=>"wifi"];

echo "<pre>" . print_r(array_keys($phones), true) . "</pre>";   //([0]=>mpt [1]=>ooredoo [2]=>telenor)
echo array_keys($phones)[1];                        //ooredoo

echo "<pre>" . print_r(array_keys($phones,"broadband"), true) . "</pre>";   //([0] => ooredoo)
echo array_keys($phones,"broadband")[0];                        //ooredoo

$numbers = [10,20,30,"10"];
echo "<pre>" . print_r(array_keys($numbers, "10"), true) . "</pre>";    //([0]=> 0 [1]=>3)
echo "<pre>" . print_r(array_keys($numbers, 10), true) . "</pre>";    //([0]=> 0 [1]=>3)


// default ka false 
echo "<pre>" . print_r(array_keys($numbers, 10, true), true) . "</pre>";    //([0]=> 0)
echo "<pre>" . print_r(array_keys($numbers, "10", true), true) . "</pre>";    //([0]=>3)

echo "<pre>" . print_r(array_keys($numbers, 10, false), true) . "</pre>";    //([0]=> 0 [1]=>3)
echo "<pre>" . print_r(array_keys($numbers, "10"), true) . "</pre>";         //([0]=> 0 [1]=>3)


// => array_map(callback,array1,array2,...) Function 

$males = ["tun tun","aung aung","kyaw kyaw","thura","zaw zaw"];
$females = array("hla hal","su su","nu nu","yu yu","thida");

function genderone($name){
    return ("Mr.".$name);
}

function gendertwo($male,$female){
    return ($male."&".$female);
}

echo "<pre>".print_r(array_map("genderone",$males),true)."</pre>";
//[0]=>Mr.tun tun [1]=>Mr.aung aung [2]=>Mr.kyaw kyaw [3]=>Mr.thura [4]=>Mr.zaw zaw

echo "<pre>" . print_r(array_map("gendertwo", $males, $females), true) . "</pre>";
//[0]=>tun tun & hla hla [1]=>aung aung & su su [2]=>kyaw kyaw & nu nu [3]=>thura & yu yu [4]=>zaw zaw & thida


// => sort(array) Function 
// sorting a to z

$cars = ["volov","bmw","toyota","mazda","suzuki"];
// echo "<pre>" . print_r(sort($cars), true) . "</pre>";   //<pre>1</pre> it tells true(sort done)

sort($cars);
echo "<pre>" . print_r($cars, true) . "</pre>";
// ([0]=>bmw [1]=>mazda [2]=>suzuki [3]=>toyota [4]=>volov) 

$numbers = [10,50,"80",90,35,"100",130,"250",70];
sort($numbers);
echo "<pre>" . print_r($numbers, true) . "</pre>";
//([0]=>10 [1]=>35 [2]=>50 [3]=>70 [4]=>80 [5]=>90 [6]=>100 [7]=>130 [8]=250)


// => array_multisort(array) Function 
// sort and array_multisort are same

$carbrands = ["volov", "bmw", "toyota", "mazda", "suzuki"];

array_multisort($cars);
echo "<pre>" . print_r($carbrands, true) . "</pre>";
// ([0]=>bmw [1]=>mazda [2]=>suzuki [3]=>toyota [4]=>volov) 

$luckynumbers = [10, 50, "80", 90, 35, "100", 130, "250", 70];
array_multisort($luckynumbers);
echo "<pre>" . print_r($luckynumbers, true) . "</pre>";
//([0]=>10 [1]=>35 [2]=>50 [3]=>70 [4]=>80 [5]=>90 [6]=>100 [7]=>130 [8]=250)


// => array_reverse(array) Function (z to a)

$vehicles = ["volov", "bmw", "toyota", "mazda", "suzuki"];
sort($vehicles);
echo "<pre>" . print_r(array_reverse($vehicles), true) . "</pre>";
//( [0] => volov [1] => toyota [2] => suzuki [3] => mazda [4] => bmw)

$winnumbers = [10, 50, "80", 90, 35, "100", 130, "250", 70];
array_multisort($winnumbers);
echo "<pre>" . print_r(array_reverse($winnumbers), true) . "</pre>";
// ([0] => 250 [1] => 130 [2] => 100 [3] => 90 [4] => 80 [5] => 70 [6] => 50 [7] => 35 [8] => 10)


// => array_pad(array,length,value) Function 

$colors = ["red","green"];
echo "<pre>" . print_r(array_pad($colors,5,"blue"), true) . "</pre>";
// ([0] => red [1] => green [2] => blue [3] => blue [4] => blue)


// => array_reduce(array,callback,initial) Function 

$nums = [10,"20","30"];

function calfun($total,$val){
    return $total += $val;
}

echo array_reduce($nums,"calfun",0);        //60

// => array_search(value,array) Function 

$myarrs = ["a","b","c","d","e"];
echo array_search("d",$myarrs);             //3 (index number)(case sensitive)

$myarrs = ["a"=>"red", "b"=>"green", "c"=>"violet", "d"=>"black", "e"=>"blue"];
echo array_search("green", $myarrs);             //b (index key)(case sensitive)


// => array_pop(array) Function 

$colors = ["red","green","blue"];
array_pop($colors);
echo "<pre>" . print_r($colors, true) . "</pre>";       //([0]=>red [1]=>green)


// => array_unshift(array,value1,value2,value3,...) Function 

$colors = ["red","green","blue"];
array_unshift($colors,"silver","violet");
echo "<pre>" . print_r($colors, true) . "</pre>";  // ([0]=>silver [1]=>violet [2]=>red [3]=>green [4]=>blue)

$colors = ["0"=>"red", "1"=>"green","2"=>"blue"];
array_unshift($colors, "silver", "violet");
echo "<pre>" . print_r($colors, true) . "</pre>";   // ([0]=>silver [1]=>violet [2]=>red [3]=>green [4]=>blue)

$colors = ["a" => "red", "b" => "green", "c" => "blue"];
array_unshift($colors, "silver", "violet");
echo "<pre>" . print_r($colors, true) . "</pre>";   // ([0]=>silver [1]=>violet [a]=>red [b]=>green [c]=>blue)


// => array_push(array,value1,value2,value3,...) Function 

$colors = ["red", "green", "blue"];
array_push($colors, "silver", "violet");
echo "<pre>" . print_r($colors, true) . "</pre>";  // ([0]=>red [1]=>green [2]=>blue [3]=>silver [4]=>violet )

$colors = ["0" => "red", "1" => "green", "2" => "blue"];
array_unshift($colors, "silver", "violet");
echo "<pre>" . print_r($colors, true) . "</pre>";   // ([0]=>red [1]=>green [2]=>blue [3]=>silver [4]=>violet )

$colors = ["a" => "red", "b" => "green", "c" => "blue"];
array_unshift($colors, "silver", "violet");
echo "<pre>" . print_r($colors, true) . "</pre>";   // ([a]=>red [b]=>green [c]=>blue [0]=>silver [1]=>violet )


// => array_slice(aray,offset/index) Function 
// => array_slice(aray,offset/index,length)
// => array_slice(aray,offset/index,length,preserve)

$candycolors = ["red","green","blue","yellow","pink"];
echo "<pre>" . print_r(array_slice($candycolors,0), true) . "</pre>";
// ( [0] => red [1] => green [2] => blue [3] => yellow [4] => pink ) 

echo "<pre>" . print_r(array_slice($candycolors, 2), true) . "</pre>";
// ( [0] => blue [1] => yellow [2] => pink ) 

echo "<pre>" . print_r(array_slice($candycolors, 0, 2), true) . "</pre>";
// ( [0] => red [1] => green ) 

echo "<pre>" . print_r(array_slice($candycolors, 2, 2), true) . "</pre>";
// ( [0] => blue [1] => yellow )

echo "<pre>" . print_r(array_slice($candycolors, 2, 5), true) . "</pre>";
// ( [0] => blue [1] => yellow [2] => pink ) 

echo "<pre>" . print_r(array_slice($candycolors, 2, 5, true), true) . "</pre>";
// ( [3] => blue [4] => yellow [5] => pink ) 

echo "<pre>" . print_r(array_slice($candycolors, 2, 5, false), true) . "</pre>";
// ( [0] => blue [1] => yellow [2] => pink ) 

?>