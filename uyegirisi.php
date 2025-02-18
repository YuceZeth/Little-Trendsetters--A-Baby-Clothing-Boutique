<!DOCTYPE html>
<html lang="en">
<?php
error_reporting(0);
include("baglan.php"); 
?>

<head>
    <meta charset="utf-8">
    <title>Çakıl Bebek</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon" >

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->

        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index.php" class="navbar-brand">
                <h1 class="m-0 text-primary"><img src="img/logo.png" width="90" height="90"></i><font color="#0f7791">Çakıl</font> Bebek</h1>
            </a>    
            <div class="collapse navbar-collapse" id="navbarCollapse" >
                <div class="navbar-nav mx-auto">
                    <a href="index.php" class="nav-item nav-link"><font size="5">Ana Sayfa</font></a>
                    <a href="contact.php" class="nav-item nav-link"><font size="5">İletişim</font></a>
                </div>
                <a href="uyegirisi.php" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Üye Girişi<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
            <br>
        </nav>
        <!-- Navbar End -->
        <!-- Page Header End -->
        <!-- Page Header End -->
        <!-- Contact Start -->
        <?php
          session_start();
          $message="";
          if(count($_POST)>0) {
            $result = mysqli_query($conn,"select * from uyeler where uye_mail='".$_POST["eposta"]."'");
            $row  = mysqli_fetch_array($result);
            if($row['uye_sifre'] == $_POST['sifre']) {
              $_SESSION["id"] = $row[0];
              $_SESSION["name"] = $row[1];
            } else {
              $message = "<p id='renk-degistir' style='font-family:Lobster Two;font-size:30px'>Geçersiz Eposta Şifre</p>";
            }
          }
          if(isset($_SESSION["id"])) {
            header("Location:kuyegirisi.php");
          }
        ?>
        <div class="container-xxl py-5">
            <div class="container">
              <center>
                <form name="frmUser" method="post" action="" align="center" style="width: 400px">
                  <div class="message"><?php if($message!="") { echo $message; } ?></div>
                  <h2 align="center"><font color="#FF7F00">Üye Girişi</font></h2>
                  <p align="center" style="width:275px;"><font color="#FF7F00">E-Posta</font></p>
                  <input type="text" name="eposta">
                  <br>
                  <br>
                  <p align="center" style="width:250px;"><font color="#FF7F00">Şifre</font></p>
                  <input type="password" name="sifre">
                  <br><br>
                  <input type="submit" class="bg-primary text-white rounded-pill py-2 px-3" name="submit" value="Giriş">
                  <input type="reset" class="bg-primary text-white rounded-pill py-2 px-3">
                  <br>
                  <br>
                  <a href="Kayıt.php"><h2><font color="#FF7F00">Kayıt Ol</font></h2></a>
                  <a href="sifresifirla.php"><h2><font color="#FF7F00">Şifremi Unuttum</font></h2></a>
                </form></center>
            </div>
        </div>
        <!-- Contact End -->
        <!-- Footer Start -->
                     <div class="container-fluid  text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s" style="background-color: #ff5c34;">
            <center><a href="https://www.instagram.com/cakilbebek.34/" target="_blank" ><img src="img/insta.png" width="100" height="100"></a></center>
            <div class="container py-5">
            <div class="container">
                    <center><font color="white">Desing By yzshownolove</font></center>
            </div>
        </div>
        <!-- Footer End -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>