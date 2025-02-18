<!DOCTYPE html>
<html lang="en">
<?php 
include("baglan.php");
session_start();
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
                    <h1 class="mb-3"><font color="#0f7791">Siparişi Tamamla.</font></h1>
                </div>
                <center>




<div class="row g-4" style="width: 850px;">
    <!-- Sepet içeriği ile ödeme sayfası -->
    <?php
        $cerez = rand(1, 99999999999999999);
        $sorgu = mysqli_query($conn, "select * from uyesiz_kapida");
        while ($doldur = mysqli_fetch_array($sorgu)) {
            if ($doldur['cerez'] == $cerez) {
                $cerez = rand(1, 99999999999999999);
            }
        }



        $ad_soyad = $_REQUEST['ad-soyad'];
        $telefon = $_REQUEST['telefon'];
        $sehir = $_REQUEST['sehir'];
        $ilce = $_REQUEST['ilce'];
        $posta_kodu = $_REQUEST['posta-kodu'];
        $odeme_secenekleri = $_REQUEST['odeme-secenekleri'];
        $adres = $_REQUEST['adres'];
        $urun_isim = $_REQUEST['urun_isim'];
        $urun_url = $_REQUEST['urun_url'];
        $quantitiesJSON = $_REQUEST['quantities'];
        $quantities = json_decode($quantitiesJSON, true);
        $combinedQuantity = "";
        $deger = 0;
        foreach ($quantities as $item) {
            $productName = $item['productName'];
            $combinedQuantity .= $productName ."Adet : (".$item['quantity'].") ";
            $deger = $item['quantity']*1;
        }


        $urunler = $urun_isim;
        // Noktalı virgüllerle ayrılmış blokları ayır
        $blocks = explode(';', $urunler);
        $urundizi = array(); 
        foreach ($blocks as $block) {
            $trimmedBlock = trim($block);
            $textStart = substr($trimmedBlock, 0, strpos($trimmedBlock, '('));
            $usorgu = mysqli_query($conn, "select * from urunler where urun_isim='".$textStart."'");
            while ($doldur = mysqli_fetch_array($usorgu)) {
                $urundizi[] = $doldur['urun_fiyat'];
            }
        }
        $length = count($blocks);

        $text2 = $combinedQuantity;
        $pattern = '/\((\d+)\)/';

        $adetler = array();
        if (preg_match_all($pattern, $text2, $matches)) {
            // Bulunan sonuçları yazdıralım
            foreach ($matches[1] as $match) {
                $adetler[] = $match;
            }
        }
        if ($deger != 0) {
            $toplam_fiyat = 0;
            for ($i=0; $i < $length - 1; $i++) { 
                $toplam_fiyt = $urundizi[$i] * $adetler[$i];
                $toplam_fiyat = $toplam_fiyat + $toplam_fiyt;
            }
        } else{
            $toplam_fiyat = 0;
            for ($i=0; $i < $length - 1; $i++) { 
                $toplam_fiyat = $toplam_fiyat +  $urundizi[$i] * 1;
            }
        }
       
        if (isset($_SESSION["id"])) {
            $id = $_SESSION['id'];
            if ($odeme_secenekleri == 'kredi-karti') {
                echo "
                <form action='sepetisle.php' method='post' id='sepetisle'>
                <div id='kredi-karti-info' style='display: block;'>
                    <h3>Kredi Kartı Bilgileri:</h3>
                    <input type='text' id='kart-sahibi' placeholder='Kart Sahibi' required>
                    <input type='text' id='kart-no' placeholder='Kredi Kartı Numarası' required maxlength='19'>
                    <input type='text' id='son-kullanma-tarihi' placeholder='Son Kullanma Tarihi' required>
                <input type='text' id='guvenlik-kodu' placeholder='Güvenlik Kodu' required maxlength='3' oninput='this.value = this.value.replace(/[^0-9]/g, '');'>
                </div>
                <br>
                <button id='complete-order-button' class='btn btn-primary'>Alışverişi Tamamla</button>
                </form>
                ";
                $sql = mysqli_query($conn, "insert into uyeli_sepet (ad_soyad, telefon, sehir, ilce, posta_kodu, adres, urun_isimler, urun_resimler, toplamfiyat, adet, uye_id, odemeturu, durum) VALUES ('".$ad_soyad."', '".$telefon."', '".$sehir."', '".$ilce."', '".$posta_kodu."', '".$adres."', '".$urun_isim."', '".$urun_url."', '".$toplam_fiyat."', '".$combinedQuantity."', '".$id."', '".$odeme_secenekleri."', 'Hazırlanıyor')");
            }
            if ($odeme_secenekleri == 'kapida-odeme') {
                echo "<h3 style='display: inline;'>Siparişiniz Alındı.</h3>";
                $sql = mysqli_query($conn, "insert into uyeli_sepet (ad_soyad, telefon, sehir, ilce, posta_kodu, adres, urun_isimler, urun_resimler, toplamfiyat, adet, uye_id, odemeturu, durum) VALUES ('".$ad_soyad."', '".$telefon."', '".$sehir."', '".$ilce."', '".$posta_kodu."', '".$adres."', '".$urun_isim."', '".$urun_url."', '".$toplam_fiyat."', '".$combinedQuantity."', '".$id."', '".$odeme_secenekleri."', 'Hazırlanıyor')");
            }
        } else {
            if ($odeme_secenekleri == 'kredi-karti') {
                echo "
                <form action='sepetisle.php' method='post' id='sepetisle'>
                <div id='kredi-karti-info' style='display: block;'>
                    <h3>Kredi Kartı Bilgileri:</h3>
                    <input type='text' id='kart-sahibi' placeholder='Kart Sahibi' required>
                    <input type='text' id='kart-no' placeholder='Kredi Kartı Numarası' required maxlength='19'>
                    <input type='text' id='son-kullanma-tarihi' placeholder='Son Kullanma Tarihi' required>
                <input type='text' id='guvenlik-kodu' placeholder='Güvenlik Kodu' required maxlength='3' oninput='this.value = this.value.replace(/[^0-9]/g, '');'>
                </div>
                <br>
                <button id='complete-order-button' class='btn btn-primary'>Alışverişi Tamamla</button>
                </form>
                ";
                $sql = mysqli_query($conn, "insert into uyesiz_kredi (ad_soyad, telefon, sehir, ilce, posta_kodu, adres, urun_isimler, urun_resimler, toplamfiyat, adet, cerez, durum) VALUES ('".$ad_soyad."', '".$telefon."', '".$sehir."', '".$ilce."', '".$posta_kodu."', '".$adres."', '".$urun_isim."', '".$urun_url."', '".$toplam_fiyat."', '".$combinedQuantity."', '".$cerez."', 'Hazırlanıyor')");
            }
            if ($odeme_secenekleri == 'kapida-odeme') {
                echo "<h3 style='display: inline;'>Siparişiniz Alındı.</h3>";
                $sql = mysqli_query($conn, "insert into uyesiz_kapida (ad_soyad, telefon, sehir, ilce, posta_kodu, adres, urun_isimler, urun_resimler, toplamfiyat, adet, cerez, durum) VALUES ('".$ad_soyad."', '".$telefon."', '".$sehir."', '".$ilce."', '".$posta_kodu."', '".$adres."', '".$urun_isim."', '".$urun_url."', '".$toplam_fiyat."', '".$combinedQuantity."', '".$cerez."', 'Hazırlanıyor')");
            }
        }
    ?>
</div>
<br>
<div id="payment-container" style="text-align: right; margin-right: 20px;">
    <div id="total-price" style="text-align: right; display: inline-block;">
        <h2 style="display: inline; margin-right: 20px;"><font color='#FF7F00'>Toplam Fiyat: <span id="total-price-value"><?php 
        echo $toplam_fiyat; ?>₺</font></span></h2>
    </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function () {
    const sonKullanmaTarihiInput = document.getElementById("son-kullanma-tarihi");

    sonKullanmaTarihiInput.addEventListener("input", function (event) {
        // Kullanıcının girdiği karakterleri kontrol et
        const inputValue = event.target.value;
        const sanitizedValue = inputValue.replace(/\D/g, ''); // Sadece rakam karakterlerini tut

        // İlgili `input` alanını temizlenmiş değerle güncelle
        event.target.value = formatAsExpirationDate(sanitizedValue);
    });
});

function formatAsExpirationDate(inputValue) {
    // MM/YY biçimine dönüştürmek için girilen değeri işle
    if (inputValue.length > 2) {
        // İlk iki karakter MM (ay) olarak kabul edilir, sonraki karakterler YY (yıl) olarak kabul edilir.
        const month = inputValue.slice(0, 2);
        const year = inputValue.slice(2, 4);

        // MM/YY biçimine dönüştür ve sonuç olarak döndür
        return `${month}/${year}`;
    }

    return inputValue;
}

document.addEventListener("DOMContentLoaded", function () {
    const kartNoInput = document.getElementById("kart-no");

    kartNoInput.addEventListener("input", function (event) {
        // Kullanıcının girdiği karakterleri kontrol et
        const inputValue = event.target.value;
        const sanitizedValue = inputValue.replace(/\D/g, ''); // Sadece rakam karakterlerini tut

        // İlgili `input` alanını temizlenmiş değerle güncelle ve "-" ekleyin
        event.target.value = formatAsCardNumber(sanitizedValue);
    });
});

function formatAsCardNumber(inputValue) {
    // Her 4 karakter sonrası "-" eklemek için girilen değeri işle
    if (inputValue.length > 4) {
        const formattedValue = inputValue.match(/.{1,4}/g).join('-');
        return formattedValue;
    }

    return inputValue;
}
</script>
<script type="text/javascript">
            // JavaScript code to handle the shopping cart functionality
            // Get the product list and cart
            const productList = document.getElementById('product-list');
            const cartItems = document.getElementById('cart-items');
            const cartTotal = document.getElementById('cart-total');
            const cartButton = document.getElementById('cart-button'); // Sepet butonu
            const cartContent = document.getElementById('cart-content'); // Sepet içeriği
            const cartItemsContent = document.getElementById('cart-items-content');
            const cartTotalContent = document.getElementById('cart-total-content');
            const cartItemCount = document.getElementById('cart-item-count');
            const checkoutCartButton = document.getElementById('checkout-cart-button');
            window.addEventListener('load', () => {
                const storedCart = localStorage.getItem('cart');
                if (storedCart) {
                    cart = JSON.parse(storedCart);
                    updateCartUI();
                }
            });
            // Cart data (you can replace this with a more robust data storage)
            let cart = {
                items: [],
                total: 0.00,
            };
            const storedCart = localStorage.getItem('cart');
                if (storedCart) {
                    cart = JSON.parse(storedCart);
            }
            // Function to add an item to the cart
            function addToCart(name, price, imageURL) {
                cart.items.push({ name, price, imageURL});
                cart.total += price;
                updateCartUI();
                // Eklenen ürünleri localStorage'a kaydediyoruz.
                localStorage.setItem('cart', JSON.stringify(cart));
            }
              const colorRadios = document.querySelectorAll('input[name="product-options-1"]');
              const ageRadios = document.querySelectorAll('input[name="product-options-2"]');
              colorRadios.forEach(colorRadio => {
                colorRadio.addEventListener('change', () => {
                  ageRadios.forEach(ageRadio => {
                    ageRadio.disabled = !colorRadio.checked;
                  });
                });
              });
            // Function to remove an item from the cart
            function removeFromCart(index) {
                const removedItem = cart.items.splice(index, 1)[0];
                cart.total -= removedItem.price;
                updateCartUI();
                // Sepetten ürün silindiğinde localStorage'ı güncelliyoruz.
                localStorage.setItem('cart', JSON.stringify(cart));
            }
            // Function to update the cart UI
            function updateCartUI() {
                cartItemsContent.innerHTML = '';
                cart.items.forEach((item, index) => {
                    const li = document.createElement('li');
                    li.className = 'custom-text-color ';
                    const productImage = document.createElement('img');
                    productImage.src = item.imageURL;
                    productImage.style.width = '50px'; // Set the width as desired
                    productImage.style.height = '50px'; // Set the height as desired
                    li.appendChild(productImage);
                    // Add the product name, price, and quantity
                    const itemInfo = document.createElement('span');
                    itemInfo.textContent = ` ${item.name} -- ₺${item.price}`;
                    li.appendChild(itemInfo);
                    const removeButton = document.createElement('button');
                    removeButton.className = 'trash-button';
                    removeButton.textContent = '';
                    const icon = document.createElement('i');
                    icon.className = 'fas fa-trash';
                    removeButton.appendChild(icon);
                    removeButton.addEventListener('click', () => {
                        removeFromCart(index);
                    });
                    li.appendChild(removeButton);
                    cartItemsContent.appendChild(li);
                });
                cartTotalContent.textContent = cart.total.toFixed(2);
                cartItemCount.textContent = cart.items.length;
                if (cart.items.length > 0) {
                    checkoutCartButton.style.display = 'block';
                } else {
                    checkoutCartButton.style.display = 'none';
                }
            }
            // Add event listeners to "Add to Cart" buttons
            const addToCartButtons = document.querySelectorAll('.add-to-cart-button');
            addToCartButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const product = button.parentElement;
                    const productName = product.querySelector('.product-name').textContent;
                    const productImage = product.querySelector('.product-image');
                    const imageURL = productImage.getAttribute('src');
                    const productPrice = parseFloat(product.querySelector('.product-price').textContent.replace('₺', ''));
                    const optionsColor = product.querySelectorAll(`input[name="product-options-2"]`);
                    const optionsSize = product.querySelectorAll(`input[name="product-options-1"]`);
                    let selectedColor = null;
                    let selectedSize = null;
                    optionsColor.forEach(option => {
                        if (option.checked) {
                            selectedColor = option.value;
                        }
                    });
                    optionsSize.forEach(option => {
                        if (option.checked) {
                            selectedSize = option.value;
                        }
                    });
                    if (!selectedColor || !selectedSize) {
                        // Seçeneklerden biri seçilmediğinde hata mesajı göster
                        alert('Lütfen tüm seçenekleri seçin');
                        return; // Sepete eklemeyi durdur
                    }
                    addToCart(`${productName} (Renk: ${selectedColor}, Yaş: ${selectedSize})`, productPrice, imageURL);
                });
            });
            // Sepet butonuna tıklanınca sepeti gösterme işlemi
            cartButton.addEventListener('click', () => {
                if (cartContent.style.display === 'none' || cartContent.style.display === '') {
                    cartContent.style.display = 'block';
                } else {
                    cartContent.style.display = 'none';
                }
            });

            // Alışverişi tamamla butonuna tıklandığında
            checkoutCartButton.addEventListener('click', () => {
                // Sepet içeriğini JSON formatına çevirin
                const cartContentJSON = JSON.stringify(cart.items);
                // Bir form oluşturun ve sepet içeriğini bir gizli alan (hidden input) olarak ekleyin
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = 'sepet.php';
                const cartInput = document.createElement('input');
                cartInput.type = 'hidden';
                cartInput.name = 'cartContent';
                cartInput.value = cartContentJSON;
                form.appendChild(cartInput);
                document.body.appendChild(form);
                // Formu gönderin
                form.submit();
            });
</script>
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

<!-- Sepet içeriği ile ödeme sayfası -->
<div id="cart-content">
    <ul id="cart-items-content"></ul>
    <p>Toplam: <span id="cart-total-content"></span> ₺</p>
    <button id="checkout-button">Ödemeyi Tamamla</button>
</div>