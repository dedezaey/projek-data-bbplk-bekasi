




<?php
require_once "koneksi.php";

if (isset($_GET['p'])) {
  $page = $_GET['p'];
} else {
  $page = "home.php";
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../../css/bootstrap.css">
  <script src="../../js/jquery.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>



  <title>Aplikasi Toko Saya</title>
</head>


<body style="background-color: #f1f1f1;">
  <div class="container shadow">
    <div class="row">
      <div class="col-12 ml-auto bg-light" style="height: 80px;text-align: right;">
        <?php include_once "header.php"; ?>
      </div>
      <?php include_once 'navigation.php'; ?>
      <div class="col-12 col-md-8 col-lg-10 bg-light p-md-3 pt-1" style="min-height:650px">
        <?php include_once($page); ?>
      </div>
      <div class="col-12 col-md-4 col-lg-2 shadow pt-3">
        <?php include_once "foter.php";?>
      </div>
      <div class="col-12 bg-info text-light">Footer</div>
    </div>
  </div>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../../js/jquery-3.5.1.min.js"></script>
  <script src="../../js/popper.min.js"></script>
  <script src="../../js/bootstrap.min.js"></script>


  <script src="js/myScript.js"></script>
</body>


</html>



