<?php

function displayWelcome(){
    echo "Welcome to my website";
}

displayWelcome();


function calculateAverage(){
    $num1 = 75;
    $num2 = 85;
    $num3 = 94;
    $average = ($num1 + $num2 + $num3) / 3;
    echo "The average of the three grades is: " . $average;
}

calculateAverage();


function GetGrade(){
    $avg = 84.6;
    if ($avg >= 90) {
        echo "A";
    } elseif ($avg >= 80) {
        echo "B";
    } elseif ($avg >= 70) {
        echo "C";
    } elseif ($avg >= 60) {
        echo "D";
    } else {
        echo "F";
    }
}

GetGrade();



$grade = "Student has passed with the grade B";
print_r($grade);

?>