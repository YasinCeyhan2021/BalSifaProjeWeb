<?php
    include('../source/include/baglan.php');
    $kAdi = $_POST['kAdi'];
    $sifre = $_POST['sifre'];
    $sql = "SELECT * FROM kullanici WHERE kAdi='$kAdi' AND sifre='$sifre'";

    $sorgu = mysqli_query($baglan,$sql);
    
    $sorguCek = mysqli_fetch_array($sorgu);

    if($sorguCek['kullaniciId'] == ''){
        echo "<script>alert('Kullanıcı Adı veya Parola yanlış !!!');</script>";
        header("refresh:0;url=/yc196502005/admin/"); 
    }else{
        $_SESSION['kullanici'] = $sorguCek;
        header("Location:/yc196502005/admin/");
    }
?>