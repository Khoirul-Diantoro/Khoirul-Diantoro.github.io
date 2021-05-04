 <?php
session_start();

if (empty($_SESSION['Nama'])) {
    echo "<script>alert('Maaf, untuk mengakses halaman ini, anda harus login terlebih dahulu, terima kasih');document.location='index.html'</script>";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>SlampirKuy | Contact Us</title>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
   
    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" href="img/lomba.png">

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm" >
  <div class="container">
    <a class="navbar-brand" href="contact.php">SlampirKuy</a>
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
          <a class="nav-link active" href="contact.php">Contact Us</a>
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

<!--- contact us --->
<div class="container">
  <main>
    <div class="py-5 text-center">
     
      <h2>Contact us</h2>
      <p class="lead">Silahkan isi data dibawah</p>
    </div>

    <div class="row g-5 ">

      <div class="col-md-7 col-lg-8">
       
        <form class="needs-validation" method="post" action="input_komen.php" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">First name</label>
              <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Last name</label>
              <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Username</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email"  name="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Coment</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" name="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Send</button>
        </form>
      </div>
    </div>
  </main>
</div>



  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#0099ff" fill-opacity="1" d="M0,224L21.8,202.7C43.6,181,87,139,131,144C174.5,149,218,203,262,224C305.5,245,349,235,393,202.7C436.4,171,480,117,524,117.3C567.3,117,611,171,655,186.7C698.2,203,742,181,785,197.3C829.1,213,873,267,916,282.7C960,299,1004,277,1047,266.7C1090.9,256,1135,256,1178,256C1221.8,256,1265,256,1309,234.7C1352.7,213,1396,171,1418,149.3L1440,128L1440,320L1418.2,320C1396.4,320,1353,320,1309,320C1265.5,320,1222,320,1178,320C1134.5,320,1091,320,1047,320C1003.6,320,960,320,916,320C872.7,320,829,320,785,320C741.8,320,698,320,655,320C610.9,320,567,320,524,320C480,320,436,320,393,320C349.1,320,305,320,262,320C218.2,320,175,320,131,320C87.3,320,44,320,22,320L0,320Z"></path></svg>


<!-- footer -->

        <footer class="page-footer teal darken-4.">

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
            Copyright &copy; 2021 Salmpirkuy.com
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
