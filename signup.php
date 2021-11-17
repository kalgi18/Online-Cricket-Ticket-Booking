<?php

   require_once "config.php";

   if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['submit'])){
      
      $name = trim($_POST['name']);
      $email = trim($_POST['email']);
      $password = trim($_POST['password']);
      $confirm_password = trim($_POST['confirm_password']);
      $password_hash = password_hash($password, PASSWORD_BCRYPT);

      if($query = $db->prepare("SELECT * FROM users WHERE email = ?")){
         $error='';

         $query->bind_param('s', $email);
         $query->execute();
         //store result to check if account exists in the database
         $query->store_result();

         if($query->num_rows > 0){
            $error .= '<p class="error">Email Id is already is already registered.</p>';
         }
         else{
            //Validate password
            if(strlen($password)<6){
               $error .= '<p class="error">Password must have atleast 6 characters.</p>';
            }

            //Validate confirm password
            if(empty($confirm_password)){
               $error .= '<p class="error">Please enter confirm password.</p>';
            }
            else{
               if(empty($error) && ($password != $confirm_password)){
                  $error .= '<p class="error">Password did not match.</p>';
               }
            }

            if(empty($error)){
               $insertQuery = $db->prepare("INSERT INTO users(name, email, password) VALUES (?, ?, ?);");
               $insertQuery->bind_param("sss", $name, $email, $password_hash);
               $result = $insertQuery->execute();
               if($result){
                  $error .= '<p class="success">Registration successful!</p>';
               }
               else{
                  $error .= '<p class="error">Something went wrong!</p>';
               }
            }
         }
      }
      $query->close();
      $insertQuery->close();
      //close DB connection
      mysqli_close($db);
   }

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Form</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/signup.css">
    
</head>
<body>
   
<div class="bg-img">
    <div class="content">
       <header> Sign Up</header>
       <form action="#" method="post">
        <div class="field">
            <span class="fa fa-user"></span>
            <!-- <label>Name:</label> -->
            <input type="text" name= "name" placeholder="Enter your name" required>
         </div>
         <div class="field space">
            <span class="fa fa-user"></span>
            <!-- <label>Email Id: </label> -->
            <input type="email" name="email" required placeholder="Enter you Email">
         </div>
         <div class="field space">
            <span class="fa fa-lock"></span>
            <!-- <label>Password: </label> -->
            <input type="password" name="password" class="pass-key" required placeholder="Enter your Password">
            <span class="show">SHOW</span>
         </div>

         <div class="field space">
            <span class="fa fa-lock"></span>
            <!-- <label>Confirm Password: </label> -->
            <input type="password" name="confirm_password" class="pass-key" required placeholder="Re-Enter your Password">
            <span class="show">SHOW</span>
         </div>


      <div class="field space">
        <input type="submit" name="submit" value="Submit">
      </div>
      <p>Already have an account? <a href="login.php">Login here</a></p>

     </form>
   </div>
 </div>

   
</body>
</html>