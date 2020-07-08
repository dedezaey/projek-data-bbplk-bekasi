<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

  <style>

    /* Style inputs with type="text", select elements and textareas */
    input[type=text], select, textarea {
      width: 100%; /* Full width */
      padding: 12px; /* Some padding */ 
      border: 1px solid #ccc; /* Gray border */
      border-radius: 4px; /* Rounded borders */
      box-sizing: border-box; /* Make sure that padding and width stays in place */
      margin-top: 6px; /* Add a top margin */
      margin-bottom: 16px; /* Bottom margin */
      resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
    }

    /* Style the submit button with a specific background color etc */
    input[type=submit] {
      background-color: #4CAF50;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    /* When moving the mouse over the submit button, add a darker green color */
    input[type=submit]:hover {
      background-color: #45a049;
    }

    /* Add a background color and some padding around the form */
    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }



    /*loginan*/


    /* Full-width input fields */
    input[type=text], input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      opacity: 0.8;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    /* Center the image and position the close button */
    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
      position: relative;
    }

    img.avatar {
      width: 40%;
      border-radius: 50%;
    }

    .container {
      padding: 16px;
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
      background-color: #fefefe;
      margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 80%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: red;
      cursor: pointer;
    }

    /* Add Zoom Animation */
    .animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }

    @-webkit-keyframes animatezoom {
      from {-webkit-transform: scale(0)} 
      to {-webkit-transform: scale(1)}
    }

    @keyframes animatezoom {
      from {transform: scale(0)} 
      to {transform: scale(1)}
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
       display: block;
       float: none;
     }
     .cancelbtn {
       width: 100%;
     }
   }



 </style>

 <title></title>

</head>
<body>

  <!-- header -->

  <div class= "countainer-fluid">
    <div class="row">
      <div class= "col-12 bg-primary text-light" style="height: 100px; background-image: url(../aset/tembok.jpg);" ></div>



      <!-- menu -->


      <nav class="navbar col-12 navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="#">Navigation</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="mencoba.html">Facilities</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link active" href="#">Guest Book</a>
            </li>    
          </ul>
          <form class="form-inline my-2 my-lg-0 " >
            <input class="form-control mr-sm-2" type="text" placeholder="search"> 
            <button class="btn btn-success my-2 my-sm-0" type="button" style="width: 100px; ">search</button>
          </form>
        </div>  
      </nav>



      <!-- conten -->


      <div class="col-12 col-md-8 col-lg-10 " style="min-height:650px; margin-top: 10px; margin-bottom: 10px; background-image: url(../aset/background.jpg);">
        <div class="container">

          <h1 align="cenrer">from penjualan barang</h1>
          <form action="harga.php" method="post" style="width: 300px; padding-right: 30px;" >
            <p>nama barang</p>
            <select class="form-control" name="nama_barang" id="tombol1">
              <option value="">nama barang</option>
              <option value="cabai">cabai</option>
              <option value="merica">merica</option>
              <option value="tomat">tomat</option>
              <option value="bawamh merah">bawang merah</option>
              <option value="bawang putih">bawang putih</option>
            </select>
            <p>harga barang</p>
            <input type="number" name="harga_barang" style="width: 300px">
            <p>jumlah barang</p>
            <input type="number" name="jumlah_barang" style="width: 300px">
            <input type="submit" name="#" class="btn btn-primary">
          </form>
        </div>
      </div>



      <!-- banner -->



      <div class="col-12 col-md-4 col-lg-2 bg-danger">


        <!-- login -->

        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

        <div id="id01" class="modal">

          <form class="modal-content animate" action="/action_page.php" method="post">

            <div class="imgcontainer">
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
              <img src="../aset/1.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">

              <label for="uname"><b>Username</b></label>
              <input type="text" placeholder="Enter Username" name="uname" required>

              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>

              <button type="submit">Login</button>

              <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
              </label>
            </div>

            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id01')  .style.display='none'" class="cancelbtn">Cancel</button>
              <span class="psw">Forgot <a href="#">password?</a></span>
            </div>
          </form>
        </div>

        <script>
      // Get the modal
      var modal = document.getElementById('id01');


    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>

  <!-- see profil -->

  <div class="card" style="width:250px;">
    <img class="card-img-top" src="../aset/2.png" alt="Card image">
    <div class="card-img-overlay">
      <a href="#" class="btn btn-primary">See Profile</a>
      <button class="btn btn-primary" style="width: 120px;">
       <span class="spinner-border spinner-border-sm"></span>
       Loading..
     </button>
   </div>
 </div>


 <div class="card" style="width:250px">
  <img class="card-img-top" src="../aset/1.png" alt="Card image">
  <div class="card-img-overlay">
    <a href="#" class="btn btn-primary">See Profile</a>
    <button data-toggle="collapse" data-target="#demo" class="btn btn-primary" style="width: 130px;">klik</button>

    <div id="demo" class="collapse">
      Lorem ipsum dolor text....
    </div>

  </div>
</div>


<div class="card" style="width:250px">
  <img class="card-img-top" src="../aset/123.png" alt="Card image">
  <div class="card-img-overlay">
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>


</div>



<div class="container-fluid" style="height: 500px;">

  <div class="row">
    <div class="col-sm-3" style="background-color: blue;height: 500px;">

      <div class="media border p-3 text-light">
        <img src="../aset/1.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
        <div class="media-body">
          <h4>John Doe <small><i>Posted on February 19, 2016</i></small></h4>
          <p>Lorem ipsum...</p>
          <div class="media p-3">
            <img src="../aset/2.png" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:45px;">
            <div class="media-body">
              <h4>Jane Doe <small><i>Posted on February 20 2016</i></small></h4>
              <p>Lorem ipsum...</p>
            </div>
          </div> 
        </div>
      </div>
    </div>

    <div class="col-sm-3" style="background-color: yellow;height: 500px;">
    </div>
    <div class="col-sm-3" style="background-color: green;height: 500px;"></div>
    <div class="col-sm-3" style="background-color: red;height: 500px;"></div>

  </div>
</div>



<!-- footer -->


<div class="col-12 bg-info text-light">
  <marquee> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</marquee>

</div>
</div>
</div>






<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>  
</body>
</html>  <script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>  
</body>
</html>