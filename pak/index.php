




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
<body style="background-image: url(../aset/sg6.jpg); width: 100%; height: 100%;">



  <!-- header -->

  <div class= "countainer-fluid">
    <div class="row">
      <div class= "col-12 bg-primary text-light" style="height: 100px; background-image: url(../aset/tembok.jpg);" ></div>



      <!-- menu -->


      <nav class="navbar col-12 navbar-expand-lg navbar-dark bg-dark sticky-top">
        <a class="navbar-brand" href="?p=home">
          <img src="../aset/zaey.jpg" class="rounded-circle" alt="Cinque Terre" style="height: 100px;width: 100px"> 

        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">

            <li class="nav-item">
              <a class="nav-link acrive" href="?p=daftar">daftar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="?p=login">login</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link active" href="#">tentang</a>
            </li>    
          </ul>
          <form class="form-inline my-2 my-lg-0  " action="" method="GET" >
            <input class="form-control mr-sm-2" type="text" name="q" placeholder="search"> 
            <button class="btn btn-success my-2 my-sm-0" type="submit" name="q" style="width: 100px; ">search</button>
          </form>
        </div>  
      </nav>



      <!-- conten -->
      <div class="col mr-sm-2" style="background-color: blue"></div>
      <div class=" col-12col-md-8 col-lg-10 " style="min-height:1350px; margin-top: 10px; margin-bottom: 10px; ">
        <div class="container">
          <div class="row justify-content-center mt-5">

            <?php 
            if(isset($_GET['p'])){
              $page = $_GET['p'];

              switch ($page) {
                case 'home':
                include "aset/home.php";
                break;
                case 'daftar':
                include "aset/from3.php";
                break;
                case 'login':
                include "aset/login.php";
                break;      
                default:
                echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
                break;
              }
            }else{
              include "aset/login.php";
            }

            ?>

          </div>
        </div>
      </div>
    </div>
    <!-- footer -->


    <div class="col-12 bg-info ">
     <!-- Footer -->
     <footer class="page-footer font-small cyan darken-3">

      <!-- Footer Elements -->
      <div class="container">

        <!-- Grid row-->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-12 py-5">
            <div class="mb-5 flex-center">

             
              <!-- Facebook -->
              <a class="fb-ic">
                <img src="../../aset/fb.png" class="rounded-circle" style="width: 50px;height: 50px;">

                <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x">facebook</i>

              </a>
              <!-- Twitter -->
              <a class="tw-ic">
                <img src="../aset/tw.jpg" class="rounded-circle" style="width: 50px;height: 50px;">

                <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x">twitter </i>
              </a>
              <!-- Google +-->
              <a class="gplus-ic">

                <img src="../aset/google.jpg" class="rounded-circle" style="width: 50px;height: 50px;">
                <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x">google ++ </i>

              </a>
              <!--Linkedin -->
              <a class="li-ic">

                <img src="../aset/lk.png" class="rounded-circle" style="width: 50px;height: 50px;">
                <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> linkedin</i>
              </a>
              <!--Instagram-->
              <a class="ins-ic">

                <img src="../aset/ig2.jpg" class="rounded-circle" style="width: 50px;height: 50px;">
                <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> instargram </i>
              </a>
              <!--Pinterest-->
              <a class="pin-ic">
                <img src="../aset/pp.png" class="rounded-circle" style="width: 50px;height: 50px;">

                <i class="fab fa-pinterest fa-lg white-text fa-2x"> pinterest</i>
              </a>
            </div>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row-->

      </div>
      <!-- Footer Elements -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="#"> toko_zaenudin.com</a>
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Footer -->
  </div>
</div>
</div>






<script>
  //fungsi untuk memasukan nilai pada form uptudate
  function showUpdateForm(id,nama,email,password){
    document.getElementById('modal-id-user').value = id;
    document.getElementById('modal-nama-user').value = nama;
    document.getElementById('modal-email-user').value = email;
  }

</script>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>  
</body>
</html>