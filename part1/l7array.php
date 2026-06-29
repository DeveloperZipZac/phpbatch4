<?php

// =>Arrays
// (i) Indexed Array (Manual Array)
// (ii) Associative Array
// (iii) Multidimensional Array

// (i) Indexed Array (Manual Array)

$names = array("aung aung", "kyaw kyaw", "zaw zaw", "sai sai");
// echo $names;    error
// pring $names;   error

var_dump($names);  
print_r($names,false);

echo count ($names);   //4

// ===

$colors = ["red","green","blue","yellow"];
// echo $colors;   error

echo count($colors);   //4
print_r($colors,false);
echo "<pre>".print_r($colors,true)."</pre>";

$colors[4] = "black";
$colors[5] = "white";
$colors[6] = "orange";
$colors[0] = "pink";     //overwrite

echo "my fav color is ".$colors[4];

// ==========

// (ii) Associative Array 

$news = array("pone"=>"this is post one", "ptwo"=>"this is post two", "pthree"=>"this is post three");
echo count($news);   //3
var_dump($news);

$medias = [
    "pone" => "this is post one",
    "ptwo" => "this is post two",
    "pthree" => "this is post three"
];
echo count($medias);   //3
var_dump($medias);

$medias["pfour"] = "this is post four";
$medias["pone"] = "this is post one update";   //overwrite

echo "my fav post is ".$medias["ptwo"];

// ==========

// (iii) Multidimensional Array (Arrays contains one or more arrays)

$paints = array(
    array("red","green","blue"),
    array("yellow","black","white"),
    array("orange","pink","gray")
);
echo count($paints);   //3
var_dump($paints);


$maincolors = [
    ["red","green","blue"],
    ["yellow","black","white"],
    ["orange","pink","gray"]
];
echo count($maincolors);   //3
var_dump($maincolors);

echo $maincolors[0][1];   //green  
echo $maincolors[1][2];   //white

$vippersons = [
    ["name"=>"aung aung", "age"=>25],
    ["name"=>"kyaw kyaw", "age"=>30],
    ["name"=>"zaw zaw", "age"=>35]
];

echo $vippersons[0]["name"];   //aung aung 


?>