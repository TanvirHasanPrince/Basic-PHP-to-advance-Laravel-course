<!-- Class 9 Overview

Some essentials things
isset, empty, die
Undefined, empty / flag, null, array variable

Project - Form Handling
Set Method - for getting form data
Set Action - for sending data 
Set Field Name - for getting form data by field name
Receive Form Value by supper global variable - $_GET, $_POST, $_REQUEST
Get Method vs Post Method
Form isset
Primary Validation message. -->

<?php

// Some essentials things
// isset, empty, die
// Undefined, empty / flag, null, array variable

//********** isset**************/
// With isset: we are trying to figure out if we have assigned any value in the variable or not. 
// $name = NULL;

// if (isset($name)) {
//  echo "Yes. Value already set";
// } else {
//  echo "No. Value not set";
// }


//********** Empty**************/
// Empty: we are checking wheter we have assigned any blank value to the variable or not; 

$name = NULL;

// if (empty($name)) {
//  echo "Value is empty";
// } else {
//  echo "Value is already there";
// };


//********** Die**************/
//Die: After this line of code the rest of the code will not run. WHY DO WE USE THIS?... Now, if I want to figure out a bug.. I need to stop the rest of the code otherwise the codes will run. To kill the rest of the code we use the DIE functino.
// echo "Tanvir Hasan Prince 1<br>";
// echo "Tanvir Hasan Prince 2<br>"; 
// echo "Tanvir Hasan Prince 3<br>";
// echo "Tanvir Hasan Prince 4<br>";
// echo "Tanvir Hasan Prince 5<br>";
// die("DON'T GO BELOW THIS LINE");
// echo "Tanvir Hasan Prince 6<br>";
// echo "Tanvir Hasan Prince 7<br>";
// echo "Tanvir Hasan Prince 8<br>";
// echo "Tanvir Hasan Prince 9<br>";
// echo "Tanvir Hasan Prince 10<br>";


//********** Undefined**************/
// Undefined: We have not defined the variable/function


//********** Empty/flag Variable**************/
// Empty/flag variable = we use this when we want to add something already to an assigned variable. This is
// $list = '';
// $list .= '<ul>';
// $list .= '<li>List Number 1 </li>';
// $list .= '<li>List Number 2 </li>';
// $list .= '<li>List Number 3 </li>';
// $list .= '</ul>'; 

// echo $list;

//********** Array Variable**************/

// $name[] = 'Tanvir  Prince';
// $name[] = "Hasan";
// $name[] = "Prince";
// $name[] = "What is";
// $name[] = "Your";
// $name[] = "Name";
// echo "<pre>";
// print_r($name);


$producInfo = ['name' => 'apple', 'price' => 200];

$producInfo['name'] = 'apple';
$producInfo ['price'] = 500;

echo '<pre>';
print_r($producInfo);



function insert() {
 $output = [];
if (insert done) {
$output ['message'] = 'sucessfull';
$output ['status'] = 1;
} else {
 $output ['message'] = 'fail';
 $output ['status'] = 0;


}

return $output;


};


?>