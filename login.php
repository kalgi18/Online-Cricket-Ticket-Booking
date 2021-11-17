<?php

   require_once "config.php";

   $error = '';

   if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['submit'])){
      
      $email = trim($_POST['email']);
      $password = trim($_POST['password']);

      //validate if email is empty
      if(empty($email)){
         $error .= '<p class="error">Please enter email.</p>';
      }
      //validate if password is empty
      if(empty($password)){
         $error .= '<p class="error">Please enter your password.</p>';
      }

      if(empty($error)){
         if($query = $db->prepare("SELECT * FROM users WHERE email = ?")){
            $query->bind_param('s', $email);
            $query->execute();

            $row = $query->fetch();
            if($row){
               if(password_verify($password, $row['password'])){
                  $_SESSION["userid"] = $row['id'];
                  $_SESSION["user"] = $row;

                  //Redirect user to home page
                  header("location: index.php");
                  exit;
               }
               else{
                  $error .= '<p class="error">Password is not valid.</p>';
               }
            }
            else{
               $error .= '<p class="error">No user exist with this email address.</p>';
            }
         }
         $query->close();
      }
      //close connection
      mysqli_close($db);
   }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/signup.css">

</head>
<body>
   
<div class="bg-img">
    <div class="content">
       <header>Login</header>
       <form action="#" method="post">
          <div class="field">
             <span class="fa fa-user"></span>
             <!-- <label>Email Id: </label> -->
             <input type="text" name="email" required placeholder="Enter your Email">
          </div>
          <div class="field space">
             <span class="fa fa-lock"></span>
             <!-- <label>Password: </label> -->
             <input type="password" name="password" class="pass-key" required placeholder="Enter your Password">
             <span class="show">SHOW</span>
          </div>
          
          <div class="field">
             <input type="submit" name="submit" value="Submit">
          </div>
              
         <div class="signup">
            Don't have account?
            <a href="signup.php">Signup Now</a>
         </div>
       </form>
    </div>
 </div>


 <script src="js/main.js" type="module"></script>
 <script src="js/config.js" type="module"></script>
    
</body>
</html>