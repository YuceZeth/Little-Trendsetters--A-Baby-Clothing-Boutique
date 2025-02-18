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
                    <h1 class="mb-3"><font color="#0f7791">Sepet</font></h1>
                </div>
                <center>

<div class="row g-4" style="width: 850px;">
    <!-- Sepet içeriği ile ödeme sayfası -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $cartContent = json_decode($_POST['cartContent'], true);
        $totalPrice = 0;
        foreach ($cartContent as $item) {
            $productName = $item['name'];
            $productImageURL = $item['imageURL'];
            $productPrice = $item['price'];
            $quantity = 1;
            $totalPrice += $productPrice;
            echo "
            <table>
            <tr>
                <td><div style='width:100px'><img src='$productImageURL' style='width:100px; height:100px'></div></td>
                <td><h3 style='display: inline;'><font color='#FF7F00'>$productName</font></h3></td>
                <td>
                    <h3 style='display: inline;'><font color='#FF7F00'>
                        <button class='decrement bg-primary text-white rounded-pill py-2 px-3' data-product-name='$productName'>-</button>
                        <span class='quantity' data-product-name='$productName'>$quantity</span>
                        <button class='increment bg-primary text-white rounded-pill py-2 px-3' data-product-name='$productName'>+</button>
                         <button class='remove bg-danger text-white rounded-pill py-2 px-3' data-product-name='$productName'>Sil</button>
                    </font></h3>
                </td>
                <td><h3 style='display: inline;'><font color='#FF7F00'><span class='price'>$productPrice</span>₺</font></h3></td>
                <td style='display:none;'><h3 style='display: inline;'><font color='#FF7F00'><span class='total-price'>$productPrice</span>₺</font></h3></td>
            </tr>
            </table>
            ";
        }
    }
    ?>
</div>
<br>
<div id="payment-container" style="text-align: right; margin-right: 20px;">
    <div id="total-price" style="text-align: right; display: inline-block;">
        <h2 style="display: inline; margin-right: 20px;"><font color='#FF7F00'>Toplam Fiyat: <span id="total-price-value"><?php echo $totalPrice; ?>₺</font></span></h2>
    </div>
</div>
<?php 
if (@$_SESSION["name"]){
    $id = $_SESSION['id'];
    $sql = mysqli_query($conn, "select * from uyeler where uye_id='".$id."'");
    while ($doldur = mysqli_fetch_array($sql)) {
        ?>
        <form action='sepetisle.php' method='post' id='sepetisle'>
        <div id="kapida-odeme-info" style="display: block;">
            <h3>Müşteri Bilgileri:</h3>
            <?php 
                $cartContent = json_decode($_POST['cartContent'], true);
                $combinedNames = "";
                $combinedUrl = "";
                foreach ($cartContent as $item) {
                    $combinedUrl .= $item['imageURL']. ";";
                    $combinedNames .= $item['name']. ";";
                }
                echo "<input type='hidden' name='urun_isim' value='".$combinedNames."'>";
                echo "<input type='hidden' name='urun_url' value='".$combinedUrl."'>";
            ?>
            <input type="hidden" id="quantities-input" name="quantities" value="[]">
            <input type="text" name="ad-soyad" placeholder="Ad Soyad"  value="<?php echo "".$doldur['uye_adsoyad'].""; ?>" required>
            <input type="tel" name="telefon" placeholder="Telefon Numarası" value="<?php echo "".$doldur['uye_telefon'].""; ?>" required>
        </div>
        <div id="adres-bilgileri" style="display: block;">
            <h3>Adres Bilgileri:</h3>
            <input type="text" name="sehir" placeholder="Şehir" value="<?php echo "".$doldur['uye_sehir'].""; ?>"required>
            <input type="text" name="ilce" placeholder="İlçe" value="<?php echo "".$doldur['uye_ilce'].""; ?>"required>
            <input type="text" name="posta-kodu" placeholder="Posta Kodu" value="<?php echo "".$doldur['uye_posta_kodu'].""; ?>"required>
            <textarea name="adres" rows="4" cols="50" placeholder="Lütfen adresinizi girin"  required><?php echo "".$doldur['uye_adres'].""; ?></textarea>
        </div>
        <br>
        <center>
        <div>
            <input type='radio' name='odeme-secenekleri' id='kredi-karti' value='kredi-karti'>
            <label for='kredi-karti'><h3 style='display: inline;'>Kredi Kartı</h3></label>
            &nbsp;&nbsp;
            <input type='radio' name='odeme-secenekleri' id='kapida-odeme' value='kapida-odeme'>
            <label for='kapida-odeme'><h3 style='display: inline;'>Kapıda Ödeme</h3></label>
        </div>
        </center>
        <br>
        <button id="complete-order-button" class="btn btn-primary">İleri</button>
        </form>
        <?php
    }
} else {
    ?>
    <form action='sepetisle.php' method='post' id='sepetisle'>
<div id="kapida-odeme-info" style="display: block;">
    <h3>Müşteri Bilgileri:</h3>
    <?php 
        $cartContent = json_decode($_POST['cartContent'], true);
        $combinedNames = "";
        $combinedUrl = "";
        foreach ($cartContent as $item) {
            $combinedUrl .= $item['imageURL']. ";";
            $combinedNames .= $item['name']. ";";
        }
        echo "<input type='hidden' name='urun_isim' value='".$combinedNames."'>";
        echo "<input type='hidden' name='urun_url' value='".$combinedUrl."'>";
    ?>
    <input type="hidden" id="quantities-input" name="quantities" value="[]">
    <input type="text" name="ad-soyad" placeholder="Ad Soyad" required>
    <input type="tel" name="telefon" placeholder="Telefon Numarası" required>
</div>
<div id="adres-bilgileri" style="display: block;">
    <h3>Adres Bilgileri:</h3>
    <input type="text" name="sehir" placeholder="Şehir"required>
    <input type="text" name="ilce" placeholder="İlçe"required>
    <input type="text" name="posta-kodu" placeholder="Posta Kodu"required>
    <textarea name="adres" rows="4" cols="50" placeholder="Lütfen adresinizi girin"required></textarea>
</div>
<br>
<center>
<div>
    <input type='radio' name='odeme-secenekleri' id='kredi-karti' value='kredi-karti'>
    <label for='kredi-karti'><h3 style='display: inline;'>Kredi Kartı</h3></label>
    &nbsp;&nbsp;
    <input type='radio' name='odeme-secenekleri' id='kapida-odeme' value='kapida-odeme'>
    <label for='kapida-odeme'><h3 style='display: inline;'>Kapıda Ödeme</h3></label>
</div>
</center>
<br>
<button id="complete-order-button" class="btn btn-primary">İleri</button>
</form>
    <?php
}
?>
    

<script type="text/javascript">
// Add this script to check if a radio button is selected before submitting the form
document.getElementById("complete-order-button").addEventListener("click", function (event) {
    var krediKarti = document.getElementById('kredi-karti');
    var kapidaOdeme = document.getElementById('kapida-odeme');
    
    if (!krediKarti.checked && !kapidaOdeme.checked) {
        alert("Lütfen bir ödeme seçeneği seçin.");
        event.preventDefault(); // Prevent form submission if no radio button is selected
    }
});
</script>
<script>
// Sil butonuna tıklandığında Sepete Git butonuna otomatik tıklama
document.addEventListener("click", function (event) {
    if (event.target && event.target.classList.contains("remove")) {
        // Sil butonuna tıklandığında "checkout-cart-button" öğesine otomatik olarak tıklanır.
        document.getElementById("checkout-cart-button").click();
    }
});
</script>
<script type="text/javascript">
    $('#sepetisle').submit(function(event) {
    event.preventDefault(); 
    var form = $(this);
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: form.serialize(),
                success: function(response) {
                    alert('Veri başarıyla Eklendi!');
                }
        });
    }
</script>
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
    document.addEventListener("DOMContentLoaded", function () {
        // Artırma butonlarına tıklanınca
        document.querySelectorAll(".increment").forEach(function (button) {
            button.addEventListener("click", function () {
                const quantityElement = this.parentElement.querySelector(".quantity");
                const currentQuantity = parseInt(quantityElement.textContent);
                quantityElement.textContent = currentQuantity + 1;
                updateTotalPrice();
            });
        });

        // Azaltma butonlarına tıklanınca
        document.querySelectorAll(".decrement").forEach(function (button) {
            button.addEventListener("click", function () {
                const quantityElement = this.parentElement.querySelector(".quantity");
                let currentQuantity = parseInt(quantityElement.textContent);
                if (currentQuantity > 1) {
                    currentQuantity -= 1;
                    quantityElement.textContent = currentQuantity;
                    updateTotalPrice();
                }
            });
        });

        document.querySelectorAll(".remove").forEach(function (button) {
            button.addEventListener("click", function () {
                const productName = this.getAttribute("data-product-name");
                const productRow = this.closest("tr");
                // Ürünü sepetten silmek için ilgili satırı kaldırın
                productRow.remove();
                updateTotalPrice();
                const removedItem = cart.items.splice(productName, 1)[0];
                cart.total -= removedItem.price;
                updateCartUI();
                // Sepetten ürün silindiğinde localStorage'ı güncelliyoruz.
                localStorage.setItem('cart', JSON.stringify(cart));
                updateCartRemove();

            });
        });


        // Ödeme seçeneklerini dinle
        const paymentMethod = document.getElementById("payment-method");
        paymentMethod.addEventListener("change", function () {
            const selectedOption = paymentMethod.value;
            const paymentNotification = document.getElementById("payment-notification");
            paymentNotification.innerHTML = `<p>Ödeme Seçeneği: ${selectedOption === "kapida-odeme" ? "Kapıda Ödeme" : "Kredi Kartı"}</p>`;
        });

        // Toplam fiyatı güncellemek için bu işlevi kullanabilirsiniz
        function updateTotalPrice() {
            let total = 0;
            document.querySelectorAll("tr").forEach(function (row) {
                const quantity = parseInt(row.querySelector(".quantity").textContent);
                const price = parseInt(row.querySelector(".price").textContent);
                const rowTotal = quantity * price;
                total += rowTotal;
                row.querySelector(".total-price").textContent = rowTotal;
            });

            const quantities = [];
            document.querySelectorAll('.quantity').forEach(quantityElement => {
                quantities.push({
                    productName: quantityElement.getAttribute('data-product-name'),
                    quantity: parseInt(quantityElement.textContent)
                });
            });

            const quantitiesInput = document.getElementById('quantities-input');
            quantitiesInput.value = JSON.stringify(quantities);

            // Toplam fiyatı gösteren bir HTML öğesi bulun ve güncelleyin
            const totalPriceValueElement = document.querySelector("#total-price-value");
            totalPriceValueElement.textContent = total + "₺";
        }
    });

</script>
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