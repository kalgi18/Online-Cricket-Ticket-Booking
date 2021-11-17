<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/signup.css">

    <title>Cricket Ticket Booking Website</title>
</head>
<body>
    <!-- navbar -->
    <section id="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Cricket Tickets</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ml-auto" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <!-- <form class="form-inline"> -->
                            <a class="btn btn-outline-danger" type="button">Book Tickets</a>
                            <a href="login.php" class="btn btn-outline-secondary" type="button">Login/SingnUp</a>
                        <!-- </form> -->
                    </li>
                </ul>
                </div>
            </div>
          </nav>
    </section>

    <!-- image -->
    <div class="image">
        <img src="images/img1.jpg" alt="cricket-stadium" height="500px" width="100%">
    </div>

    <!-- API container -->
    <!-- <div id="fixtures">
        <div id="match_title"></div>
        <div id="date"></div>
        <div id="venue"></div>
        <div id="status"></div>
    </div> -->

    <!-- upcoming matches -->


     <!-- Footer -->
    <footer class="page-footer font-small blue pt-4">

        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">

            <div class="row">

                <div class="col-md-8 mt-md-0 mt-3">
                    <h5 class="text-uppercase">Subscribe to our Newsletter</h5>
                    <form class="input-group">
                        <input type="text" class="form-control form-control-sm" placeholder="Your email"
                            aria-label="Your email" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-sm btn-outline-white my-0" type="button">Sign up</button>
                        </div>
                    </form>
                </div>

                <hr class="clearfix w-100 d-md-none pb-3">

                <div class="col-md-4 mb-md-0 mb-3">
                    <h5 class="text-uppercase">Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#!">About Us</a></li>
                        <li><a href="#!">Contact Us</a></li>
                        <li><a href="#!">Login / SignUp</a></li>
                    </ul>
                </div>

            </div>

        </div>

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href=""> MDBootstrap.com</a>
        </div>

    </footer>


    <!-- js files -->
    <script src="js/main.js" type="module"></script>

</body>
</html>