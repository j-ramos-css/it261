<?php // functions

function sayHello() {
    echo "This is my hello content!";
}

sayHello();


echo '<br>';

function sayHello2($name) {
    echo 'Hello' .$name.'';
}

sayHello2('Julio');
echo '<br>';
sayHello2('Olga');
echo '<br>';
sayHello2('Kayla');
echo '<br>';
sayHello2('Bob');

echo '<br>';

function sayHello3($name, $age) {
    echo 'My name is '.$name.' and I am '.$age.' years old!';
}

sayHello3('Jamie', 30);
echo '<br>';
sayHello3('Olga', 19);
echo '<br>';
sayHello3('Jim', 39);
echo '<br>';
sayHello3('Callaway', 23);
echo '<br>';

function cube($n) {
    $cubing = $n * $n * $n;
    echo $cubing;
}

cube(5);

echo '<br>';

function celcius_converter($temp) {
    $far = ($temp * 9/5) + 32;
    return $far;
}

$far = celcius_converter(40);
echo ''.$far.' degrees';

echo '<br>';

function area_volume($value1, $value2, $value3) {
    $area = $value1 * $value2;
    $volume = $value1 * $value2 * $value3;
    return array($area, $volume);
}

//$my_return = area_volume(10, 5, 10);
//echo '<b>Area :</b> '.$my_return[0].'<br>';
//echo '<b>Volume :</b> '.$my_return[1].'<br>';

list($my_area, $my_volume) = area_volume(12, 10, 6);
echo '<b>Area</b> '.$my_area.'';
echo '<b>Area</b> '.$my_volume.'';