<!-- Case Study:

	I have three old hp monitors, not new. I want to sell it on my own website. That’s why I should create a product upload form on my website, then upload my product with specification and available quantity. My monitors have a 15.6 inch display. My monitor’s VGA cable status, yes, I will sell it for 8000 tk.

For creating a product upload form what specifications will be uploaded and what will be their data types?

Directions:


[N.B: Approximately 6 Variable will be there]

Create a php file.

Comment this case study on this php file. 

Then write down these variable names with value by following the variable's declaration rules.

And write the data type of every variable's right side as comment code.(ex: $age = 10 // data type is double)

Create a Project on github and upload this assignment and give this project link on assignment.

An example has been attached to this attachment section. -->

<?php 
$monitor_brand = 'HP';// String
$quantity_of_monitors = 3; // Number (integer)
$condition = 'Used'; // Boolean
$monitor_display_in_inch = 15.6; // Float
$has_vga_cable = true; // Boolean
$price = 8500; // Number

echo "Monitor Brand: $monitor_brand <br>
Quantity of monitors: $quantity_of_monitors <br>
Condition: $condition <br>
Display (inch) : $monitor_display_in_inch <br>
Price: $price <br>
Vga Cable :" .($has_vga_cable ? "This monitor has VGA cable" : "This monitor does not have VGA cable" ); 



?>