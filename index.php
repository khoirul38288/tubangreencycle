<!doctype html>
<html lang="en">
  <head>
    <title>BANK SAMPAH | Beranda</title>
    <link rel="icon" type="image/png" href="img/logo/GreenCycle.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link rel="stylesheet" href="css/manual/style.css">
    <link rel="stylesheet" type="text/css" href="css/style-enfold.css">
    <script src="js/manual/preloader.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
     <!-- Google Fonts -->
   <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,500,600,300,700' rel='stylesheet' type='text/css'>
    <script>
    $(document).ready(function() {
      $(".preloader").fadeOut();
    })
    </script>
  </head>
  <body>
  <!--Pre Loader-->
  <div class="preloader">
    <div class="loading">
      <img src="img/aset/spiner.gif" width="80">
    </div>
  </div>
  <!--Navbar-->
  <hr class="bg-danger fw-bold fixed-top" style="height: 13px; margin: top 15px;">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><img src="img/logo/GreenCycle.png" alt="" style="width:130px; height: auto; object-fit: contain;"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto fw-bold fs-5">
            <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="index.php"><i class="fas fa-home"></i> Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="informasiSampah.php"><i class="fas fa-info-circle"></i> Edukasi Sampah</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active text-white" aria-current="page" href="setoranSampah.php"><i class="fas fa-trash-restore-alt"></i> Setoran Sampah</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active text-white" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-user-circle"></i> Account
              </a>
              <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item text-white" href="registrasi.php"><i class="fas fa-registered"></i> Registration</a></li>
                <li><a class="dropdown-item text-white" href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a></li>
              </ul>
            </li>
                <!-- <a class="nav-link active text-white" aria-current="page" href="#">Beranda</a> -->
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <!--Carousel-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" for="01">
          <img src="img/carousel/banner1.png" class="d-block w-100 bannerimg" alt="" id="01" style=" filter: brightness(50%);">
          <div class="carousel-caption d-none d-md-block ">
            <h5>Proses Pemilahan</h5>
            <p>Proses pemilahan dilakukan oleh masyarakat.</p>
          </div>
        </div>
        <div class="carousel-item" for="02">
          <img src="img/carousel/banner2.png" class="d-block w-100" alt="..." id="02" style=" filter: brightness(50%);">
          <div class="carousel-caption d-none d-md-block ">
            <h5>Proses Penimbangan</h5>
            <p>Proses penimbangan sampah oleh petugas bank sampah.</p>
          </div>
        </div>
        <div class="carousel-item" for="03">
          <img src="img/carousel/banner3.png" class="d-block w-100 bannerimg" alt="..." id="03" style=" filter: brightness(50%);">
          <div class="carousel-caption d-none d-md-block">
            <h5>Stock Sampah</h5>
            <p>Beberapa stock sampah di bank sampah yang sudah berhasil di timbang dan siap untuk di jual.</p>
          </div>
        </div>
        <div class="carousel-item" for="04">
          <img src="img/carousel/banner4.png" class="d-block w-100" alt="..." id="04" style=" filter: brightness(50%);">
          <div class="carousel-caption d-none d-md-block">
            <h5>Pengambilan Sampah</h5>
            <p>Petugas sampah akan mengambil sampah yang telah dipilah secara gratis.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!--konten2-->
     <div class="container-about">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="title-un">GREENCYCLE</h3>
                  <div class="title-un-icon"><i class="fas fa-dumpster"></i></div>
                  <p class="title-un-des" style="text-align: justify;">Platform pengolahan sampah yang kami kembangkan membantu masyarakat tuban dalam meningkatkan kesadaran mereka akan pentingnya pengolahan sampah yang benar dengan memberikan solusi berupa penyediaan layanan ambil sampah gratis, pemberian alat pengolah sampah dan reward yang diperoleh dari pemilahan sampah yang dilakukan oleh pengguna.</p>
               </div>
            </div>
          </div>
      </div>
      <div class="container-newsletter">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="title-un">CARA BERGABUNG DENGAN GREENCYCLE</h3>
                  <div class="title-un-icon"><i class="fab fa-accusoft"></i></div>
                  <div class="title-un-des" style="text-align: justify;">Tahap Bergabung Program Bank Sampah:
                  <ol>
                    <li>Pendaftaran : Masyarakat yang ingin menyetorkan sampah harus mendaftar terlebih dahulu</li>
                    <li>Pemilahan : Sampah harus dipilah berdasar jenis-jenisnya</li>
                    <li>Penimbangan : Sampah ditimbang untuk mengetahui berat sampah yang akan disetorkan</li>
                    <li>Mendapat Keuntungan : Masyarakat memperoleh sejumlah keuntungan setelah menukarkan sampah mereka</li>
                  </ol>
                  </div>
      <div id="foo">
      <section class="team">
          <div class="row mgt50px">
            <div class="coloumn">
              <div class="imgBox">
                <img src="img/content/1.png">
              </div>
              <div class="details">
                <h3>Tahap 1<br><span>Lakukan Pendaftaran</span></h3>
              </div>
            </div>
            <div class="coloumn">
              <div class="imgBox">
                <img src="img/content/2.png">
              </div>
              <div class="details">
                <h3>Tahap 2<br><span>Pemilahan Sampah</span></h3>
              </div>
            </div>
            <div class="coloumn">
              <div class="imgBox">
                <img src="img/content/3.png">
              </div>
              <div class="details">
                <h3>Tahap 3<br><span>Pengmabilan Sampah</span></h3>
              </div>
            </div>
            <div class="coloumn">
              <div class="imgBox">
                <img src="img/content/4.png">
              </div>
              <div class="details">
                <h3>Tahap 4<br><span>Mendapat Keuntungan</span></h3>
              </div>
            </div>
            <div style="clear: both;"></div>
          </div>
        </div>
      </section>
      </div>
    </div>
  </div>
</div>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="asset/internal/js/index.js"></script>
    
    <!--konten maps-->
    <br>
    <div class="container-about">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="title-un">LOKASI GREENCYCLE TUBAN</h3>
                  <div class="title-un-icon"><i class="fas fa-map-marked-alt"></i></div>
                  <p class="title-un-des">
                  <div class="embed-responsive embed-responsive-21by9 mt-3 ms-3">
          <iframe src="https://www.google.com/maps/place/Tuban,+Kec.+Tuban,+Kabupaten+Tuban,+Jawa+Timur/@-6.8933652,112.0016669,13z/data=!3m1!4b1!4m6!3m5!1s0x2e77a2c48649d9c1:0x14db680216ccc11d!8m2!3d-6.8949099!4d112.0416754!16zL20vMGQyMWpm?entry=ttu&g_ep=EgoyMDI0MTIxMS4wIKXMDSoASAFQAw%3D%3D" width="98%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
               </div>
            </div>
          </div>
      </div>
    </div>
    <!--footer-->
    <br>
    <footer class="footer-distributed" style="width: 100%;">
      <div class="footer-left">
        
        <div class="logo">
          <img src="img/logo/kementrian.png" alt="" style="width: 125px;">
          <img src="img/logo/GreenCycle.png" alt="" style="width: 225px;">
        </div>
        <br>
        <p class="footer-company-about">
          <span>Kementerian Lingkungan Hidup dan Kehutanan <br>
                Direktorat Jenderal Pengelolaan Sampah, Limbah dan B3 <br>
                Direktorat Pengelolaan Sampah
          </span>
        </p>
        <!-- <h3>BANK SAMPAH MLIRIPROWO</h3> -->
      </div>
      <div class="footer-center">
        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>Sidorejo</span> Kabupaten Tuban.</p>
        </div>
        <div>
          <i class="fa fa-phone"></i>
          <p><a href="sms:(+62)85749469501">(+62)81222333444</a></p>
        </div>
        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:bank_mliriprowo@gmail.com">banksampah@gmail.com</a></p>
        </div>
      </div>
      <div class="footer-right">
        <p class="footer-company-about">
          <span>Kunjungi Sosial Media Kami!</span>
          Untuk yang ingin lebih dekat dengan Bank Sampah, silahkan kunjungi sosial media kami dibawah ini!
        </p>
        <div class="footer-icons">
          <a href="#" target="_blank"><i class="fab fa-instagram-square"></i></a>
          <a href="#" target="_blank"><i class="fab fa-facebook-square"></i></a>
          <a href="#" target="_blank"><i class="fab fa-twitter-square"></i></a>
        </div>
      </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>