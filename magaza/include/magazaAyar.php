<?php
    include("../../source/include/baglan.php");

    if(isset($_POST['isim'])){
        $magazaId = $_GET['magazaId'];
        $isim=$_POST['isim'];
        $sql1= "UPDATE magaza SET magaza='$isim' WHERE magazaId = '$magazaId' ";
        $sorgu1 = mysqli_query($baglan,$sql1);

        if($sorgu1){
            header("Location:/yc196502005/magaza/?sekme=0");
        }else{
            header("Location:/yc196502005/magaza/?sekme=0");
        }
    }
    if(isset($_FILES['profil'])){
        $profil = $_FILES["profil"]["tmp_name"];
        $profilUrl = $_GET['profil'];
        $profilUrl = str_replace('/yc196502005/magaza/', '', $profilUrl);
        $profilUrl = '../'.$profilUrl;
        move_uploaded_file($profil,$profilUrl);
        header("Location:/yc196502005/magaza/?sekme=0");
    }
    if(isset($_FILES['banner'])){
        $banner = $_FILES["banner"]["tmp_name"];
        $bannerUrl = $_GET['banner'];
        $bannerUrl = str_replace('/yc196502005/magaza/', '', $bannerUrl);
        $bannerUrl = '../'.$bannerUrl;
        move_uploaded_file($banner,$bannerUrl);
        header("Location:/yc196502005/magaza/?sekme=0");
    }
?>