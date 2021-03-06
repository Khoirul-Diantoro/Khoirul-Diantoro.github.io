<?php
session_start();

if (empty($_SESSION['Nama'])) {
    echo "<script>alert('Maaf, untuk mengakses halaman ini, anda harus login terlebih dahulu, terima kasih');document.location='index.html'</script>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Artikel | SlampirKuy</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="materialize.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="icon" href="img/lomba.png">


</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" >
  <div class="container">
    <a class="navbar-brand" href="artikel.html">SlampirKuy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="awal.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="artikel.php">Artikel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="team.php">Our Team</a>
        </li>
        <li>
          <a href="logout.php" class="btn btn-outline-primary"><?php 
          if (!empty($_SESSION['Nama'])){
            
           ?>Hello, <b><?= $_SESSION['Nama'] ?> <?php 
           
           } 
           else {
            echo "Login";
           }
           ?></a>

        </li>
        
      </ul>
    </div>
  </div>
</nav>
	
	<!-- Ini adalah paragraf

	-->
	<section id="Artikel">
    <section class="py-5  text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-3 col-md-8 mx-auto">
        <h1 class="fw-light">Artikel</h1>
        <p class="lead text-muted">Berisi artikel singkat yang menceritakan wisata ini</p>
       
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="img/jernih.jpeg" class="card-img-top" alt="Artikel 1">

            <div class="card-body">
            <h5 class="card-title">Jernihnya Air Terjun Slampir</h5>
            <p class="card-text">Disini air jernih sekali.</p>
            <a href="artikel1.html" class="btn" style="background-color: #D4F1F4">Baca sekarang!</a>
            </div>
              </div>
            </div>
            <!-- ARtikel 2 -->

            <div class="col">
          <div class="card shadow-sm">
            <img src="img/lokasi.jpeg" class="card-img-top" alt="Artikel 2">

            <div class="card-body">
            <h5 class="card-title">Lokasi Air Terjun Slampir</h5>
            <p class="card-text">Berlokasi di lereng gunung wilis.</p>
            <a href="artikel2.html" class="btn" style="background-color: #D4F1F4">Baca sekarang!</a>
            </div>
              </div>
            </div>
            <!-- Artikel 3 -->

            <div class="col">
          <div class="card shadow-sm">
            <img src="img/airterjun.jpeg" class="card-img-top" alt="...">

            <div class="card-body">
            <h5 class="card-title">Keindahan air terjun</h5>
            <p class="card-text">Ketika perjalanan dapat langsung menyaksikan keindahannya.</p>
            <a href="artikel3.html" class="btn" style="background-color: #D4F1F4">Baca sekarang!</a>
            </div>
              </div>
            </div>
             
      </div>
    </div>
  </div>
    
	</section>
	
	<!-- Ini adalah akhir paragraf

	-->
  <!-- footer -->

    <footer class="page-footer black darken-4 ">
          <div class="container">
            <div class="row">
              <div class="col s12">
                <h5 class="white-text center">Salam Traveller !</h5>
                <p class="grey-text text-lighten-4 center">Cari Asiknya Disini <br>Bersama Kawan - Kawan</p>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            Copyright &copy; 2021 SlampirKuy.com
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
