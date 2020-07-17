
<?php 
require_once "koneksi.php"

?>





<!-- conten -->


<div class="col-12 col-md-8 col-lg-10 " style="min-height:650px; margin-top: 10px; margin-bottom: 10px; background-image: url(../../aset/background.jpg);">
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="card">
        <div class="card-header bg-transparent mb-0"><h5 class="text-center"> <span class="font-weight-bold text-primary"></span></h5></div>
        <div class="card-body">



          <form action="aset/inser2.php" method="POST">

            <label for="fname">nama barang</label>
            <input type="text"  name="namaBarang"  placeholder="Nama barang" style="width: 100%">

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
                      <a onclick="return confirm('Anda yakin akan menghapus record ini')" class="btn btn-danger" href="aset/deletbarang.php?id=<?=$row['id_barang'] ?>">delate</a>

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
          <form action="aset/updatebarang.php" method="POST">
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


