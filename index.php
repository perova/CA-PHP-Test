
<?php
include "Test.php";
echo "1.";
$myTest = new Test();

echo "<br>2." . $myTest->dayToday() . "<br>";

echo $myTest->storeToCookie();

echo "3." . $_COOKIE['test_today'] ."<br>";

echo "4." . $myTest->isEven(8) . "<br>";

echo "5." . $myTest->setLanguage("Poland") . "<br>";

echo "6.<br>";

echo "7. nepadarytas <br>";

$myTest->storeRandom();

$str = "this is a very simple sentence";
echo "<br>8." . $myTest->glueText($str) ."<br>9.";

echo $myTest->textGen();


