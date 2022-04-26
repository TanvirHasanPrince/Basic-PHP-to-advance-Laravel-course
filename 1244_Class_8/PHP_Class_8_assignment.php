<?php

// Create a function that will return children, teenagers, young people, old people from the age

echo "<br>";
echo "<br>";
echo "*******************************Assignment 1*******************************";
echo "<br>";
echo "<br>";

function age($people_age) {
 
 if ($people_age >= 1 && $people_age  <= 12) {
  echo "This is a child";
 } else if ($people_age >= 1 && $people_age >= 13 && $people_age  <= 18) {
  echo "This is a Teenager";
 } else if ($people_age >= 1 && $people_age >= 19 && $people_age  <= 50) {
  echo "This is a young person";
 }
 else if ($people_age >= 1 && $people_age >= 51 ) {
  echo "This is an old person";
 } else {
  echo "Enter a valid age";
 };

}

age(89);


echo "<br>";
echo "<br>";
echo "*******************************Assignment 2*******************************";
echo "<br>";
echo "<br>";

// Create a function that will return the area of a rectangle, square, triangle

// Rectangle A= w x l
// A = a2
// a = (h x base)/2 

function Rectangle_area ($Rectangle_width,$Rectangle_length) {

 $Rectangle_area = $Rectangle_width * $Rectangle_length;
 echo "The rectangle area is = $Rectangle_area";
 echo "<br>";
 return $Rectangle_area;
 

};

Rectangle_area(5,10);


function square_area ($square_side) {

 $square_area = $square_side * $square_side;
 echo "<br>";
 echo "The Square area is = $square_area";
 echo "<br>";
 return $square_area;
 

};

square_area(5);


function triangle_area ($triangle_height, $triangle_base) {

 $triangle_area = ($triangle_height * $triangle_base)/2;
 echo "<br>";
 echo "The Triangle area is = $triangle_area";
 echo "<br>";
 return $triangle_area;
 

};

triangle_area(3,10);

echo "<br>";
echo "<br>";
echo "*******************************Assignment 3*******************************";
echo "<br>";
echo "<br>";
// GPA function for result publishing

function GPA($bangla, $english, $math, $science, $religion, $biology) {
 $total_marks = ($bangla + $english +  $math +  $science + $religion + $biology)/6;
 if ($total_marks >= 33 && $total_marks <=50) {
  echo "You got D";
 } else if ($total_marks >= 51 && $total_marks <=60) {
  echo "You got C";
 } else if ($total_marks >= 71 && $total_marks <=79) {
  echo "You got B ";
 } else if ($total_marks >= 80 && $total_marks <=89) {
  echo "You got A";
 } else if ($total_marks >= 90 && $total_marks <=100) {
  echo "You got A+";
 } else {
  echo "You Failed !";
 }
};

GPA(90, 90, 100, 100, 100, 100);

echo "<br>";
echo "<br>";
echo "*******************************Assignment 4*******************************";
echo "<br>";
echo "<br>";
// Create an age calculator function

Function your_age ($birthYear) {
 $year = date("Y");
 $your_age = $year - $birthYear;
 echo $your_age;


}

your_age(1993);

echo "<br>";
echo "<br>";
echo "*******************************Assignment 5*******************************";
echo "<br>";
echo "<br>";
// Create a BMI function for health;

// BMI formula: BMI = kg/m2

function BMI ($weight, $height) {
 $height = $height * 0.01; // Converting CM height to meters
 $your_BMI = $weight/ ($height * $height);
 echo $your_BMI;
};

BMI (69, 170.18); // The weight is in Kg and the height is in centemeters;


echo "<br>";
echo "*******************************Assignment 6*******************************";
echo "<br>";
echo "<br>";

// Create a currency converter function from taka to USD, CAD, POUND, EURO etc


function currencyConverter ($taka) {
 echo "$taka taka is =". ($taka / 84) . " USD"; echo "<br>";
 echo "$taka taka is =". ($taka / 65) . " CAD";
 echo "<br>";
 echo "$taka taka is =". ($taka / 110) . " POUND";
 echo "<br>";
 echo "$taka taka is =". ($taka / 105) . " EURO";
}

currencyConverter(150);
?>