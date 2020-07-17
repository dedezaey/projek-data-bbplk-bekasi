<?php 
require_once "koneksi.php"

?>





<!-- conten -->




<div class="container col-12col-md-8 col-lg-10">

 <h4>guest book</h4>
 <p>masukan saran anda!!</p>

 <form action="aset/inser.php" method="POST">

   <label for="fname">user name</label>
   <input type="text"  name="namaUser" placeholder="Nama lengkap . .">

   <label for="lname">E-mail</label>
   <input type="email"  name="emailUser" placeholder="alamat email" style="width: 100%;">

   <label for="lname">password</label>
   <input type="password"  name="passwordUser" placeholder="masukan password">

   <input  type="submit" value="Kirim">

 </form>

 <!-- tabel data -->

 <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th>no</th>
      <th>nama</th>
      <th>email</th>
      <th>action</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    $sql = "SELECT*FROM tb_user";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
  //akan dijalankan jika rcornya adalah
      while ($row = $result->fetch_assoc()) { ?>


        <tr>
          <td><?=$row['id_user'] ?></td>
          <td><?=$row['name_user'] ?></td>
          <td><?=$row['email_user'] ?></td>

          <td>
            <a onclick="return confirm('Anda yakin akan menghapus record ini')" class="btn btn-danger" href="aset/prosesdeletuser.php?id=<?=$row['id_user'] ?>">delate</a>
            <a href="" onclick="showUpdateForm('<?=$row['id_user'] ?>', '<?=$row['name_user'] ?>', '<?=$row['email_user'] ?>')" class="btn btn-primary" href="" data-toggle="modal" data-target="#exampleModal">
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
          <form action="aset/update.php" method="POST">
            <h5 class="modal-title" id="exampleModalLabel" align="center">up date data</h5>

            <label for="fname">nomer</label>
            <input type="text"  name="idUser" id="modal-id-user" placeholder="nomer anda" readonly="">


            <label for="fname">user name</label>
            <input type="text"  name="namaUser" id="modal-nama-user" placeholder="Nama lengkap . .">

            <label for="lname">E-mail</label>
            <input type="email"  name="emailUser" id="modal-email-user" placeholder="alamat email" style="width: 100%;">

            <input type="submit" value="update">

          </form>

        </div>

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

