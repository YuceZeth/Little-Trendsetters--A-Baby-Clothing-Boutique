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
        if (count($_POST)>0) {
          $kadi = $_POST["kadi"];
          $sifre = $_POST["sifre"];
          $eposta = $_POST["eposta"];
          $sehir  = $_POST["sehir"];
          $ilce  = $_POST["ilce"];
          $posta_kodu  = $_POST["posta-kodu"];
          $adres = $_POST["adres"];
          $say = 0;
          $sorgu = mysqli_query($conn, "select * from uyeler");
          while ($doldur = mysqli_fetch_array($sorgu)) {
            if ($doldur['uye_mail'] == $kadi && $doldur['uye_sifre'] == $sifre) {
              $say = $say + 1;
            }
          }
          if ($say > 0) {
            echo "<center><p id='renk-degistir'style='font-family:Lobster Two;font-size:30px;'>Üye Zaten Kayıtlı.</p></center>";
          } else { 
          $sql = mysqli_query($conn,"Insert Into uyeler (uye_adsoyad, uye_sifre, uye_mail, uye_sehir, uye_ilce, uye_posta_kodu, uye_adres, sifresıfırlamaistek, tur) VALUES ('".$kadi."', '".$sifre."', '".$eposta."', '".$sehir."', '".$ilce."', '".$posta_kodu."', '".$adres."', '0', '0')");
          echo "<center><p id='renk-degistir'style='font-family:Lobster Two;font-size:30px;'>Kayıt İşlemi Gerçekleşti.</p></center>";
          }
        }
        ?>
        <div class="container-xxl py-5">
            <div class="container">
                <center>
                    <form name="frmUser" method="post" action=""  align="center" style="width: 400px" >
                    <h2 align="center"><font color="#FF7F00">Üye Girişi</font></h2>
                    <font color="#FF7F00">İsim & Soyisim : </font><br>
                    <input type="text" name="kadi" required minlength='3' maxlength='21'>
                    <br><br>
                    <font color="#FF7F00">Şifre : </font><br>
                    <input type="password" name="sifre" required minlength='3' maxlength='21'>
                    <br><br>
                    <font color="#FF7F00">E-posta  : </font><br>
                    <input type="email" name="eposta" required >
                    <br><br>
                    <font color="#FF7F00">Şehir : </font><br>
                    <input type="text" name="sehir" required minlength='3' maxlength='21'>
                    <br><br>
                    <font color="#FF7F00">İlçe : </font><br>
                    <input type="text" name="ilce" required minlength='3' maxlength='21'>
                    <br><br>
                    <font color="#FF7F00">Posta Kodu : </font><br>
                    <input type="text" name="posta-kodu" required minlength='3' maxlength='21'>
                    <br><br>
                    <font color="#FF7F00">Adres : </font><br>
                    <textarea name="adres" rows="5" cols="30" placeholder="Adres" required></textarea>
                    <br><br>
                    <input type="submit" class="bg-primary text-white rounded-pill py-2 px-3" name="submit" value="Kayıt Ol">
                    <input type="reset" class="bg-primary text-white rounded-pill py-2 px-3">
                    <p align='center'>Üye Girişi için <a href='Uyegirisi.php' tite='Çıkış'> tıklayınız.</p>
                  </form>
              </center>
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