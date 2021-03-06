<!DOCTYPE html>
<html lang="en">
<head>
  <title>BUNY Car Sharing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

  .carousel-inner img {
      width: 40%; /* Set width to 100% */
      height:400px;
      margin: auto;
      max-height: 400px;

  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none;
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="">BUNY Car Sharing</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="welcome">Home</a></li>
        <li class="active"><a href="about">About</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="register"><span class="glyphicon glyphicon-register"></span> Register</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="2" class="active"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="http://i.imgur.com/llXam8v.jpg" alt="Image">
        <div class="carousel-caption">

        </div>
      </div>

      <div class="item">
        <img src="http://i.imgur.com/VtWQ2AA.jpg" alt="Image">
        <div class="carousel-caption">

        </div>
      </div>

      <div class="item">
        <img src="http://i.imgur.com/c2zJp0z.jpg" alt="Image">
        <div class="carousel-caption">

        </div>
      </div>


    </div>

    <!-- Left and right controls -->


</div>

<div class="container text-center">
  <h3>BUNY Car Sharing</h3><br>

</div><br>

<footer class="container-fluid text-center">

</footer>

</body>
</html>
