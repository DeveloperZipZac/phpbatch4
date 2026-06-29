<?php

$fullname = "U Kyaw Kyaw";
$job = "Developer";

echo $fullname;
print $job;


echo "$fullname";    //U Kyaw Kyaw
print '$job';        // $job (single quote don't know variable)


echo "My name is $fullname";       //My name is U Kyaw Kyaw
echo 'My name is $fullname';       //My name is $fullname
echo "My name is ${fullname}";     //My name is $fullname
echo "My name is {$fullname}";     //My name is U Kyaw Kyaw
echo `My name is {$fullname}`;     //error


echo "He\'s my father, he is a $job";    // He's my father, he is a Developer
echo "He's my fater, he is a \$job";     // He's my father, he is a $job
echo 'He\'s my father, he is a $job';    // He's my father, he is a $job
echo "He's my father, he is a /${job}";  // He's my father, he is a $job


// $gender = echo "female";  //error
$nation = print "burma";  //burma

// Concat(.)
$firstname = "Kyaw Kyaw";
$lastname = "Oo";

echo $firstname.$lastname;
echo $firstname.' '.$lastname;

// Comments()

// Single line comment
#Single line comment

/* Multi line comment
comment1
comment2 */


?>