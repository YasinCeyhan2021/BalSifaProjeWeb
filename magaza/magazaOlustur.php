<?php
    include("../source/include/baglan.php");

    $memberId = $_SESSION['member']['memberId'];

    $isim = $_POST['isim'];

    $profil = $_FILES["profil"]["tmp_name"];
    $banner = $_FILES["banner"]["tmp_name"];
    $tarih = date('YmdHis');
    $profilUrl = "photo/profil".$tarih.".png";
    $bannerUrl = "photo/banner".$tarih.".png";

    move_uploaded_file($profil,$profilUrl);
    move_uploaded_file($banner,$bannerUrl);
    $profilUrl=  "/yc196502005/magaza/".$profilUrl;
    $bannerUrl=  "/yc196502005/magaza/".$bannerUrl;

    $sql1= "INSERT INTO magaza VALUE (NULL,'$memberId','$isim','$profilUrl','$bannerUrl')";

    $sorgu1 = mysqli_query($baglan,$sql1);

    if($sorgu1){
        header("Location:/yc196502005/magaza/");
    }else{
        header("Location:/yc196502005/magaza/");
    }

?>