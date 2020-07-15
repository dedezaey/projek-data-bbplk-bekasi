
<?php 
require_once "koneksi.php"

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../css/bootstrap.css">
  <script src="../../js/jquery.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>

  <style>



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
          <form class="form-inline my-2 my-lg-0 " >
            <input class="form-control mr-sm-2" type="text" placeholder="search"> 
            <button class="btn btn-success my-2 my-sm-0" type="button" style="width: 100px; ">search</button>
          </form>
        </div>  
      </nav>



      <!-- conten -->


      <div class="col-12 col-md-8 col-lg-10 " style="min-height:650px; margin-top: 10px; margin-bottom: 10px; background-image: url(../../aset/background.jpg);">
        <div class="container">
          <div class="row justify-content-center mt-5">
            <div class="card">
              <div class="card-header bg-transparent mb-0"><h5 class="text-center"> <span class="font-weight-bold text-primary"></span></h5></div>
              <div class="card-body">



                <form action="inser2.php" method="POST">

                  <label for="fname">nama barang</label>
                  <input type="text"  name="namaBarang" placeholder="Nama barang" style="width: 100%">

                  <label for="lname">satuan barang </label>
                  <input type="number"  name="satuanBarang" placeholder="satuan" style="width: 100%;">

                  <label for="lname">harga barang</label>
                  <input type="number"  name="hargaBarang" placeholder="harga barang" style="width: 100%;">

                  <input type="submit" value="Kirim">

                </form>




                <!-- tabel data -->

                <table class="table table-dark table-hover">
                  <thead>
                    <tr>
                      <th>no</th>
                      <th>nama barang</th>
                      <th>satuan</th>
                      <th>harga</th>
                      <th>season</th>

                    </tr>
                  </thead>
                  <tbody>

                    <?php 
                    $sql = "SELECT*FROM tb_barang";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
  //akan dijalankan jika rcornya adalah
                      while ($row = $result->fetch_assoc()) { ?>


                        <tr>
                          <td><?=$row['id_barang'] ?></td>
                          <td><?=$row['nama_barang'] ?></td>
                          <td><?=$row['satuan_barang'] ?></td>
                          <td><?=$row['harga_barang'] ?></td>

                          <td>
                            <a onclick="return confirm('Anda yakin akan menghapus record ini')" class="btn btn-danger" href="prosesdeletuser.php?id=<?=$row['id_barang'] ?>">delate</a>

                            <a href="" onclick="showUpdateForm('<?=$row['id_barang'] ?>', '<?=$row['nama_barang'] ?>', '<?=$row['satuan_barang'] ?>', '<?=$row['harga_barang'] ?>' )" class="btn btn-primary" href="" data-toggle="modal" data-target="#exampleModal">
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





          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner -->



  <div class="col-12 col-md-4 col-lg-2 bg-danger">



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
          <form action="updatebarang.php" method="POST">
            <h5 class="modal-title" id="exampleModalLabel" align="center">up date data</h5>

            <label for="fname">nomer</label>
            <input type="number"  name="idBarang" id="modal-id-barang" placeholder="nomer anda" readonly="" style="width: 100%">


            <label for="fname">nama barang</label>
            <input type="text"  name="namaBarang" id="modal-nama-barang" placeholder="nama barang" style="width: 100%">

            <label for="lname">satuan barang</label>
            <input type="number"  name="satuanBarang" id="modal-satuan-barang" placeholder="satuan barang" style="width: 100%;">

            <label for="lname">harga barang</label>
            <input type="number"  name="hargaBarang" id="modal-harga-barang" placeholder="harga barang" style="width: 100%;" readonly="">

            <input type="submit" value="update">

          </form>

        </div>

      </div>
    </div>
  </div>

  <script>
  //fungsi untuk memasukan nilai pada form uptudate
  function showUpdateForm(id,nama,satuan,harga){
    document.getElementById('modal-id-barang').value = id;
    document.getElementById('modal-nama-barang').value = nama;
    document.getElementById('modal-satuan-barang').value = satuan;
    document.getElementById('modal-harga-barang').value = harga;
  }

</script>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>  
</body>
</html>  <script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>  
</body>
</html>