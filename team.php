 <?php
session_start();

if (empty($_SESSION['Nama'])) {
    echo "<script>alert('Maaf, untuk mengakses halaman ini, anda harus login terlebih dahulu, terima kasih');document.location='index.html'</script>";
}

?>
 <!DOCTYPE html>
  <html>
    <head>
      <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Team | SlampirKuy</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="materialize.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="img/lomba.png">
    </head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm fixed-top" >
  <div class="container">
    <a class="navbar-brand" href="#">SlampirKuy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="awal.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="artikel.php">Artikel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="team.php">Our Team</a>
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

<nav></nav>

  <!-- sidenav -->

   <!-- our team -->
  <section id="section" class="section grey lighten-4 ">
    <div class="container">
      <div class="row">
        <p class="light center grey-text text-darken-3"> Kategori </p>
        <h3 class=" light center grey-text text-darken-4"> Our Team </h3>
      </div>
    </div>
  </section>

<section>
  <div class="card-panel grey lighten-5 z-depth-1">
    <div class="row">
      <div class="col-md s6 center">
        <img src="image/team1.0.jpg" class="rounded-circle responsive-img" width="300">
        <h5>Farhanang Wahyu Aprian</h5>
        <p class="light grey-text text-darken-3">@zypweee</p>
        <p class="light grey-text text-darken-3">E-mail: farhanwa243@student.uns.ac.id</p>
      </div>
      <div class="col-md s6 center">
        <img src="image/Khoirul.jpg" class="rounded-circle responsive-img" width="280">
        <h5>Khoirul Diantoro</h5>
        <p class="light grey-text text-darken-3">@khoirul_bodho</p>
        <p class="light grey-text text-darken-3">E-mail:khoirulmba1@student.uns.ac.id</p>
      </div>
    </div>
  </div>
</section>

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

</body>
