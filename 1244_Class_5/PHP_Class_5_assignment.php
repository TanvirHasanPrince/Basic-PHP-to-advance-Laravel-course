<?php

// Question 01: 

// 	We have an array [12,34,2,6,78]. What kind of array is this? Find all prime numbers from this array.

// Step 1: First let us find the factors of the given number( factors are the number that completely divides the given number)

// Step 2: Then check the total number of factors of that number

// Step 3: Hence, If the total number of factors is more than two, it is not a prime number but a composite number. Because When a number is divisible by only one and itself, then it is a prime number.

$Input_Number_array = [12,34,2,6,78];

foreach ($Input_Number_array as $number) {
 echo "<br>";
 echo "<br>";
 echo $number;
 echo "<br>";
 for($i = 1; $i <= $number; $i ++) {
        if ($number % $i === 0) {
            
                     echo $i;
            echo "<br>";

        } else {
         continue;
        } 
$cars []= $i;
echo "<br>";
echo count($cars);
// var_dump ($cars);
echo "<br>";
        // print_r($divisors);
    }

    if($cars == 3) {
     echo"$number is not a prime number";
    } else {
     echo "$number is a prime number";
    }
    



   }
// Question 02: 

// 	Let’s think about a use case, Daraz admin’s have some products for uploads on their e-commerce site. So make an array of products which contains 5 products.

// Go to daraz website and pick any 5 products and make your array.

// Must mention Which type of array you have made.
echo("<br> <br>");
echo ("*************ASSIGNMENT 2*************");
$Products_to_upload = [
 ['name' => 'realme 9i (6GB+128GB)', 'price' => '৳ 18,774', 'category' => 'Mobile Phone'], 
 ['name' => 'Nokia G10 DS 4GB/64GB', 'price' => '৳ 12,000', 'category' => 'Mobile Phone'], 
 ['name' => 'Umidigi A5 Pro - 6.3 inches FHD - 4GB RAM - 32GB ROM - 4150 mAh Battery', 'price' => '৳ 11,729', 'category' => 'Mobile Phone'], 
 ['name' => 'OUKITEL C21 4GB+64GB 4000mAh Front 20MP + Back 16MP Quad Camera', 'price' => '৳ 10,394', 'category' => 'Mobile Phone'], 
 ['name' => 'Motorola Moto G10 Power - 4Gb Ram64Gb Rom', 'price' => '৳ 15,181', 'category' => 'Mobile Phone']
];

echo "<br>";
echo ("Array Type = Multi-dimensional Array");
echo "<pre>";
print_r($Products_to_upload);


// 	Question 03: 

// 		This is an array array(0,10,80,67,60,89,91,56,45,30,95,83,99) 

// Find the maximum value from this array.

// Must use a foreach loop.

echo("<br> <br>");
echo ("*************ASSIGNMENT 3*************");
echo("<br> <br>");

$given_Numbers = [0,10,80,67,60,89,91,56,45,30,95,83,99];

$changing_number = 0;

foreach ($given_Numbers as $individual_numbers) {
 if ($changing_number < $individual_numbers) {
     $changing_number = $individual_numbers;
     
 }


}

echo $changing_number;



// 	Question 04: 

// 		Let’s traverse this array(0,10,80,67,60,89,91,56,45,30,95,83,99) and print 0 index then skip 1 index again print 2 skip 3….

echo("<br> <br>");
echo ("*************ASSIGNMENT 4*************");
echo("<br> <br>");


$traverse = [0,10,80,67,60,89,91,56,45,30,95,83,99];


for ($i = 0; $i <= count($traverse); $i++ ){
    
    echo "$i => $traverse[$i] ";
    echo "<br>";
    $i = $i + 1;
}



?>