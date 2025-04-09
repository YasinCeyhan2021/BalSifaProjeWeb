<?php
    include('../source/include/baglan.php');
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $tel = $_POST['tel'];
    $il = $_POST['il'];
    $ilce = $_POST['ilce'];
    $adres = $_POST['adres'];
    $ePosta = $_POST['ePosta'];
    $sifre = $_POST['sifre'];
    $sql = "INSERT INTO member VALUES(NULL,'$ad','$soyad','$tel','$il','$ilce','$adres','$ePosta','$sifre')";

    $sorgu = mysqli_query($baglan, $sql);

    if($sorgu == 0){
        echo "<script>alert('Üye Olunamadı !!!');</script>";
        header("refresh:0;url=/yc196502005/member/"); 
    }else{
        echo "<script>alert('Üye Olundu !!!');</script>";
        header("refresh:0;url=/yc196502005/member/"); 
    }
?>