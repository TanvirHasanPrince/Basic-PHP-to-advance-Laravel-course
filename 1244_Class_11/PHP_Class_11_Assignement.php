

<!doctype html>
<html lang="en">
  <head>
    <title>Class 11 classwork</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
<?php

// Email Validation
function validateEmail ($email) {
 if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  return true;
 } else{
  return false;
 }
}


// Filter Edu mail for filtering institution email address. 


function filterEduMail ($email) {
$validEmails = ['bracu.ac.bd'];
$email_arr = explode('@', $email, 2);
if(in_array($email_arr[1], $validEmails)) {
return true;
} else {
 return false;
};
 

};
function validate ($message, $alert_type = "danger") {
return "<div class=\"alert alert-{$alert_type} alert-dismissible fade show\" role=\"alert\">
   {$message}!
  <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
</div>";
};


//User Name ValidationMsg

function validate_User_Name ($username) {
 if (preg_match('/^[a-z0-9]/', $username)){
return true;
 } else {
return false;
 };
}; 

// To keep the old value from being
function old_Values ($field_Name) {
  if (isset($_POST[$field_Name])) {
    echo $_POST[$field_Name];
  } else {
    echo '';
  };
  
};

// Clear form data

function clearFormData () {
  $_POST = '';
};


if (isset($_POST['register'])) {

$user_Name=  $_POST['user_Name']; 
echo "<br />";
$user_email = $_POST['user_email'];
echo "<br />";
$user_phone_number =  $_POST['user_phone_number'];
echo "<br />";
$user_password = $_POST['user_password'];
echo "<br />";
$user_age = $_POST['user_age'];
echo "<br />";
$gender = '';
if (isset($_POST['Gender']) ) {
  $gender = $_POST['Gender'];
};

$agree_Status = '';
if (isset($_POST['agree_status'])) {
$agree_Status = $_POST['agree_status'];
};



if (empty($user_Name)|| empty($user_email)  || empty($user_phone_number)  || empty($user_password) | empty($user_age) | empty($gender) ) {
 $validation_msg = validate("All fields are required");
 
} else if (validateEmail($user_email)== false){
$validation_msg = validate("Email is not valid", "warning");
} else if (filterEduMail($user_email) == false) {
 $validation_msg = validate("Email should be from BRAC University", "danger");
} else if ($user_age < 18 || $user_age > 60){
$validation_msg = validate("You are under 18", 'warning');
} else if (validate_User_Name($user_Name)) {
$validation_msg = validate("Change your username", 'warning');
} else if ($agree_Status != 'agree') {
  $validation_msg = validate("Please agrees with the message", 'danger');
}

else {
 $validation_msg =  validate("Submitted succssfully", 'success') ;
 clearFormData ();
};

};
?>
  <style>
   .contain{
    width: 500px;
    margin: 0 auto;
   }
  </style>

<div class="contain">
 <div class="wrap shadow form-div">
  <div class="card">
   <div class="card-body">
    <h1>Registration Form</h1>
<?php
    if (isset($validation_msg)) {
echo $validation_msg;
    }
    ?>
    

    <form method="POST" action= "" autocomplete="off">

    <div class="form-group">
      <label for="fieldthree" class="form-label" > User Name</label>
      <input type="text" class="form-control" name="user_Name"  value="<?php old_Values('user_Name');?>
      "id= "fieldthree">
     </div>
     <div class="form-group">
      <label for="fieldone" class="form-label"> Email Address</label>
      <input type="text" class="form-control" name="user_email" value="<?php old_Values('user_email'); ?>"id="fieldone"  >
</div>
      <div class="form-group">
      <label for="fieldfour" class="form-label"> Phone</label>
      <input type="tel" class="form-control" name= "user_phone_number" value="<?php old_Values('user_phone_number'); ?>" id="fieldfour">

     </div>

     
     <div class="form-group">
      <label for="fieldtwo" class="form-label"> Password</label>
      <input type="password" class="form-control" name ="user_password"  value="<?php old_Values('user_password'); ?>" id="fieldtwo">
     </div>

     
     <div class="form-group">
      <label for="fieldfive" class="form-label"> Age</label>
      <input type="text" class="form-control" name ="user_age" value="<?php old_Values('user_age'); ?>" id="fieldfive">
     </div>
   
     <div class="form-group">
      <label for="fieldsix" class="form-label"> Gender</label>
     <div class="form-check">
  <input class="form-check-input" type="radio" name="Gender" value ="male"   id="male">
  <label class="form-check-label" for="male">
    Male
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="Gender"  value ="female"  id="female">
  <label class="form-check-label" for="female">
   Female
  </label>
</div> 

<div class="form-check">
  <input class="form-check-input" type="radio" name="Gender"  value ="others"  id="others">
  <label class="form-check-label" for="others">
    Others
  </label>
</div>


</div>

<div class="form-check">
  <input class="form-check-input" type="checkbox" name = "agree_status" value="agree" id="agreeCheckBox">
  <label class="form-check-label" for="agreeCheckBox">
    Agree to the terms and conditions.
  </label>
</div>


     <div class="form-group">
      <input type="submit" name = "register"class="btn btn-primary" value="Register">
     </div>

    </form>
   </div>
  </div>
 </div>
</div>
      
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
