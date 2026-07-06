<?php

// => abs(number) Function 

echo abs(32);       //32
echo abs(-32);      //32
echo abs(32.75);    //32.75
echo abs(-32.75);   //32.75


// => round(number) Function 
// => round(number,percision)

echo round(32.64);      //33
echo round(32.54);      //33
echo round(32.44);      //32
echo round(-32.64);     //-33
echo round(32.64325);   //33
echo round(32.6432,2);  //32.64


// => ceil(number) Function 

echo ceil(32.64);      //33
echo ceil(32.54);      //33
echo ceil(32.44);      //33
echo ceil(-32.64);     //-32
echo ceil(32.64325);   //33


// => floor(number) Function 

echo floor(32.64);      //32
echo floor(32.54);      //32
echo floor(32.44);      //32
echo floor(-32.64);     //-33
echo floor(32.64325);   //32

// => max(number) Function 

echo max(2,4,20,6,8,10);                     //20
echo max(2,4,20,6,-40,8,10);                 //20
echo max(2, 4, "100", 20, 6, -40, 8, 10);    //100
echo max([2, 4, 20, 6, -40, 8, 10]);         //100


// => min(number) Function 

echo min(2, 4, 20, 6, 8, 10);                     //2
echo min(2, 4, 20, 6, -40, 8, 10);                //-40
echo min(2, 4, "100", 20, 6, -40, 8, 10);         //-40
echo min([2, 4, 20, 6, -40, 8, 10]);              //-40


// => pow(base,exponent) Function

echo pow(2,4);                  //16
echo pow(3,4);                  //81


// => log(number,base) Function 

echo log(10,2);                  //3.3219280948874
echo log(20,2);                  //4.3219280948874
echo log(80,3);                  //3.9886924350038


// => sqrt(number) Function 

echo sqrt(4);                   //2
echo sqrt(9);                   //3
echo sqrt(0.81);                //0.9
echo sqrt(-4);                  //NAN


// => rand() Function 

echo rand();                    //559708
echo rand();                    //2027890


// => getrandmax();  (get maximum number for random fixed)

echo getrandmax();              //2147483647


// => rand(min,max) Function 

echo rand(1000,10000);          //2334

$users = ["aung aung","kyaw kyaw","zaw zaw","nu nu","su su","hla hla"];
echo $users[rand(0,5)];            //kyaw kyaw
echo $users[rand(0,5)];            //su su

 
// => microtime() Function (a very short interval of time, as 0.01 milion of a second)
// => microtime(true)
// Note :: use in photo name to be unique like that

echo microtime();       //0.28832500 1713800334
echo microtime(true);   //1713800482.7046


// => uniqid() Function 

echo uniqid();           //6a4bbcda8f2ed


// => number_format(number,decimals) Function 
// => number_format(number,decimals,decimal-separator,thousands-separator)

echo number_format(1500,2);         //1,500.00
echo number_format(1500,3);         //1,500.000
echo number_format(1250000,3);      //1,250,000.000
echo number_format(1250000, 3,".",",");      //1,250,000.000
echo number_format(1250000, 3, ",", ".");      //1.250.000,000
echo number_format(1250000, 0, ".", "-");      //1-250-000








?>