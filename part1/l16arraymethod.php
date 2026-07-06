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


// => sizeof(array) Function 

$colors = ["red", "green", "blue", "yellow", "pink"];
echo sizeof($colors);


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


// => array_sum(array) Function 
$nums = [10,20,30,40,50];
echo array_sum($nums);                      //150

$nums = [10, 20, 30, "40", -50];
echo array_sum($nums);                      //50

$nums = ["a"=>10.2, "b"=>20.3, "c"=>30.3];
echo array_sum($nums);                      //60.8


// => array_search(value,array) Function 

$myarrs = ["a","b","c","d","e"];
echo array_search("d",$myarrs);             //3 (index number)(case sensitive)

$myarrs = ["a"=>"red", "b"=>"green", "c"=>"violet", "d"=>"black", "e"=>"blue"];
echo array_search("green", $myarrs);             //b (index key)(case sensitive)


// => array_pop(array) Function 

$colors = ["red","green","blue"];
array_pop($colors);
echo "<pre>" . print_r($colors, true) . "</pre>";       //([0]=>red [1]=>green)


// => array_shift() Function
$colors = ["red", "green", "blue"];
array_shift($colors);
echo "<pre>" . print_r($colors, true) . "</pre>";       //([0]=>green [1]=>blue)

$colors = ["a" => "red", "b" => "green", "c" => "blue", "d"=>"violet"];
array_shift($colors);
echo "<pre>" . print_r($colors, true) . "</pre>";   
// ( [0]=>green [1]=>blue [2]=>violet )


// => unset(array[index]) Function and array_values(array)
// (index number will skip when using only unset)
// (using with array_values() will arrange the index)

$colors = ["red","green","blue"];

// unset($colors[1]);
// echo "<pre>" . print_r($colors, true) . "</pre>";
//([0]=>red [2]=>blue)

unset($colors[1]);
echo "<pre>" . print_r(array_values($colors), true) . "</pre>";
//([0]=>red [1]=>blue)

$colors = ["a" => "red", "b" => "green", "c" => "blue", "d"=>"violet", "e"=>"pink"];
echo "<pre>" . print_r(array_values($colors), true) . "</pre>";
//([0]=>red [1]=>green [2]=>blue [3]=>violet [4]=>pink)
// associative array will change to index array when using array_values

$colors = ["a" => "red", "b" => "green", "c" => "blue", "d" => "violet", "e" => "pink"];
unset($colors["c"]);
echo "<pre>" . print_r(array_values($colors), true) . "</pre>";
//([0]=>red [1]=>green [2]=>violet [3]=>pink)


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


// => array_splice(array,index) Function 
// => array_splice(array,index,length) 
// => array_splice(array,index,length,array) 

$shirtcolors = ["red","green","blue","yellow","pink"];

echo "<pre>" . print_r(array_splice($shirtcolors, 0), true) . "</pre>";
// ( [1]=>red [2]=>green [3]=>blue [4]=>yellow [5]=>pink )

echo "<pre>" . print_r(array_splice($shirtcolors, 2), true) . "</pre>";
// ( [0]=>blue [1]=>yellow [2]=>pink )

echo "<pre>" . print_r(array_splice($shirtcolors, 0, 2), true) . "</pre>";
// ( [1]=>red [2]=>green )

echo "<pre>" . print_r(array_splice($shirtcolors, 2, 2), true) . "</pre>";
// ( [0]=>blue [1]=>yellow )

echo "<pre>" . print_r(array_splice($shirtcolors, 2, 5), true) . "</pre>";
// ( [0]=>blue [1]=>yellow [2]=>pink )


$males = ["aung aung","maung maung","kyaw kyaw","zaw zaw","naung naung"];
$females = ["su su","yu yu","nu nu"];

// array_splice($males, 0, 2, $females);
// echo "<pre>".print_r($males,true)."</pre>";
// ( [0]=>su su [1]=>yu yu [2]=>nu nu [3]=>kyaw kyaw [4]=>zaw zaw [5]=>naung naung )

// array_splice($males, 0, 3, $females);
// echo "<pre>".print_r($males,true)."</pre>";
// ( [0]=>su su [1]=>yu yu [2]=>nu nu [3]=>zaw zaw [4]=>naung naung )

// array_splice($males, 1, 3, $females);
// echo "<pre>".print_r($males,true)."</pre>";
// ( [0]=>aung aung [1]=>su su [2]=>yu yu [3]=>nu nu [4]=>naung naung )


// =>array_unique() Function
// Note :: show unique value but index number will be skip

$num = [10,20,30,50,10,30,60,70,80,10];
echo "<pre>".print_r(array_unique($num),true)."</pre>";
// ( [0]=>10 [1]=>20 [2]=>30 [3]=>50 [6]=>60 [7]=>70 [8]=>80 )

$colors = ["a"=>"red", "b"=>"green", "c"=>"blue", "d"=>"red", "e"=>"blue"];
echo "<pre>" . print_r(array_unique($colors), true) . "</pre>";
// ( [a]=>red [b]=>green [c]=>blue )


// => array_walk(array,callbackfunction) Function 
// => array_walk(array,callbackfunction,parameter) 

$colors = ["a"=>"red","b"=>"green","c"=>"blue","d"=>"pink","e"=>"violet"];

function myfunone($val,$key){
    echo "Key is $key and Value is $val";
}

array_walk($colors,"myfunone");
// Key is a and Value is red Key is b and Value is green ....

function myfuntwo($val,$key,$p){
    echo "Key is = $key and Value is = $val $p.";
}

array_walk($colors,"myfuntwo","colour");
//Key is = a and Value is = red colour. Key is = b and Value is = green colour. ...


function myfunthree($val){
    $val = "orange";
}

array_walk($colors,"myfunthree");
echo "<pre>".print_r($colors,true)."</pre>";
// ( [a]=>red [b]=>green [c]=>blue [d]=>pink [e]=>violet )


function myfunfour(&$val)
{
    $val = "orange";
}

array_walk($colors, "myfunthree");
echo "<pre>" . print_r($colors, true) . "</pre>";
// ( [a]=>orange [b]=>orange [c]=>orange [d]=>orange [e]=>orange )


// => compact(var1,var2,var3,...) Function 

$name = "Aung Aung";
$age = 25;
$city = "Yangon";

$result = compact("name","age","city");
echo "<pre>".print_r($result,true)."</pre>";
//([name]=>Aung Aung [age]=>25 [city]=>Yangon)     


// => range(start,end) Function 
// => range(start,end,step)

$num1 = range(0,5);
echo "<pre>" . print_r($num1, true) . "</pre>";
// ([0]=>0 [1]=>1 [2]=>2 [3]=>3 [4]=>4 [5]=>5)

$num2 = range(0, 50, 10);
echo "<pre>" . print_r($num2, true) . "</pre>";
// ([0]=>0 [1]=>10 [2]=>20 [3]=>30 [4]=>40 [5]=>50)

$char = range("a", "k");
echo "<pre>" . print_r($char, true) . "</pre>";
// ([0]=>a [1]=>b [2]=>c [3]=>d [4]=>e [5]=>f .....)

$char2 = range("k", "g");
echo "<pre>" . print_r($char2, true) . "</pre>";
// ([0]=>k [1]=>j [2]=>c [3]=>i [4]=>h [5]=>k .....)
// can reverse


// => current(), pos(), next(), prev(), reset() Function 

$students = ["aung aung","maung maung","zaw zaw","tun tun","kyaw kyaw"];
echo current($students);            //aung aung         (current)
echo pos($students);                //aung aung         (position)

echo next($students);               //maung maung       (next)
echo current($students);            //maung maung

echo prev($students);               //aung aung         (previous)
echo current($students);            //aung aung 

echo end($students);                //kyaw kyaw         (end)
echo current($students);            //kyaw kyaw         (last current is kyaw kyaw)

echo reset($students);              //aung aung         (reset)


// => serialize(), unserialize() Function 
// use for sending frontend to backend with serial 

$staffs = [
    ["aung aung","maung maung","kyaw kyaw","tun tun","zaw zaw"],
    ["su su","yu yu","nu nu","aye aye","hla hla"]
];

$serialdatas = serialize($staffs);
echo "<pre>" . print_r($serialdatas, true) . "</pre>";      //can get like object
var_dump($serialdatas);             //can get with string

$unserialdatas = unserialize($serialdatas);
echo "<pre>" . print_r($unserialdatas, true) . "</pre>";    //can get with array by unserializing







?>