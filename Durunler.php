<!DOCTYPE html>
<html lang="en">
<?php include("baglan.php"); ?>
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
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Yükleniyor...</span>
            </div>
        </div>
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
                <a href="kayıt.php" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Üye Ol<i class="fa fa-arrow-right ms-3"></i></a>&nbsp;&nbsp;
                <a href="uyegirisi.php" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Giriş Yap<i class="fa fa-arrow-right ms-3"></i></a>
            </div>



            <!-- Shopping Cart Start-->
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
            <!-- Shopping Cart End -->



            <br>
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


        <!-- Page Header End -->
        <!-- Page Header End -->

        <!-- Team Start -->
        <div class="container-xxl py-5" >
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                </div>
                <div class="row g-4">
                <?php
                    $id_bilgi = @$_GET['id'];
                    $id_bilgi =  substr($id_bilgi, 64);   
                    $id =  substr($id_bilgi, 0, -64); 
                    $sorgu = mysqli_query($conn, "select * from urunler where urun_id='".$id."'");
                    while ($doldur = mysqli_fetch_array($sorgu)) {
                        $rsorgu = mysqli_query($conn, "select * from resimler where urun_id='".$id."'");
                            ?>
        <div class="container-fluid p-0 mb-5" style="width: 350px; height: 450px;">
            <div class="owl-carousel header-carousel position-relative" >
                <?php while ($rdoldur = mysqli_fetch_array($rsorgu)) {
                ?> 
                <div class="owl-carousel-item position-relative">
                    <img class="product-image img-fluid" src="img/<?php echo "".$rdoldur['resim'].""; ?>"  
                    style="width: 450px; height: 450px;">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .2);">
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

                            <div style="width: 450px; height: 450px;" >
                                <?php
                                $rsorgu = mysqli_query($conn, "select * from resimler where urun_id='".$id."'");
                                $qdoldur = mysqli_fetch_array($rsorgu);
                                $dizi = explode(",", $doldur['urun_yas']);
                                $dizi1 = explode(",", $doldur['urun_renk']);
                                echo "<ul id='product-list' style='width:430px; height:480px; border-style:none; padding-right:300px;'>
                                        <center><div class='card classes-item' style='width:430px; height:480px; border-style:none;'>
                                            <img class='product-image img-fluid' src='img/".$qdoldur['resim']."' hidden>
                                            <span class='product-name'><font size='6px' color='orange' style='font-family:Lobster Two;'>".$doldur['urun_isim']."</font></span><br><br>
                                            <font size='6px' color ='orange' style='font-family:Lobster Two;'>Fiyat :<span class='product-price'> ".$doldur['urun_fiyat']."</span>₺</font><br><br>
                                            <font size='5px' color ='orange' style='font-family:Lobster Two;'>
                                            Açıklama :".$doldur['urun_aciklama']."</font><br><br>
                                            ";

                                            echo "<div class='radio-button'>";
                                            for ($i=0; $i < count($dizi) ; $i++) {
                                                $x = rand(1,999999999999999999);
                                                echo "<input type='radio' name='product-options-1' id='$x'  value='".$dizi[$i]."''>
                                                <label for='$x'><h3 style='display: inline;'>".$dizi[$i]."</h3></label>&nbsp;&nbsp;";
                                            }
                                            echo "</div>";
                                            echo "<br>";
                                            echo "<div class='radio-button'>";
                                            for ($i=0; $i < count($dizi1) ; $i++) {
                                                $x = rand(1,999999999999999999);
                                                echo "<input type='radio'name='product-options-2' id='$x' value='".$dizi1[$i]."''>
                                                <label for='$x'><h3 style='display: inline;'>".$dizi1[$i]."</h3></label>&nbsp;&nbsp;";
                                            }
                                            echo "</div>";
                                            echo "<button class='add-to-cart-button bg-primary text-white rounded-pill py-2 px-3' data-product='product-options-1' style=''>Sepete Ekle</button>
                                        </div></center>
                                    </ul>";
                                ?>
                            </div>
                            <?php
                    }
                ?>
                </div>
            </div>
        </div>
        <!-- Team End -->
     <script>
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