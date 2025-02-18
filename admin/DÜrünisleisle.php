<?php
include('baglan.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['isim']) && isset($_POST['aciklama']) && isset($_POST['fiyat'])){

        $id = $_POST['id'];
        $isim = $_POST['isim'];
        $aciklama = $_POST['aciklama'];
        $fiyat = $_POST['fiyat'];
        $renk = $_POST['renk'];
        $yas = $_POST['yas'];

            // database connection
        	$gurun = mysqli_query($conn, "update urunler set urun_isim='".$isim."', urun_aciklama='".$aciklama."', urun_fiyat='".$fiyat."' , urun_renk='".$renk."', urun_yas = '".$yas."' where urun_id = '".$id."'");

            echo 'Ürün ayrıntıları başarıyla güncellendi.';
    }
    else{
        echo 'Lütfen tüm alanları doldurunuz.';
    }
}