<?php 

$hrString = $_POST['hr']; 
$minString = $_POST['min']; 
$secString = $_POST['sec'];

$month = $_POST['month'];  
$day = $_POST['day']; 
$year = $_POST['year'];

$hr = date('H');
$min = date('i');
$sec = date('s');

$month = date('m');
$day = date('d');
$year = date('Y'); 
 
 
 
//$time = date('His');
//$date = date('Ymd');

echo "$hr =" . $hrString;
echo "$min =" . $minString;
echo "$sec =" . $secString;
 
echo "$month =" . $monthString; 
echo "$day =" . $dayString; 
echo "$year =" . $yearString; 

?>

