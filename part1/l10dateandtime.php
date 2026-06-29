<?php

// 1 jan 1970 UTC

date_default_timezone_set("Asia/Yangon");

$getdate = getdate();
// echo $getdate     //error
var_dump($getdate);
echo "<pre>".print_r($getdate,true)."</pre>";

echo "This is seconds = ".$getdate["seconds"];
echo "This is minutes = ".$getdate["minutes"];
echo "This is hours = ".$getdate["hours"];

echo "This is weekday = ".$getdate["weekday"];  //Monday
echo "This is wday = ".$getdate["wday"];        //0=sun 1=mon 2=tue
echo "This is yday = ".$getdate["yday"];        //day of the year

echo "This is month = ".$getdate["month"];      //June
echo "This is mon = ".$getdate["mon"];          //number of month
echo "This is mday = ".$getdate["mday"];        //day of the month

echo "This is year = ".$getdate["year"];        //2026

echo "This is 0 = " . $getdate["0"];            //miliseconds start from 1970 1 Jan
$time = time();
echo "This is 0 = ".$time;                      //miliseconds start from 1970 1 Jan

// DATE/TIME Format

// https: www.php.net/manual/en/timezones.asia.php

// date(format,timestampe);

$date = date("a",$time);
echo "This is format a ".$date;     //am pm

$date = date("A",$time);
echo "This is format A ".$date;     //AM PM

$date = date("d", $time);
echo "This is format d " . $date;   //29  //day of the month

$date = date("D", $time);
echo "This is format D " . $date;   //Mon

$date = date("F", $time);
echo "This is format F " . $date;   //Jun

$date = date("g", $time);
echo "This is format g " . $date;   //12   // hours no leading zero 12hr format

$date = date("G", $time);
echo "This is format G " . $date;   //12   // hours no leading zero 24hr format

$date = date("h", $time);
echo "This is format h " . $date;   //12   // hours leading zero 12hr format

$date = date("H", $time);
echo "This is format H " . $date;   //12   // hours leading zero 24hr format

$date = date("i", $time);
echo "This is format i " . $date;   //29   // minute

$date = date("j", $time);
echo "This is format j " . $date;   //day of month no leading zero

$date = date("l", $time);
echo "This is format l " . $date;   //Monday

$date = date("L", $time);
echo "This is format L " . $date;   //0  //Leap Year(1=true, 0=false)

$date = date("m", $time);
echo "This is format m " . $date;   //06   // month of the year leading zero

$date = date("M", $time);
echo "This is format M " . $date;   //Jun

$date = date("n", $time);
echo "This is format n " . $date;   //6   // month of the year no leading zero

$date = date("r", $time);
echo "This is format r " . $date;   //Mon, 29 Jun 2026 12:35:01 +0630

$date = date("s", $time);
echo "This is format s " . $date;   //01 seconds

$date = date("U", $time);
echo "This is format U " . $date;   //miliseconds

$date = date("y", $time);
echo "This is format y " . $date;   //26 year short code

$date = date("Y", $time);
echo "This is format Y " . $date;   //2026

$date = date("z", $time);
echo "This is format z " . $date;   //day of the year


?>