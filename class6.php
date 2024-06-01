<?php

//echo time();
// $dateString='2024-05-18 12:38:36';
// $timestamp=strtotime($dateString);
// echo $timestamp."<br>";

// $formattedDate=date("Y-m-d H:i:s",$timestamp);

// echo $formattedDate."<br>";
// $make_time=mktime(12,34,56,5,18,2024);
// echo$make_time."<br>";



// $starttime=mktime(0,0,0,5,1,2024);

// $endtime=mktime(0,0,0,5,22,2024);

// $diffInSecond=$endtime-$starttime;

// echo $diffInSecond."<br>";
// $diffIndays=$diffInSecond/(60*60*24);
// echo $diffIndays."<br>";

// $year=2024;
// $month=5;
// $day=22;

// $dateString=sprintf("%d-%d-%d",$year,$month,$day);
// echo $dateString."<br>";



date_default_timezone_set('Asia/Dhaka');

$year=date('Y');
$month=date('m');
$daysInMonth=date('t');

for($day=1; $day<=$daysInMonth;$day++){
      $dateString=sprintf("%d-%d-%d",$year,$month,$day);
      /*$timestamp=strtotime($dateString);
      // $dayName=date('l',$timestamp);
      echo $dayName."<br>";*/

      $formattedDate=date('D, F J/Y', strtotime($dateString));
      echo $formattedDate."<br>";


}