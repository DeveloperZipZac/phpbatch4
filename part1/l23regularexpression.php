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

$result = preg_match("/[A-Z,a-z]/", $string);  //1 (true)
$result = preg_match("/[A-Z]|[a-z]/", $string);  //1 (true)

$result = preg_match("/^[a-z]/", $string);  //1 (true)
$result = preg_match("/^[A-Z]/", $string);  //0 (false)

$result = preg_match("/[a-z]$/", $string);  //0 (false)
$result = preg_match("/[5-9]$/", $string);  //1 (true)
$result = preg_match("/^[5-9]/", $string);  //0 (false)

$result = preg_match("/[^a-z]/", $string);  //1 (true)  //bcoz it means that "not a to z include" so true
$result = preg_match("/[^0-4]/", $string);  //1 (true) 

$result = preg_match("/m+/", $string);  //1 (true) 
$result = preg_match("/b+/", $string);  //1 (true) 
$result = preg_match("/a+/", $string);  //0 (false) 

$result = preg_match("/a*/", $string);  //1 (true) 

$result = preg_match("/a?/", $string);  //1 (true) 

$string = "admin@gmail.com";

$result = preg_match("/m{1}/", $string);  //1 (true) 
$result = preg_match("/m{2}/", $string);  //0 (false) 
$result = preg_match("/m{3}/", $string);  //0 (false)  //should be in same place likes(admmmin@gmail.com)

$string = "adminn@gmail.com";

$result = preg_match("/n{2,3}/", $string);  //1 (true) 
$result = preg_match("/n{3,4}/", $string);  //0 (false) 

$result = preg_match("/n{\s}/", $string);  //0 (false) 

$string = "V8 Engine";

$result = preg_match("/\s/", $string);  //1 (true) 

$result = preg_match("/\d/", $string);  //1 (true) 
$result = preg_match("/\D/", $string);  //1 (true)    //include no digit ?

$result = preg_match("/\W/", $string);  //1 (true) 
$result = preg_match("/\w/", $string);  //1 (true)  

$string = "528";

$result = preg_match("/\d/", $string);  //1 (true)
$result = preg_match("/\D/", $string);  //0 (false)
$result = preg_match("/\w/", $string);  //1 (true)
$result = preg_match("/\W/", $string);  //0 (false)

$string = "admin@gmail.com";

$result = preg_match("/a/", $string);  //1 (true)
$result = preg_match("/am/", $string);  //0 (false)
$result = preg_match("/a\wm/", $string);  //1 (true)
$result = preg_match("/a\w{1}m/", $string);  //1 (true)      //must contain one word between a and m
$result = preg_match("/a\w{2}m/", $string);  //0 (false)
$result = preg_match("/a\w{1,}m/", $string);  //1 (true)    //must contain at least one or as much as you want

$result = preg_match("/a.m/", $string);  //1 (true)
$result = preg_match("/a..m/", $string);  //0 (false)

$string = "PHP";
$result = preg_match("/.{2}/", $string);  //1 (true)

$string = "php";
$result = preg_match("/php/", $string);  //1 (true)
$result = preg_match("/hp/", $string);  //1 (true)
$result = preg_match("/HP/i", $string);  //1 (true)

$result = preg_match("/p(hp)*/", $string);  //1 (true)
$result = preg_match("/p(aa)*/", $string);  //1 (true)

$result = preg_match("/p(hp)+/", $string);  //1 (true)
$result = preg_match("/p(aa)+/", $string);  //0 (false)

$string = "Vv";

$result = preg_match("/.{2}/", $string);  //1 (true)

$result = preg_match("/^.{2}$/", $string);  //1 (true)


$string = "Welcome to our <i>programming class</i>";

$result = preg_match("/<i>\w</i>/", $string);  //0 (false)
$result = preg_match("/<i>\w<\/i>/", $string);  //0 (false) //bcoz of space
$result = preg_match("/<i>\W<\/i>/", $string);  //1 (true)
$result = preg_match("/<i>.<\/i>/", $string);  //0 (false)
$result = preg_match("/<i>.*<\/i>/", $string);  //1 (true)

$string = "admin@gmail.com";
$result = preg_match("/^[a-z,A-Z]+@[a-z]+\.\w{3}/", $string);  //1 (true)  //can check email address or not

//preg_replace(pattern,replacement,string); 

$string = "i love php";

$result = preg_replace('/php/','javascript',$string);    //i love javascript
$result = preg_replace('/PHP/', 'javascript', $string);    //i love php
$result = preg_replace('/PHP/i', 'javascript', $string);    //i love javascript

$result = preg_replace('/\s/i', "", $string);    //ilovephp

// Bracket Expressions

$string = "admin123@gmail .com";

$result = preg_replace('/[[:space:]]/',"",$string); //admin123@gmail.com
$result = preg_replace('/[[:space:]]/', "x", $string); //admin123@gmailx.com

$result = preg_replace('/[[:alpha:]]/', "x", $string); //xxxxx123@xxxxx .xxx

$result = preg_replace('/[[:digit:]]/', "x", $string); //adminxxx@gmail .com

$result = preg_replace('/[[:alnum:]]/', "x", $string); //xxxxxxxx@xxxxx .xxx

$result = preg_replace('/[[:punct:]]/', "x", $string); //admin123xgmail xcom

$string = "Adming123@gmail .com";

$result = preg_replace('/[[:lower:]]/', "x", $string); //Axxxxx123@xxxxx .xxx 
$result = preg_replace('/[[:upper:]]/', "x", $string); //xdming123@gmail .com


$string = "Are you ready to learn PHP Framework";

$result = preg_replace(["/PHP/","/framework/"],["Javascript","libraries"],$string);
// Are you ready to learn Javascript Framework

$result = preg_replace(["/PHP/", "/framework/i"], ["Javascript", "libraries"], $string);
// Are you ready to learn Javascript libraries

$string = "My lucky number is 007 but i got ticket number 5700";

$result = preg_replace("/[0-9]/", "x", $string);
//My lucky number is xxx but i got ticket number xxxx

$result = preg_replace("/[0-9]+/", "x", $string);
//My lucky number is x but i got ticket number x

echo $result;

                        // no limit = 0 (or) NULL 
//preg_split(pattern,string,limit,flags);

$string = "My lucky number is 007";

$result = preg_split("/\s/",$string);

echo $result;           //error, array to string conversion

echo "<pre>".print_r($result,true)."</pre>";
// <pre>Array ([0]=>My [1]=>lucky [2]=>number [3]=>is [4]=>007)</pre>

echo $result[0];        //My
echo $result[1];        //lucky


$result = preg_split("/\s/", $string,2);

echo "<pre>" . print_r($result, true) . "</pre>";
// <pre>Array ([0]=>My [1]=>lucky number is 007)</pre>

$result = preg_split("/\s/", $string, 3);

echo "<pre>" . print_r($result, true) . "</pre>";
// <pre>Array ([0]=>My [1]=>lucky [2]=>number is 007)</pre>


$result = preg_split("//",$string,0);
// <pre>Array ([0]=>  [1]=>M [2]=>y ...........</pre>   //free room with index 0 and last index 

$result = preg_split("//", $string, 0, PREG_SPLIT_NO_EMPTY);
// <pre>Array ([0]=>M  [1]=>y [2]=>  ...........</pre> 


//pret_quote(string,delimiter);     //describe quote symbol with \

$string = "He\'s my father,do yu know him ?";

$result = preg_quote($string);      //He\\'s my father,do you know him \?

$result = preg_quote($string,"o");      //He\\'s my father,d\o y\ou kn\ow him \?

echo $result;


//preg_match_all(pattern,string,match/return,flags);

$string = "Winning numbers are 227-000 & 002-777 , but my ticket number is 007-222";

preg_match_all("/\d+-\d+/",$string,$abc,PREG_SET_ORDER);
// echo $abc;        //array to string conversion

echo "<pre>".print_r($abc,true)."</pre>";
//<pre>Array([0]=>Array([0]=> 227-000) [1]=>Array([0]=>002-777) [2]=>Array([0]=>007-222))</pre>


preg_match_all("/\d+-\d+/", $string, $abc, PREG_PATTERN_ORDER);
echo "<pre>" . print_r($abc, true) . "</pre>";
//<pre>([0]=>Array([0]=>227-000 [1]=>002-777 [2]=>007-222))</pre>


// Lookahead & Lookbehind
// (?=) positive lookahead (or) regex lookahead = right hand side
// (?<=) positive lookbehind (or) regex lookbehind = left hand side


// (?!) negative lookahead (or) regex lookahead
// (?<!) negative lookbehind (or) regex lookbehind






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
    \W any word including @#$... (not include digit)
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