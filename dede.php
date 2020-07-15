<?php 
require_once "tabel.php"
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  -->
</head>
<body>
  <div class= "container-fluid">
    <div class="row">
      <div class= "col-12 text-light" style="background-color: #33ccff;">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="aset/tembok.jpg" alt="Los Angeles" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Los Angeles</h3>
              <p>We had such a great time in LA!</p>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="aset/coret.jpg" alt="Chicago" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="aset/kursi.jpg" alt="New York" width="1100" height="500">
            <div class="carousel-caption">
              <h3>New York</h3>
              <p>We love the Big Apple!</p>
            </div>   
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>


    </div>

    <nav class="navbar col-12 navbar-expand-lg navbar-dark sticky-top"  style="background-color: #33ccff; padding-left: 15px; margin-right: 10px;">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link active" href="LatihanBootstrap4.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Facilities</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" href="guestbook.html">Guest Book</a>
          </li>    
          <li class="nav-item ">
            <a class="nav-link active" href="Table.html">Daftar Komentar</a>
          </li>  
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="text" placeholder="search"> 
          <button class="btn btn-success my-2 my-sm-0" type="button">search</button>
        </form>
      </div>  
    </nav>

    <div class="col-12 col-md-8 col-lg-10 bg bg-blue  text-light pt-4" align="justify" style="min-height:650px;">

      Content

    </div>
    <div class="col-12 col-md-4 col-lg-2 bg-danger text-light pt-4">Banner
      <p align="justify">
      </div>
      <div class="col-12 bg-info text-light" align="center">Copyright @Ryanaldi 2020</div>
    </div>
  </div>

  <script src="asset/js/jquery.min.js"></script>
  <script src="asset/js/popper.min.js"></script>
  <script src="asset/js/bootstrap.min.js"></script>

</body>
</html>