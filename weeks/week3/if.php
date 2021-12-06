<?php

// if statement

$temp = 90;
if($temp <= 90) {
    echo 'not that hot';
} else {
    echo 'It\'s a scorcher';
}

echo '<br>';
// we are going to extend the if statement, with ifelse

$temp = 87;
if($temp <= 78) {
    echo 'It is livable';
} elseif($temp <= 85) {
    echo 'It\'s getting hotter';
} else {
    echo 'It\'s really hot';
}

// fun with logic
// if sales are over 800000, I will make 10% bonus of my base salary
// if sales are greater or equal to 600000, I will make a benus of 5%
echo '<br>';
$sales = 700000;
$salary = 200000;
if($sales >= 800000) {
    $salary *= 1.10;
    echo $salary;
} elseif($sales >= 600000) {
    $salary *= 1.05;
    echo $salary;
} else {
    echo $salary;
}