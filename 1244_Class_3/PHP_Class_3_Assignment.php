

<!-- Question 01:

Let’s make a result grade calculator…

Rishita’s subject marks: SubjectA = 75, SubjectB = 80, SubjectC = 65, SubjectD = 90.

Result Calculation formula: Sum all subjects marks and divided by total subject quantity. 

From this given formula, you will get a mark. Show the Grade message by the mark.

A+ = 80 - 100 

A   = 70 - 79

A-  = 60 - 69

B   = 50 - 59

C   = 40 - 49

F   = 01 - 39 

Firstly you have to calculate the average mark of Rishita.

Secondly you have to show the grade message (Like as: “You got A+”) by following this grading range. -->

<?php
echo "<br> <br> ************<br> Assignment 1 <br> <br>";

$SubjectA = 75;
$SubjectB = 80;
$SubjectC = 65;
$SubjectD = 90;

$total_Rishita_mark = $SubjectA + $SubjectB + $SubjectC + $SubjectD;

echo "Total number of Rishita  = {$total_Rishita_mark} "; 
echo "<br>";

$Average_Mark_of_Rishita = ($total_Rishita_mark / 4);
echo "Average Mark of Rishita = $Average_Mark_of_Rishita";
echo "<br>";

if ($Average_Mark_of_Rishita >= 80 && $Average_Mark_of_Rishita <=100) {
 echo "You got an A+";
} elseif ($Average_Mark_of_Rishita >= 70 && $Average_Mark_of_Rishita <=79) {
  echo "You got an A";
}

elseif ($Average_Mark_of_Rishita >= 60 && $Average_Mark_of_Rishita <=69) {
  echo "You got an A-";
}

elseif ($Average_Mark_of_Rishita >= 50 && $Average_Mark_of_Rishita <=59) {
  echo "You got an B";
}

elseif ($Average_Mark_of_Rishita >= 40 && $Average_Mark_of_Rishita <=49) {
  echo "You got an C";
}

elseif ($Average_Mark_of_Rishita >= 1 && $Average_Mark_of_Rishita <=39) {
  echo "You got an F";
} else {
 echo "Your Number not found";
}
?>

<!-- // Question 02: 

// Let’s make a game with your bike… You are riding a bike, your bike has some functionalities, these are… start, stop, break, gear, signal, headlight. 

// When you click on the power/start button, your bike takes a start, 

// When you click stop, your bike takes a stop, 

// When you press the break, your bike take break, 

// when you give the gear, your bike move faster and faster, 

// when you press the signal button, your bike shows a signal light.

// When you press the headlight button, your bike’s headlight will start.

// Solve this game using Switch case and submit it on github -->

<?php  
// Functions:
echo "<br> <br> ************<br> Assignment 2 <br> <br>";
$functionalities = '';

switch($functionalities) {
  case 'start':
    echo 'You started your bike';
    break;

  case 'stop':
    echo 'You stopped your bike';
    break;


    case 'break':
    echo 'You presssed break on your bike';
    break;

    case 'gear':
    echo 'You shifter gear of your bike';
    break;

    case 'signal':
    echo 'You pressed the signal button of your bike';
    break;

    case 'headlight':
    echo 'You turned on the headlight of your bike';
    break;

    default:
    echo "You have a nice bike.. but it does not do anything.";
     break;

  
}


?>

