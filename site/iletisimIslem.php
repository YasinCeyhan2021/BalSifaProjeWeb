<?php
    include('../source/include/baglan.php');
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $tel = $_POST['tel'];
    $ePosta = $_POST['ePosta'];
    $mesaj = $_POST['mesaj'];

    $sql = "INSERT INTO iletisim VALUES(NULL,'$ad','$soyad','$tel','$ePosta','$mesaj')";

    $sorgu = mysqli_query($baglan, $sql);

    if($sorgu == 0){
        echo "<script>alert('Mesajınız İletilemedi !!!');</script>";
        header("refresh:0;url=/yc196502005/site/iletisim.php"); 
    }else{
        echo "<script>alert('Mesajınız İletildi !!!');</script>";
        header("refresh:0;url=/yc196502005/site/iletisim.php"); 
    }
?>