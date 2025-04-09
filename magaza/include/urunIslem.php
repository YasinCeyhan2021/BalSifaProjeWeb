<?php
    include("../../source/include/baglan.php");

    if(isset($_GET['urunSilId'])){
        $urunSilId = $_GET['urunSilId'];

        $sql1= "DELETE FROM urun WHERE urunId = '$urunSilId' ";
    
        $sorgu1 = mysqli_query($baglan,$sql1);
        
        if($sorgu1){
            header("Location:/yc196502005/magaza/?sekme=1");
        }else{
            header("Location:/yc16502005/magaza/?sekme=1");
        }
    }else if(isset($_GET['urunId'])){
        $urunId = $_GET['urunId'];
        $isim = $_POST['isim'];
        $aciklama = $_POST['aciklama'];
        $agirlik = $_POST['agirlik'];
        $stok = $_POST['stok'];
        $fiyat = $_POST['fiyat'];

 
        $sql1= "UPDATE urun SET urunCesitId = '$isim', aciklama = '$aciklama', agirlik = '$agirlik', stok = '$stok', fiyat = '$fiyat'  WHERE urunId = '$urunId' ";
        $sorgu1 = mysqli_query($baglan,$sql1);
    
        if($sorgu1){
            header("Location:/yc196502005/magaza/?sekme=1");
        }else{
            header("Location:/yc196502005/magaza/?sekme=1");
        }
    
    }else{
        $magazaId = $_SESSION['magaza']['magazaId'];

        $isim = $_POST['isim'];
        $aciklama = $_POST['aciklama'];
        $agirlik = $_POST['agirlik'];
        $stok = $_POST['stok'];
        $fiyat = $_POST['fiyat'];
    
        $urun = $_FILES["urun"]["tmp_name"];
        $tarih = date('YmdHis');
        $urunUrl = "photo/urun".$tarih.".png";
    
        move_uploaded_file($urun,$urunUrl);
        $urunUrl=  "/yc196502005/magaza/include/".$urunUrl;
    
        $sql1= "INSERT INTO urun VALUE (NULL, '$magazaId', '$isim', '$urunUrl', '$aciklama', '$agirlik', '$stok', '$fiyat')";
    
        $sorgu1 = mysqli_query($baglan,$sql1);
    
        if($sorgu1){
            header("Location:/yc196502005/magaza/?sekme=1");
        }else{
            header("Location:/yc196502005/magaza/?sekme=1");
        }
    }


?>