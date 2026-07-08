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

function mycolur($color){
    if($color !== "red"){
        throw new Exception("I hate $color color");
    }

    return "Yeah!, my fav color is $color";
}

try{
    echo mycolur("black");
}catch(Exception $e){
    echo "You should no try with this color";
}

try{
    echo mycolur("black");
}catch(Exception $e){
    echo $e->getMessage();
}

try{
    echo mycolur("red");
} catch (Exception $e) {
    echo $e->getMessage();
}


function mypower($base, $power)
{

    if ($power > 5) {
        // Exception("message")
        throw new Exception("We are not allowed over $power");      //make system error
    }

    $result = pow($base, $power);
    return $result;
}

// echo mypower(2, 6);

try{
    echo mypower(2,6);
}catch(Exception $e){
    echo "You Should not over.". $e->getMessage();
}


// => try..catch..finally Statement 

// try{
//     code to be executed
// }catch(Exception $e){
//     code to exception is catched
// }finally
//     code that always runs regardless of weather an exception was catch or not! 
// }

function mycalculate($base, $power)
{

    if ($power > 3) {
        // Exception("message")
        throw new Exception("We are not allowed over $power");      //make system error
    }

    $result = pow($base, $power);
    return $result;
}

// echo mycalculate(2, 4);

try{
    echo mycalculate(2,4);
}catch(Exception $e){
    echo "You should not over . ".$e->getMessage();
}finally{
    echo "Hey there!";
}







?>