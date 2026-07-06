<?php

function mycolor($color){

    if($color !== "red"){
        throw new Exception("I hate $color color");         //make system error 
    }

    return "Yeah! my fav color is $color";
}

echo mycolor("red");

function mynum($base,$power){

    if($power > 3){
                // Exception("message")
        throw new Exception("We are not allowed over $power");      //make system error
    }

    $result = pow($base,$power);
    return $result;
}

echo mynum(2,4);


// => try..catch Statement 

// try{
//     code to be executed
// }catch(Exception $e){
//     code to exception is catched
// }


// => try..catch..finally Statement 

// try{
//     code to be executed
// }catch(Exception $e){
//     code to exception is catched
// }finally
//     code that always runs regardless of weather an exception was catch or not! 
// }







?>