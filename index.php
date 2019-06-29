<?php  
  include 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="styletambahan.css">
    <link rel="stylesheet" type="text/css" href="maps.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
   
   
    <nav class="navbar navbar-expand-lg navbar navbar-light bg-white fixed-top" >
      <a class="navbar-brand" href="#">Desa Beringin</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Profil Desa
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Sejarah Desa</a>
              <a class="dropdown-item" href="#">Profil Wilayah Desa</a>
              <a class="dropdown-item" href="#">Arti Lambang Desa</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Pemerintahan Desa
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Visi dan Misi</a>
              <a class="dropdown-item" href="#">Pemerintah Desa</a>
              <a class="dropdown-item" href="#">Badan Permusyawaratan Desa</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              LemMas
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">LPM</a>
              <a class="dropdown-item" href="#">Karang Taruna</a>
              <a class="dropdown-item" href="#">PKK</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Data Desa
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Data Wilayah Administratif</a>
              <a class="dropdown-item" href="#">Data Pendidikan dalam KK</a>
              <a class="dropdown-item" href="#">Data Perkawaninan</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Cari informasi tentang" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
        </form>
      </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="foto/a.jpg" alt="First slide" height="620px">
          <div class="carousel-caption">
           <h5>Tarian Kebudayaan Sumatera Selatan</h5>
           <p>Tarian Kebudayaan Sumatera Selatan Ditampilkan oleh Mahasiswi Sumatera Selatan di Yogyakarta</p>
          </div>
        </div>


        <div class="carousel-item">
          <img class="d-block w-100" src="foto/b.jpg" alt="Second slide" height="620px">
          <div class="carousel-caption">
            <h5>Tarian Kebudayaan Sumatera Selatan</h5>
            <p>Tarian Kebudayaan Sumatera Selatan Ditampilkan oleh Mahasiswi Sumatera Selatan di Yogyakarta</p>
          </div>
        </div>
        
        <div class="carousel-item">
          <img class="d-block w-100" src="foto/c.jpg" alt="Third slide" height="620px">
          <div class="carousel-caption">
            <h5>Tarian Kebudayaan Sumatera Selatan</h5>
            <p>Tarian Kebudayaan Sumatera Selatan Ditampilkan oleh Mahasiswi Sumatera Selatan di Yogyakarta</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

    <div class="container-fluid">
 
      <div class="row">
        <div class="col-xl-8">
        
          <h2 class="text-center mt-3 mb-2">Artikel Terkini</h2>
          
          <!-- ARTIKEL -->
          <?php 
            $sql    = "SELECT * FROM artikel";
            $query  = (mysqli_query($db, $sql));

            while ($artikel = mysqli_fetch_array($query)) {
              # code...
            

          echo "<ul class='list-unstyled'>";
            echo "<li class='media mb-3'>";
              echo "<img class='mr-3' src='foto/1.jpg' width='300px;' alt='Generic placeholder image'>";
              echo "<div class='media-body'>";
                echo "<h5 class='mt-0 mb-1'>".$artikel['judul_artikel']."</h5>";
                echo $artikel['isi_artikel'];
              echo "</div>";
            echo "</li>";

            }

           ?>

            <!-- ARTIKEL ISI 4 KOLOM -->
            <!-- <li class="media my-4">
              <img class="mr-3" src="foto/2.jpg" width="300px;" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0 mb-1">List-based media object</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </li>
            <li class="media my-4">
              <img class="mr-3" src="foto/2.jpg" width="300px;" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0 mb-1">List-based media object</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </li>
            <li class="media">
              <img class="mr-3" src="foto/3.jpg" width="300px;" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0 mb-1">List-based media object</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
              </div>
            </li> -->

          </ul>

          <!-- Pagination -->
          <nav aria-label="Page navigation example" class="mt-3">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                  <span aria-hidden="true">&laquo;</span>
                  <span class="sr-only">Previous</span>
                </a>
              </li>
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                  <span aria-hidden="true">&raquo;</span>
                  <span class="sr-only">Next</span>
                </a>
              </li>
            </ul>
          </nav>

        </div> <!-- TUTUP COL XL 8 -->
      
        <div class="col-xl-4"> 
            <div class="mt-3 mr-3 mb-2"> 
              <h2 class="text-center">Pemimpin Daerah</h2>
              <div class="card">
                <img class="card-img-top" src="foto/pahry.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title text-center">PAHRIDILA LINTANG</h5>
                  <p class="text-justify">"Sumatera Selatan kota maju, lestari, dan berbudaya yang warganya terlibat dalam mewujudkan keberadaban, keadilan dan kesejahteraan semua."</p>
                  <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                </div>
              </div>
            </div>
        

            <h2 class="text-center">Peta Desa</h2>
            <div class="ml-5">
            <div id="map-container-google-2" class="z-depth-1-half map-container">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d254946.88418804138!2d104.26500416239736!3d-3.2133975482843087!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3bb11576a317f7%3A0x6a63d5930748f2f1!2sGelumbang%2C+Kabupaten+Muara+Enim%2C+Sumatera+Selatan!5e0!3m2!1sid!2sid!4v1561481072549!5m2!1sid!2sid" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div> <!-- Tutup Col-xl-4 -->
        
        </div> <!-- Tutup Col-xl-4 -->
      
      </div><!-- Tutup ROW -->

    </div><!-- Tutup Container -->
 

    <!-- Footer -->
    <footer class="section footer-classic context-dark bg-image mt-4" style="background: #2d3246;">
        <div class="container">
          <div class="row row-30 pt-3">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4">
                <h5>BERINGIN.GO.ID</h5>
                <p>Beringin, Lubai, Muara Enim, Sumatera Selatan</p>
                <p>beringin@gmail.com</p>
                <!-- Rights-->
                <p class="rights"><span>© </span><span class="copyright-year">2019</span><span> </span><span>Pahry Developer</span><span>.</p>
              </div>
            </div>
            <div class="col-md-4">
              <h5>Contacts</h5>
              <dl class="contact-list">
                <dt>Alamat Kantor Camat Lubai :</dt>
                <dd>Jl. Raya Beringin No.1, Sumatera Selatan</dd>
              </dl>
              <dl class="contact-list">
                <dt>Telepon</dt>
                <dd>+62811223344</dd>
              </dl>
              <dl class="contact-list">
                <dt>Faks</dt>
                <dd>(+6221) 311 1225 <span>
                </dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-3">
              <h5>Links</h5>
              <ul class="nav-list">
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Google</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
</body>
</html>