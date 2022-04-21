<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>Assignment 7</title>
</head>
<body>
  <h2>Assignment 1</h2>
<?php
$questionSet = [

    [

        'question' => 'How many types of loops are there in php language?',

        'options' => [

            '2', '3', '4', '5'

        ]

    ],



    [

        'question' => 'What will be the output of the following PHP code?

<?php  

  	for ($num = 1; $num <= 10; $num += 2) { 

    echo "$num "; 

}  


  ?>',

        'options' => [

            '1 3 5 7 9', '1 2 3 4 5', '9 7 5 3 1', 'Error'

        ]

    ],



    [

        'question' => 'What will be the output of the following PHP code?

<?php  

$num = 20; 

while ($num < 12) { 

    $num += 2; 

    echo $num, "\n"; 

} 


?>',

        'options' => [

            'Error', 'No Output', 'infinite loop', 'Only one garbage value'

        ]

        ], 

         [

        'question' => 'Main parameters are used in a for loop is ?',

        'options' => [

            '(increment/decrement, initialization, statement)', '(initialization, statement, increment/decrement) ', '(statement, initialization, increment/decrement)', '(statement, increment/decrement)'

        ]

        ], 

         [

        'question' => 'W Which loop evaluates the condition expression as Boolean, if it is true, it executes the statements and when it is false it will terminate?',

        'options' => [

            'For loop', 'While loop ', 'do-while loop', 'All of the above'

        ]

        ], 

         [

        'question' => 'What will be the output of the following PHP code?

<?php

    do

    {

          print "LFC";

    }

    while(10);

    print "I love php and Laravel course";


?>',

        'options' => [

            'LFC', 'I love php and Laravel course', 'infinite loop', 'None of these'

        ]

        ], 

         [

        'question' => 'What will be the output of the following PHP code?

<?php   

  $arr = array (10, 20, 30); 

    foreach ($arr as $val) {  

      echo "$myValue \n"; 

    }  


?>',

        'options' => [

            '10 20 30', 'No Output', '10', 'Error! undefined variable'

        ]

        ], 

         [

        'question' => 'What will be the output of the following PHP code?

<?php

   for ($a = -3; $a < -5; ++$a)

   {

        print $x++;

   }


?>',

        'options' => [

            '-3-4-5', '-3-4', 'No Output', 'infinite loop'

        ]

        ], 

         [

        'question' => 'What will be the output of the following PHP code?

<?php

for($num = 10; $num<=20; print ++$num)

  {

      print ++$num;

  }


?>',

        'options' => [

            '111213141516171819202122 ', '11121314151617181920', '1112131415161718192021', 'infinite loop'

        ]

        ], 

         [

        'question' => 'What will be the output of the following PHP code?

<?php

$i=-5;

while($i){

        $i++;

        if($i%2==0)

                continue;

        else

        {

                $i++;

        }

       echo($i);

}


?>',

        'options' => [

            '4 to 20', '-20', 'Null', 'infinite loop'

        ]

        ],

]
?>

<!-- <?php 
// foreach ($questionSet as $question_number => $question) {
//   echo $question["question"];
//   foreach ($question["options"] as $option_serial => $question_options) {
//      echo "<br>";
//     echo $question_options; 
//      echo "<br>";
   
//   }

// }
// ?> -->
    <form action="">
    <div>
    <?php shuffle ($questionSet); ?>
     <?php foreach ($questionSet as $question_number => $question) { ?>
      <p class="questions"><?php echo "Question-"; echo ++$question_number; echo "."; echo ($question["question"]) ; ?></p>
      <?php  foreach ($question["options"] as $option_serial => $question_options) { ?>
      <p><input type="radio" name="question-1" value = "HTML"><?php echo $question_options; ?></p>
      <?php } ?>
      <!-- <p><input type="radio" name="question-1" value = "Javascript"> Javascript</p>
      <p><input type="radio" name="question-1" value = "PHP">PHP</p>
      <p><input type="radio" name="question-1" value = "Python">Python</p> -->
      <?php } ?>
    </div>
  </form>

  <h2> ASSIGNMENT 2 </h2>
  <section class="About-Us">
      <h4>About Us</h4>
<h3>Our Staff</h3>
<p class="About-us-paragraph">Far far away, behind the mountainn, far from the countries vokalia and consonantia</p>

<?php
$People = [
    ['Person-image' => "face1.jpg",
    'Person-name' => 'Llyod Wilson',
    'Designation' => 'CEO, Founder',],


    ['Person-image' => "face2.jpg",
    'Person-name' => 'Daniel Craig',
    'Designation' => 'CFO',],


    ['Person-image' => "face3.jpg",
    'Person-name' => 'Johnny Depp',
    'Designation' => 'HR ',],


]
?>

<!-- <?php
// foreach ($People as $Person) {
//     echo $Person['Person-image'];
// }
?> -->


 
    <section class="test">
        <div class="container mt-5 mb-5">
            
    <div class="row g-2">
        <?php foreach ($People as $Person) { ?>
        <div class="col-md-4">
            
            <div class="card p-3 text-center px-4">
               
                <div class="user-image"> <img src="<?php echo $Person['Person-image'];?>" class="rounded-circle" width="80"> </div>
                <div class="user-content">
                    <h5 class="mb-0"><?php echo $Person['Person-name'];?></h5> <span>Software Developer</span>
                    <p><?php echo $Person['Designation'];?></p>
                </div>
                <div class="ratings"> <i class="fab fa-facebook-f"></i> <i class="fab fa-twitter"></i> <i class="fab fa-google"></i> <i class="fab fa-instagram"></i> </div>
               
            </div>
              
        </div>
           <?php } ?>
    </div>
 
    </section>

</body>
</html>