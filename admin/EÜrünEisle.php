<?php
include('baglan.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_FILES['image']['name']) && isset($_POST['isim']) && isset($_POST['aciklama']) && isset($_POST['fiyat'])){
        $tmp_name = $_FILES['image']['tmp_name'];
        $name = $_FILES['image']['name'];
        $location = '../img/' . $name;

        $isim = $_POST['isim'];
        $aciklama = $_POST['aciklama'];
        $fiyat = $_POST['fiyat'];
        $renk = $_POST['renk'];
        $yas = $_POST['yas'];
        $kategori = $_POST['kategoriler'];

        $gurun = mysqli_query($conn, "insert into urunler (urun_isim, urun_aciklama, urun_fiyat, urun_renk, urun_yas, urun_kategori) VALUES ('".$isim."','".$aciklama."','".$fiyat."','".$renk."',  '".$yas."', '".$kategori."')");
        if ($gurun) {
            $id = mysqli_insert_id($conn);
            if(move_uploaded_file($tmp_name, $location)){
            // database connection
            $gresim = mysqli_query($conn, "insert into resimler (resim, urun_id) VALUES ('".$name."','".$id."')");

            echo 'Ürün ayrıntıları başarıyla eklendi.';
                if ($gresim) {
                    echo 'Ürün ve resim başarıyla eklenmiştir.';
                } else {
                    echo 'Resim eklenirken bir hata oluştu.';
                }
            } else {
                echo 'Resim yüklenirken bir hata oluştu.';
            }
        } else {
            echo 'Ürün eklenirken bir hata oluştu.';
        }
    }
    else{
        echo 'Lütfen tüm alanları doldurunuz.';
    }
}