<?php

echo ("**********Assignment 1************");
echo "<br> <br>";

// <!-- Question 01:

// 		Your client said that he needs a dropdown, which contains all days of the running month. Sometimes we fill up a registration form that, which date of birth. So find out in google (get number of days in specific month php) and do this assignment using a for loop.

// Day quantity is not equal for every month. Like as - february - 28, March - 31, april - 30

// So days of running month should dynamic (by php build in function)

for($i = 1; $i <= 12 ; $i++) {
    // echo "$i: ", cal_days_in_month(CAL_GREGORIAN, $i, date ("Y"));

    // echo "<br>";
    // echo "In year " . date("Y") . ", $i has " . cal_days_in_month(CAL_GREGORIAN, $i, date ("Y")) . "days";
    // echo "<br>";

    switch ($i) {
  case 1:
    echo "In year " . date("Y") . ", January has " . cal_days_in_month(CAL_GREGORIAN, $i, date ("Y")) . " days <br>";
    break;
  case 2:
    echo "In year " . date("Y") . ", February has " . cal_days_in_month(CAL_GREGORIAN, $i, date ("Y")) . " days <br>";
    break;
  case 3:
    echo "In year " . date("Y") . ", March has " . cal_days_in_month(CAL_GREGORIAN, $i, date ("Y")) . " days <br>";
    break;
    case 4:
    echo "In year " . date("Y") . ", April has " . cal_days_in_month(CAL_GREGORIAN, $i, date ("Y")) . " days <br>";
    break;
    case 5:
    echo "In year " . date("Y") . ", May has " . cal_days_in_month(CAL_GREGORIAN, $i, date ("Y")) . " days <br>";
    break;
    case 6:
    echo "In year " . date("Y") . ", June has " . cal_days_in_month(CAL_GREGORIAN, $i, date ("Y")) . " days <br>";
    break;
    case 7:
    echo "In year " . date("Y") . ", July has " . cal_days_in_month(CAL_GREGORIAN, $i, date ("Y")) . " days <br>";
    break;
    case 8:
    echo "In year " . date("Y") . ", August has " . cal_days_in_month(CAL_GREGORIAN, $i, date ("Y")) . " days <br>";
    break;
    case 9:
    echo "In year " . date("Y") . ", September has " . cal_days_in_month(CAL_GREGORIAN, $i, date ("Y")) . " days <br>";
    break;
    case 10:
    echo "In year " . date("Y") . ", October has " . cal_days_in_month(CAL_GREGORIAN, $i, date ("Y")) . " days <br>";
    break;
    case 11:
    echo "In year " . date("Y") . ", November has " . cal_days_in_month(CAL_GREGORIAN, $i, date ("Y")) . " days <br>";
    break;
    case 12:
    echo "In year " . date("Y") . ", December has " . cal_days_in_month(CAL_GREGORIAN, $i, date ("Y")) . " days <br>";
    break;
    default:
    echo "Check the code again";
}
}

// Question 02: 
echo (" <br> <br> **********Assignment 2************");
echo "<br> <br>";


// 	If we print 1-100, our output will be 100 times. But this time you have print out only the odd (বিজোড়) number within 1-100.

// You have to rotate from 1 to 100.

// Your output message should like that, “3 is a odd number”

// Not need to print even number

for ($i = 1; $i < 100; $i++) {
 
 echo "$i is a odd number";
 $i = $i+1;
 echo "<br>";
};
	

// 	Question 03: 

// 		Factorial - I think everyone knows the word. Factorial of 4 is given below:

// 4! = 4*3*2*1 = 24

// 6! = 6*5*4*3*2*1 = 720  

// So let’s calculate the factorial of 7.

echo (" <br> <br> *************assignment 3**************<br> <br> ");

$input_number = 7;
$factorial = 1;
for ($i = $input_number; $i >= 1; $i--) {
 
 $factorial = $factorial * $i;
 if ($i === 1) {
  echo "The factorial of $input_number is $factorial";
   
 } 
 
};
	
echo (" <br> <br> *************assignment 4**************<br> <br> ");
// Question 04: 

// 		Print out from 100 - 1 using a while loop. 

// You must use decrement operator

	$input_number = 100;

while($input_number >= 1) {
  echo "The number is: $input_number <br>";
  $input_number--;
}

// 	Question 05: 
echo (" <br> <br> *************assignment 5**************<br> <br> ");

// 		You have an array of your purchased product items. 

// ['apple', 'orange', 'banana', 'mango']

// Show all products as a table list.

// Output should like that: “sl- 1 and product - apple” -->

$purchased_product_items = ['apple', 'orange', 'banana', 'mango'];

foreach ($purchased_product_items as $serial_number => $prodcuts_itemts) {
 $updated_serial_number = $serial_number+1;
 $capitazlied_product_items = ucfirst($prodcuts_itemts);
 echo "$updated_serial_number". ".                 $capitazlied_product_items   <br>";
};


?>