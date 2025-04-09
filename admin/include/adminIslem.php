<?php
    include('../../source/include/baglan.php');
    $kullaniciId = $_SESSION['kullanici']['kullaniciId'];

    $kAdi = $_POST['kAdi'];
    $sifre = $_POST['sifre'];
    $sql1= "UPDATE kullanici SET kAdi='$kAdi', sifre='$sifre' WHERE kullaniciId = '$kullaniciId' ";
    $sorgu1 = mysqli_query($baglan,$sql1);

    if($sorgu1){
        header("Location:/yc196502005/admin/?sekme=3");
    }else{
        header("Location:/yc196502005/admin/?sekme=3");
    }

?>