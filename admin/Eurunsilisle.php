<?php
include('baglan.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_POST['urunler'])){
        $urunisim = $_POST['urunler'];
        $urunid = mysqli_query($conn, "select * from urunler where urun_isim='".$urunisim."'");
        $iddoldur = mysqli_fetch_array($urunid);
        $sql = mysqli_query($conn, "delete FROM resimler WHERE urun_id='".$iddoldur['urun_id']."'");
        if ($sql) {
            $a = mysqli_query($conn, "delete FROM urunler WHERE urun_isim='".$urunisim."'");
            echo "Ürün Silindi.";
        }



        
    } else{
        echo 'Lütfen tüm alanları doldurunuz.';
    }
}