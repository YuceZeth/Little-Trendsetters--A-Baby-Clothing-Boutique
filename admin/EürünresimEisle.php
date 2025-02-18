<?php
include('baglan.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(isset($_FILES['image']['name']) && isset($_POST['urunler'])){
        $tmp_name = $_FILES['image']['tmp_name'];
        $name = $_FILES['image']['name'];
        $location = '../img/' . $name;

        $urun_isim = $_POST['urunler'];
        $sql = mysqli_query($conn, "select * from urunler where urun_isim='".$urun_isim."'");
        $doldur = mysqli_fetch_array($sql);
        $id = $doldur['urun_id'];

        if(move_uploaded_file($tmp_name, $location)){
        // database connection
        $gresim = mysqli_query($conn, "insert into resimler (resim, urun_id) VALUES ('".$name."','".$id."')");
        echo "Resim Eklendi.";
        } else {
            echo "Resim Yüklenirken Bir Hata Oluştu.";
        }
    } else{
        echo 'Lütfen tüm alanları doldurunuz.';
    }
}