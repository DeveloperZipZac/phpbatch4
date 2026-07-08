<?php

$string = "we are family";

// preg_match(pattern,string);      // (/,%,#,+) can use as delimeter

$result = preg_match("We are family",$string);  //error
$result = preg_match("/We are family/", $string);  //1 (true) //backward slash called delimeter
$result = preg_match("/mily/", $string);  //1 (true)
$result = preg_match("/We are Family/", $string);  //0 (false) //case sensitive
$result = preg_match("/are/", $string);  //1 (true)

$result = preg_match("/mily$/", $string);  //1 (true)
$result = preg_match("/are$/", $string);  //0 (false)
$result = preg_match("/family$/", $string);  //1 (true)
$result = preg_match("/Family$/", $string);  //0 (false)
$result = preg_match("/We$/", $string);  //0 (false)

$result = preg_match("/^mily/", $string);  //0 (false)
$result = preg_match("/^are/", $string);  //0 (false)
$result = preg_match("%^we are family%", $string);  //0 (false)
$result = preg_match("#^We#", $string);  //1 (true)

$result = preg_match("/^family$/", $string);  //0 (false)      //must start with family and end with family
$result = preg_match("/^$/", $string);  //0 (false)            //must be empty

$result = preg_match("/^we/", $string);  //0 (false)
$result = preg_match("/^we/i", $string);  //1 (true)            //won't be case sensitive anymore

$result = preg_match("/[b-d]/", $string);  //0 (false)          // b c d are not included
$result = preg_match("/[a-z]/", $string);  //1 (true)
$result = preg_match("/[A-Z]/", $string);  //1 (true)
$result = preg_match("/[0-4]/", $string);  //0 (false)

$string = "my lucky number is 567";

$result = preg_match("/[0-4]/", $string);  //0 (false)
$result = preg_match("/[5-9]/", $string);  //1 (true)
$result = preg_match("/[a-c]/", $string);  //1 (true)

$result = preg_match("/[A-Z]|[a-z]/", $string);  //1 (true)

$result = preg_match("/^[a-z]/", $string);  //1 (true)
$result = preg_match("/^[A-Z]/", $string);  //0 (false)

$result = preg_match("/[a-z]$/", $string);  //0 (false)
$result = preg_match("/[5-9]$/", $string);  //1 (true)
$result = preg_match("/^[5-9]/", $string);  //0 (false)

$result = preg_match("/[^a-z]/", $string);  //1 (true)  //bcoz it means that "not a to z include" so true
$result = preg_match("/[^0-4]/", $string);  //1 (true) 







echo $result;





?>

<!-- 
    $ must be in end (case sensitive)   
    ^ caret or circumflex , shift+6 , must be start (case sensitive)
    i no case sensitive
    [] range (example a-z A-Z 0-5 0-9)
    m+ must contain at least one m and more
    m* can contain m or not and more
    m? can contain m or not and more
    m{nth} contain place m as per nth and more
    m{nth,nth} contain place m as per nth and more
    m{nth,} contain place m as per nth and more

    \s space
    \d digit
    \D no digit
    \w any word [a-z][A-Z][0-9]
    \W any word @#$...
    . any character
    () this
    + must
    * can

    p(hp)* can be contain hp 
    p(hp)+ must be contain hp

    [[:space:]] space characters
    [[:alpha:]] alphabetic
    [[:digit:]] digit
    [[:alnum:]] alphanumeric
    [[:punct:]] puncuation
    [[:lower:]] lower-case
    [[:upper:]] upper-case

 
    
-->