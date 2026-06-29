<?php

// => PHP Looping

// for 
// foreach
// while
// do..while

$colorsones = ["red","green","blue","yellow","black","white"];
echo count($colorsones);   //6
var_dump($colorsones);

$colorsoneskey = array_keys($colorsones);
// echo $colorsoneskey;   //error
var_dump($colorsoneskey);  //[0,1,2,3,4,5]

for($i=0; $i < count($colorsones); $i++){
    // echo $i; //0 to 6

    // echo "This is indexed array or manual array by for loop = index key is ".$i." and value is = ".$colorsones[$i]."<br>";

    echo "This is indexed array or manual array by for loop = index key is $colorsoneskey[$i] and value is = $colorsones[$i]<br>";
}

foreach($colorsones as $colorone){
    echo "This is indexed array or manual array by foreach loop". $colorone;
}

foreach($colorsones as $key=>$colorone){
    echo "This is indexed array or manual array by for each = index key is ".$key . " and value is ". $colorone;
}

$x = 0;
while($x < count($colorsones)){
    // echo $colorsones[$x];
    // $x++;

    // echo "This is indexed array or manual array by while = index key is ".$x. " and value is ". $colorsones[$x];
    echo "This is indexed array or manual array by while = index key is ".$colorsoneskey[$x]. " and value is ". $colorsones[$x];
    $x++;
}


$y = 0;
do{
    // echo "This is indexed array or manual array by while = index key is ".$x. " and value is ". $colorsones[$x];
    echo "This is indexed array or manual array by while = index key is " . $colorsoneskey[$x] . " and value is " . $colorsones[$x];
    $x++;
}while($y < count($colorsones));

?>