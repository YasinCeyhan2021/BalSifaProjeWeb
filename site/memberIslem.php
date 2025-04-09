<?php
    include('../source/include/baglan.php');
    $memberId = $_SESSION['member']['memberId'];
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $tel = $_POST['tel'];
    $il = $_POST['il'];
    $ilce = $_POST['ilce'];
    $adres = $_POST['adres'];
    $ePosta = $_POST['ePosta'];
    $sifre = $_POST['sifre'];
    $sql1= "UPDATE member SET ad='$ad', soyad='$soyad', tel='$tel', il='$il', ilce='$ilce', adres='$adres', ePosta='$ePosta', sifre='$sifre' WHERE memberId = '$memberId' ";
    $sorgu1 = mysqli_query($baglan,$sql1);

    if($sorgu1){
        header("Location:/yc196502005/site/member.php");
    }else{
        header("Location:/yc196502005/site/member.php");
    }

?>