<?php
// PHP variables start with $
$num_one = 1;
$num_two = 2;
$num_three = 3;


// ##### Numbers #####

// var_dump shows type of the input;
/*var_dump($num_one);
var_dump(1);
var_dump("1");

var_dump($num_one + $num_two - $num-three);*/

$distance_home = 1.2;
$distance_work = 2.5;

var_dump($distance_home + $distance_work);

$a = 5;
$b = 10;

var_dump($a * $b);
var_dump($a / $b);

$a++;
var_dump($a);

$a += 5;
var_dump($a);

// #### Strings ####

$name = 'Adrian';
$string_single_quote = 'Hello $name!'; // Returns Hello $name
$string_double_quote = "Hello $name!"; // returns Hell Adrian
echo $string_single_quote;
echo "\n";
echo $string_double_quote;

$string_three = "Learning to display \"Hello $name\" to the screen.";
echo "\n";
echo $string_three;
?>