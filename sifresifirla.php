<!DOCTYPE html>
<html lang="en">
<?php 
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                    <a href="index.php" class="nav-item nav-link active"><font size="5">Ana Sayfa</font></a>
                    <a href="contact.php" class="nav-item nav-link"><font size="5">İletişim</font></a>
                </div>
                 <a href="uyegirisi.php" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Üye Girişi<i class="fa fa-arrow-right ms-3"></i></a>
            </div>
            <br>

                        &nbsp;&nbsp;
            <div id="shopping-cart" style="width:50px">
                 <!-- Sepet butonu -->
                <center><div id="cart-button">Sepet (<span id="cart-item-count">0</span>)</div></center>
        <!-- Sepet içeriği -->
        <div id="cart-content">
            <h2>Sepet</h2>
            <ul id="cart-items-content">
                <!-- Cart items will be added here dynamically -->
            </ul>
            <center><p style="color: #FF7F00; font-family: 'Lobster Two'; font-size: 25px;" >Toplam: ₺<span id="cart-total-content">0.00</span></p></center>
            <center><button id="checkout-cart-button" class="text-white bg-primary text-white rounded-pill py-2 px-3">Sepete Git</button></center>



        </nav>
         <nav class="navbar navbar-expand-lg bg-white navbar-light px-4 px-lg-5 py-lg-0"  style="height:70px"> 
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href='bebek_takımları.php' class='nav-item nav-link'><font size='3'>Bebek Takımları</font></a>
                    <a href='bebek_tulumları.php' class='nav-item nav-link'><font size='3'>Bebek Tulumları</font></a>
                    <a href='ceyiz.php' class='nav-item nav-link'><font size='3'>Çeyiz</font></a>
                    <a href='citcitli_body.php' class='nav-item nav-link'><font size='3'>Çıtçıtlı Body</font></a>
                    <a href='elbise_jile.php' class='nav-item nav-link'><font size='3'>Elbise Jile</font></a>
                    <a href='hastane_cikisi.php' class='nav-item nav-link'><font size='3'>Hastane Çıkışı</font></a>
                    <a href='havlu_bornoz.php' class='nav-item nav-link'><font size='3'>Havlu Ve Bornoz Takımları</font></a>
                    <a href='mont_hırka.php' class='nav-item nav-link'><font size='3'>Mont Ve Hırka</font></a>
                </div>
            </div>
            <br>

        </nav>
        <!-- Navbar End -->
        <!-- Carousel Start -->
        <!-- Carousel End -->
        <!-- Facilities Start -->
        <!-- Facilities End -->
        <!-- About Start -->
        <!-- About End -->
        <!-- Call To Action Start -->
        <!-- Call To Action End -->
        <!-- Classes Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3"><font color="#0f7791">Hesabım</font></h1>
                </div>
				<div class="row g-4" style="width: 850px;">
                    <center>
                    <div style="max-width: 400px; margin-left: 450px;">
                        <form name="frmUser" method="post" action="" align="center">
                        <h2 align="center"><font color="#FF7F00">Şifremi Unuttum</font></h2><br>

                        <input type="email" name="eposta" id="Eposta" placeholder="Eposta Giriniz" required>

                        <button id="submit" class="bg-primary text-white rounded-pill py-2 px-3">Gönder</button>
                        <h3><p id="message"  style="color:#FF7F00;"></p></h3>
                        </form>
                        </center>
                    </div>
                    <script>
                        $(document).ready(function() {
                            $("#submit").click(function() {
                                event.preventDefault();
                                var Eposta = $("#Eposta").val();
                                $.ajax({
                                    url: 'SifreSifirlaIsle.php',
                                    type: 'POST',
                                    data: {eposta: Eposta},
                                    success: function(response) {
                                        $("#message").html(response);
                                    }
                                });
                            });
                        });
                    </script>
				</div>
			</div>
		</div>
        <!-- Classes End -->
        <!-- Appointment Start -->
        <!-- Appointment End -->
        <!-- Team Start -->
        <!-- Team End -->
        <!-- Testimonial Start -->
        <!-- Testimonial End -->
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