<?php

$sub_1 = $_GET['m1'];
$sub_2 = $_GET['m2'];
$sub_3 = $_GET['m3'];
$sub_4 = $_GET['m4'];
$sub_5 = $_GET['m5'];

$total = NULL;
$average = NULL;
$percentage = NULL;
$grade = NULL;

$total = $sub_1 + $sub_2 + $sub_3 + $sub_4 + $sub_5;
$average = $total / 5.0;
$percentage = ($total / 500.0) * 100;

if ($average >= 90)
    $grade = "A";
else if ($average >= 80 && $average < 90)
    $grade = "B";
else if ($average >= 70 && $average < 80)
    $grade = "C";
else if ($average >= 60 && $average < 70)
    $grade = "D";
else
    $grade = "E";

// It will print the final output
echo "The Total marks   = " . $total . "\n"."<br>";
echo "The Average marks = " . $average . "\n"."<br>";
echo "The Percentage    = " . $percentage . "%\n"."<br>";
echo "The Grade         = '" . $grade . "'\n"."<br>";

?>