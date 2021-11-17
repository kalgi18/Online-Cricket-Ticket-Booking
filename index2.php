<?php

session_start();
//check id=f user is not loged in, then redirect to login page
if(!isset($_SESSION["userid"]) || $_SESSION["userid"]!==true){
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/signup.css">

    <title>Cricket Ticket Booking Website</title>
</head>
<body>
    <h3>Welcome <?php echo $_SESSION["name"]; ?></h3>
    <p>Book your tickets now!!</p>

    <p>
        <a href="logout.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Log Out</a>
    </p>

    <!-- js files -->
    <script src="js/main.js" type="module"></script>
    <script src="js/config.js" type="module"></script>

</body>
</html>