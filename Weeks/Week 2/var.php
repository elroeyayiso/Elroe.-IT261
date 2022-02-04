<?php
// introduction to our variables
// as well as syntax!!!
// what is a variable?? a varriable is a container


$name = 'Elroe';
echo $name;
echo '<br>';
$name= 'Elsa';
echo $name;
echo '<br>';
echo 'My first name is $name';
echo '<br>';
echo 'My first name is $name';

echo 'My fist name is ' .$name. '';
echo '<br>';
$temp=45;
// another data type is intergers
echo ' the tempreature today was ' .$temp.' degrees ' ;
echo '<br>';


 
$body_temp= 98.6;
// anything with a decimal is called a float
echo $body_temp;

// another dta type is boolean=true or false
// another data type is NULL
// <select><optiion value= "" NULL> Select one </option>   </select>


$vehicle = 'truck';
echo '<br>';
$x=20;
$y= 30;
$z= $x * $y;
echo $z;

// circumference of a circle 2 pie r 
echo '<br>';
$pie = 3.14;
$radius = 10;
$circumference; (2 * $pie) * $radius;
echo $circumference;

echo '<br>';

$celcius=4;
$far=($celecius * 9/5)+ 32;
$friendly_far =

//ceil is a funcation that will round up
// floor is a funcation that will round down
//echo $friendly_far;


$celcius=4;
$far = ($celcius * 9/5)+32;

// ceil a funcation that will round up
// floor is a fucation that will round down
echo ceil($far);

$money= 10330;
$divide = 71 ;
$amount = $money / $divide;
echo 'i now have <b> $' . number_format($amount,2). '</b>';
// number_format($amount, 2 )
echo '<br>';
$friendly_amount = number_format($amount, 2);
echo '<p> I now have <b> $'.$friendly_amount.' </b>
dollars!</p>' ;
?>





