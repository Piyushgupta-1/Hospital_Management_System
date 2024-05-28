<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!doctype html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="welcome.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP login system!</title>
  </head>
<body>
<!-- <div class="container mt-4">
<h3><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3>
<hr> -->

</div>
  <div class="abc">
    <div class="menu">
      <div class="rightmenu">
        <nav>
  
          <a href="welcome.php">Home</a>
          <a href="contact.html">contact</a>
          
          <a href="logout.php">Logout</a>
          <a href="login.php">login</a> <a href="register.php">signup</a>



        </nav>


      </div>
      <div clasS="left">
      <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo  $_SESSION['username']?>
      </div>
    </div>
    <div class="text">
      
      <h1>QUALIFIED DOCTORS</h1>
      <h2>you can trust us</h2>
      

    </div>
  </div>

  </div>
  <div class="card-group">
    <div class="card">
      <img src="emg.jpg" class="card-img-top" alt="..." height="200px" width="200px">
      <center>
        <h1><a href="emergency.html">Emergency</a></h1>
      </center>
    </div>
    <div class="card">
      <img src="doc.png" class="card-img-top" alt="..." height="200px" width="200px">
      <center>
        <h1><a href="appointment.html">appointment</a></h1>
      </center>

    </div>
    <div class="card">
      <img src="medi.jpg" class="card-img-top" alt="..." height="200px" width="200px">
      <center>
        <h1><a href="medicine.html">Medicine</a></h1>
      </center>

    </div>

  </div>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo "Welcome ". $_SESSION['username']?></a>
      </li>
  </ul>
  </div>


  </div>
</nav>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
