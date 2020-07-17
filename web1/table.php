<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Table</title>
  <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  -->
</head>
<body>
  <div class= "container-fluid">
    <div class="row">
      <div class= "col-12 text-light"  style="background-color: #33ccff;">
        <img src="asset/images/gbr3.jpg" alt="" style="width: 100%; height: 600px">
      </div>

      <nav class="navbar col-12 navbar-expand-lg navbar-dark sticky-top" style="background-color: #33ccff;  padding-left: 15px; margin-right: 10px;">
        <a class="navbar-brand" href="#">Ryanaldi</a>
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
            <!-- <li class="nav-item ">
              <a class="nav-link active" href="#">Guest Book</a>
            </li>     -->
            <li class="nav-item ">
              <a class="nav-link active" href="Table.html">Daftar Komentar</a>
            </li>  
          </ul>
          <form class="form-inline my-2 my-lg-0 ">
            <input class="form-control mr-sm-2" type="text" placeholder="search"> 
            <button class="btn btn-success my-2 my-sm-0" type="button">search</button>
          </form>
        </div>  
      </nav>
      
      <div class="col-12 col-md-8 col-lg-8 container" style="background-color:; width: 100px;">
        <h3 align="center" style="margin-top: 50px;">Data Komentar</h3>
        <hr>         
        <table class="table table-bordered table-hover" style="margin-top: 20px;">
          <thead style="background-color: #33ff77;">
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Komentar</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $name1 = "Adinda";
            $email1 = "adinda10@gmail.com";
            $komen1 = "***** Sangat Baik";

            $name2 = "Acil";
            $email2 = "aciljamur@dalangpelo.com";
            $komen2 = "*** Sedang";
            ?>
            <tr>
              <th scope="row">1</th>
              <td><?php echo $name1; ?></td>
              <td><?php echo $email1; ?></td>
              <td><?php echo $komen1; ?></td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td><?php echo $name2; ?></td>
              <td><?php echo $email2; ?></td>
              <td><?php echo $komen2; ?></td>
            </tr>
            <!-- <tr>
              <th scope="row">3</th>
              <td>Leri</td>
              <td>leriler@dalangpelo.com</td>
              <td>** Kurang</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Nusa</td>
              <td>nusa20@gmail.com</td>
              <td>**** Baik</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Rara</td>
              <td>raracute@gmail.com</td>
              <td>**** Baik</td>
            </tr> -->
          </tbody>
        </table>
      </div>

      <div class="col-12 col-md-4 col-lg-2 bg-danger text-light pt-4" align="justify">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora quas iure et porro possimus, iste cupiditate aliquam neque sapiente sed obcaecati autem repudiandae rerum facere quam quidem, ducimus distinctio iusto ipsam praesentium ut accusantium. Saepe aperiam perspiciatis doloremque, culpa corporis labore, ipsa molestiae amet rerum, eos dolores error? Atque, recusandae! Nostrum tenetur, iste id sequi, soluta facilis. Atque a eligendi voluptatum ex ipsam, hic magni enim, voluptates sapiente quam nihil esse consequatur voluptatibus sunt molestias, ipsum similique dolorum nam animi harum maxime deserunt. Ipsum eos, architecto sed at amet maxime aut exercitationem impedit placeat consequuntur. Quod consequuntur veniam tenetur exercitationem velit excepturi nostrum fuga error. Nesciunt ipsa suscipit, earum libero natus iste nostrum aliquam veritatis reprehenderit explicabo doloribus magnam ipsam. Rerum explicabo distinctio dicta accusantium nemo impedit! Consectetur, porro, consequatur. Sint labore error quibusdam delectus quis harum perferendis, officia! Alias esse ullam iure nesciunt voluptatem maxime dolores et, neque distinctio officia sapiente ducimus, molestias, ut eum. Sapiente tempora cupiditate ipsam unde, laudantium quae accusamus tempore quisquam architecto ducimus vel et provident veritatis commodi ad. Non ipsum itaque in adipisci incidunt molestiae omnis sapiente autem ut animi, minus dolorum, quam, consequuntur eveniet consectetur nulla facere officiis, nostrum exercitationem asperiores inventore excepturi. Omnis quasi iure, rem, inventore earum ex nulla aliquam voluptas asperiores quam ullam, laborum! Minus necessitatibus, voluptatum enim totam consequuntur mollitia eaque sapiente error quia eius debitis ut quos expedita similique incidunt eveniet commodi nostrum quis ex! Iure velit accusantium dignissimos nobis ut necessitatibus beatae, id libero, ipsa saepe est, quae alias commodi consequatur eaque, laboriosam officiis expedita repellat. Eum quasi, dolore. Ad, molestias. Cumque animi, minus temporibus laboriosam quasi esse impedit assumenda facere aut nulla sunt fugit excepturi aspernatur velit sint voluptatum asperiores libero reprehenderit exercitationem ducimus repudiandae enim quam. Veniam, ea. Enim molestias debitis quia unde quibusdam tempore aliquam aperiam fuga error neque ratione non, dolorum nisi consequatur odit at voluptatibus velit, repellendus atque perspiciatis aliquid veniam! Laboriosam explicabo laudantium, soluta voluptatibus nisi iusto quo inventore veritatis. Odio delectus adipisci ipsa, dolorum fugiat autem. Quas, dolore, itaque beatae vero nam atque non quis. Earum harum, odio. Ad officiis, et nihil perferendis ex illum eos. Reiciendis, velit, vero. Modi nam voluptates maiores veritatis totam amet tempore itaque dicta incidunt architecto sed ad atque repudiandae corporis, iste nostrum molestias quidem. Sint natus obcaecati minus quaerat! Adipisci iure officia, excepturi. Tempora veniam eius expedita illum dolores, ducimus mollitia, nam ipsam fugiat nostrum excepturi quo. Officia, magni consequuntur, ipsa veniam laudantium, quod tenetur voluptatum illo dicta, nostrum cum? Ipsum illo, sapiente dolorum ea accusantium autem laboriosam! Dolorem, neque, vel? Laboriosam explicabo dignissimos suscipit velit ut, incidunt aperiam, beatae perferendis, laborum cumque illum placeat earum ipsum ipsa aliquid pariatur aspernatur. Facilis inventore ad accusantium quibusdam tenetur mollitia eos natus nulla corporis, neque aperiam quaerat quidem fugiat temporibus ipsam, blanditiis ratione eius laborum molestias optio soluta possimus molestiae repellat architecto! Beatae fugit, quibusdam eveniet impedit et quidem debitis, nostrum sapiente harum, ut sequi consectetur dolore deserunt error maxime libero molestias. Sapiente ipsum, asperiores, vitae esse doloribus laborum. Odit sequi in pariatur! Voluptatibus ab quam ex soluta consequuntur! Reprehenderit porro placeat molestias debitis fugiat sint officiis numquam dolore, explicabo facere pariatur, quaerat natus modi, quam cumque officia commodi ex dolorem. Voluptatum amet totam consequatur dolore explicabo, tenetur, ipsum aperiam officiis inventore, dignissimos temporibus molestiae eligendi dolorem unde quas, voluptates eveniet quo! Nobis qui, incidunt harum sequi, accusantium vel perferendis optio corporis quaerat cumque minima tempora, dicta saepe reprehenderit. Rem, officiis mollitia itaque ab exercitationem sed sint non nesciunt recusandae voluptatem, inventore corporis dolorem voluptate quam tempore ratione harum optio. Voluptatibus voluptates sed esse assumenda, repellendus, illum voluptas ducimus. Nesciunt perspiciatis dicta accusantium sint eos debitis, rerum soluta alias, atque adipisci suscipit neque distinctio reiciendis animi delectus sunt quia, ducimus, est velit id commodi facere voluptatem mollitia cupiditate. Quisquam vero ad ab, nemo ea nobis hic saepe voluptate quia sapiente, libero quaerat adipisci voluptatem! Molestias cumque, laudantium reprehenderit commodi ipsum vitae praesentium dolorem magnam sunt est esse modi voluptate facere magni nam iure, itaque rerum dolore inventore delectus! Vitae totam ab voluptatem accusantium sunt dolor nam quo dolorum, aspernatur perferendis doloremque nisi, corporis quos maiores repudiandae hic nemo, laborum necessitatibus aliquam in sequi! Iusto aperiam sapiente dicta nesciunt, magnam sequi commodi placeat perferendis eum fuga id quia omnis, eos illo quae soluta vel nisi ut ea quisquam mollitia magni rerum consequatur. Velit vel ea perferendis aspernatur facere ipsam nobis ipsa, doloribus quibusdam blanditiis qui adipisci deleniti sit corporis voluptates porro optio animi atque! Eum tempora, veritatis quod eaque! In illo rem quos itaque. Mollitia quia laboriosam consectetur provident cupiditate, explicabo, nobis enim veritatis minima voluptate non error praesentium dignissimos in eos placeat, est dolor, neque ad incidunt vero cum! Minus quaerat iusto nam illo, beatae 
        </div>
        <div class="col-12 bg-info text-light" align="center">Copyright @Ryanaldi 2020</div>
      </div>
    </div>

    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>

  </body>
  </html>