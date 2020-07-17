       <?php 
//jika $_GET['q']ada isinya
       if (isset($_GET['q'])) {
  //yang dijalankan isinya 
        $q = $_GET['q'];
        $sql = "SELECT*FROM toko_buku WHERE nama_buku LIKE '%$q%' ";
      }else{
        $sql = "SELECT*FROM toko_buku";
      }
      $result = $conn->query($sql);



      ?>
