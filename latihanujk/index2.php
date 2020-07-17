<?php 
require_once "konksi.php"

?>



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
<body>




  <!-- header -->

  <div class= "countainer-fluid">
    <div class="row">
      <div class= "col-12 bg-primary text-light" style="height: 100px; background-image: url(../../aset/tembok.jpg);" ></div>



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
          
        </div>  
      </nav>



      <!-- conten -->


      <div class="col-12 col-md-8 col-lg-10 " style="min-height:1350px; margin-top: 10px; margin-bottom: 10px; background-image: url(../../aset/background.jpg);">

        <div class="container">

         <h4>guest book</h4>
         <p>masukan saran anda!!</p>

         <form action="insert.php" method="POST">

          <label for="fname">nama buku</label>
          <input type="text"  name="namaBuku" placeholder="nama buku">

          <label for="fname">nama penerbit</label>
          <input type="text"  name="namaPenerbit" placeholder="nama penerbit">

          <label for="fname">nama penulis</label>
          <input type="text"  name="namaPenulis" placeholder="Nama penulis.">

          <label for="lname"  >tahun terbit</label>
          <select type="text"  name="tahunTerbit" placeholder="tahun terbit" style="width: 100%;">
            <option>2000</option>
            <option>2001</option>
            <option>2002</option>
            <option>2003</option>
            <option>2004</option>
            <option>2005</option>
            <option>2005</option>
            <option>2006</option>
            <option>2007</option>
            <option>2008</option>
            <option>2009</option>
            <option>2010</option>
            <option>2011</option>
            <option>2012</option>
            <option>2013</option>
            <option>2014</option>
            <option>2015</option>
            <option>2016</option>
            <option>2017</option>
            <option>2018</option>
            <option>2019</option>
            <option>2020</option>


          </select>
          <input  type="submit" value="Kirim">

        </form>

        <form class="form-inline my-2 my-lg-0" action="" method="GET">
          <input class="form-control mr-sm-2" type="text" placeholder="search" name="q"> 
          <button class="btn btn-success my-2 my-sm-0" type="submit3" >search</button>
        </form>

        <?php 
            //Jika $_GET['q'] ada isinya
        if(isset($_GET['q'])){
              //yang dijalankan jika ada isinya
          $q = $_GET['q'];
          $sql = "SELECT*FROM toko_buku WHERE nama_buku LIKE '%$q%'";
        }else{
              //Jika $_GET['q'] tidak ada isinya
          $sql = "SELECT*FROM toko_buku";
        }

        $result = $conn->query($sql);

        ?>  
        <!-- tabel data -->

        <table class="table table-dark table-hover">
          <thead>
            <tr>
              <th>no</th>
              <th>nama buku</th>
              <th>nama penerbit</th>
              <th>nama penulis</th>
              <th>tahun buat</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>

            <?php 
            $sql = "SELECT*FROM toko_buku";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
  //akan dijalankan jika rcornya adalah
              while ($row = $result->fetch_assoc()) { ?>


                <tr>
                  <td><?=$row['id_buku'] ?></td>
                  <td><?=$row['nama_buku'] ?></td>
                  <td><?=$row['nama_penerbit'] ?></td>
                  <td><?=$row['nama_penulis'] ?></td>
                  <td><?=$row['tanggal_terbit'] ?></td>

                  <td>
                    <a onclick="return confirm('Anda yakin akan menghapus record ini?')  " class="btn btn-primary" href="hapus.php?id=<?=$row['id_buku']?>"  >
                    hapus</a>
                    <a href="" onclick="showUpdateForm('<?=$row['id_buku'] ?>', '<?=$row['nama_buku'] ?>', '<?=$row['nama_penerbit'] ?>', '<?=$row['nama_penulis'] ?>','<?=$row['tanggal_terbit'] ?>')" class="btn btn-primary" href="" data-toggle="modal" data-target="#exampleModal">
                      update
                    </a>
                  </td>
                </tr>
                <?php
              }
            }else{
              //akan dijalankan jika recodnya kosong
              echo("<tr><td colspan='3'>recodnya masih kosong</td></tr>");
            }

            ?>
          </tbody>
        </table>
      </tbody>

    </table>

    <!-- Button trigger modal -->


  </div>
</div>



<!-- banner -->



<div class="col-12 col-md-4 col-lg-2 bg-danger">


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
    <img class="card-img-top" src="../../aset/2.png" alt="Card image">
    <div class="card-img-overlay">
      <a href="#" class="btn btn-primary">See Profile</a>
      <button class="btn btn-primary" style="width: 120px;">
       <span class="spinner-border spinner-border-sm"></span>
       Loading..
     </button>
   </div>
 </div>


 <div class="card" style="width:250px">
  <img class="card-img-top" src="../../aset/1.png" alt="Card image">
  <div class="card-img-overlay">
    <a href="#" class="btn btn-primary">See Profile</a>
    <button data-toggle="collapse" data-target="#demo" class="btn btn-primary" style="width: 130px;">klik</button>

    <div id="demo" class="collapse">
      Lorem ipsum dolor text....
    </div>

  </div>
</div>


<div class="card" style="width:250px">
  <img class="card-img-top" src="../../aset/123.png" alt="Card image">
  <div class="card-img-overlay">
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
</div>


</div>



<div class="container-fluid" style="height: 500px;">

  <div class="row">
    <div class="col-sm-3" style="background-color: blue;height: 500px;">

      <div class="media border p-3 text-light">
        <img src="../../aset/1.png" alt="John Doe" class="mr-3 mt-3 rounded-circle" style="width:60px;">
        <div class="media-body">
          <h4>John Doe <small><i>Posted on February 19, 2016</i></small></h4>
          <p>Lorem ipsum...</p>
          <div class="media p-3">
            <img src="../../aset/2.png" alt="Jane Doe" class="mr-3 mt-3 rounded-circle" style="width:45px;">
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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">



        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="modal-body">
          <form action="update.php" method="GET">
            <h5 class="modal-title" id="exampleModalLabel" align="center">up date data</h5>

            <label for="fname">nomer</label>
            <input type="text"  name="idBuku" id="modal-id-user" value="id" placeholder="nomer anda" readonly="">


            <label for="fname">nama buku</label>
            <input type="text"  name="namaBuku" id="modal-nama-user" value="nama" placeholder="Nama lengkap . .">


            <label for="fname">nama penerbit</label>
            <input type="text"  name="namaPenerbit" id="modal-penerbit-user" value="penerbit" placeholder="Nama lengkap . .">


            <label for="fname">nama penulis</label>
            <input type="text"  name="namaPenulis" id="modal-penulis-user" value="penulis" placeholder="Nama lengkap . .">

            <label for="lname"  >tahun terbit</label>
            <input type="text"  name="tahunTerbit" id="modal-tahun-user" value="tahun" placeholder="Nama lengkap . .">


            <input type="submit" value="update">

          </form>

        </div>

      </div>
    </div>
  </div>

  <script>
  //fungsi untuk memasukan nilai pada form uptudate
  function showUpdateForm(id,nama,penerbit,penulis,tahun){
    document.getElementById('modal-id-user').value = id;
    document.getElementById('modal-nama-user').value = nama;
    document.getElementById('modal-penerbit-user').value = penerbit;
    document.getElementById('modal-penulis-user').value = penulis;
    document.getElementById('modal-tahun-user').value = tahun;
  }

</script>




<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>  
</body>
</html>