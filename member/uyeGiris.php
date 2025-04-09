<?php
    include('../source/include/baglan.php');
    $ePosta = $_POST['ePosta'];
    $sifre = $_POST['sifre'];
    $sql = "SELECT * FROM member WHERE ePosta='$ePosta' AND sifre='$sifre'";

    $sorgu = mysqli_query($baglan,$sql);
    
    $sorguCek = mysqli_fetch_array($sorgu);

    if($sorguCek['memberId'] == ''){
        echo "<script>alert('Üye Bulunamadı !!!');</script>";
        header("refresh:0;url=/yc196502005/member/"); 
    }else{
        $_SESSION['member'] = $sorguCek;
        header("Location:/yc196502005/");
    }
?>