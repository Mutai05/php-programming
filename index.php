<?php

//   variable = a reusable container that holds data
//              string, integer, float, boolean


// string

$name = "Bro Kip";
$food = "Pizza";
$email = "fake@gmail.com";

// integers

$age = 21;
$users = 2;
$quantity = 4;

//  float

$gpa = 2.5;
$price = 4.99;
$tax_rate = 5.1;

// boolean

$employed = true;
$online = false;
$for_sale = true;

$total = null;

echo "Hello {$name}<br>";
echo "You like {$food}<br>";
echo "Your Email is {$email}<br>";


echo "You are {$age} years old<br>";
echo "There are {$users} online<br>";
echo "You would like to buy {$quantity} items<br>";

echo "Your GPA is {$gpa}<br>";
echo "Your Pizza is \$ {$price}<br>";
echo "The sales tax rate is: \$ {$tax_rate}%<br>";

echo "Online Satus: {$online}<br>";
echo "Employment Satus: {$employed}<br>";


echo "You have ordered {$quantity} x {$food}s";
$total = $quantity * $price;
echo "Your total is \$ {$total}";

?>