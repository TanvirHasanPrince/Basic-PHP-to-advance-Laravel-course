<!doctype html>
<html lang="en">
  <head>
    <title>Class 9 coursework</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  </head>
  <body>
<?php

if (isset($_POST['register'])) {

$user_Name=  $_POST['user_Name']; 
echo "<br />";
$user_email = $_POST['user_email'];
echo "<br />";
$user_phone_number =  $_POST['user_phone_number'];
echo "<br />";
$user_password = $_POST['user_password'];

if ($user_email =='' || $user_email == '' || $user_phone_number == '' || $user_password == '') {
 echo '<script> alert("All fields are required")</script>';
} else {
 echo "Form Submitted";
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
    <form method="POST" action= "">

    <div class="form-group">
      <label for="fieldthree" class="form-label" > Name</label>
      <input type="text" class="form-control" name="user_Name" id="fieldthree">

     </div>

     <div class="form-group">
      <label for="fieldone" class="form-label"> Email Address</label>
      <input type="email" class="form-control" name="user_email" id="fieldone">

      <div class="form-group">
      <label for="fieldfour" class="form-label"> Phone</label>
      <input type="tel" class="form-control" name= "user_phone_number"id="fieldfour">

     </div>

     </div>
     <div class="form-group">
      <label for="fieldtwo" class="form-label"> Password</label>
      <input type="password" class="form-control" name ="user_password" id="fieldtwo">
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