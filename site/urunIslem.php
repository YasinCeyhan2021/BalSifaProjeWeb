<?php
    include("../source/include/baglan.php");
    $urunId = $_GET['urunId'];
    if(isset($_GET['urunYorumId'])){
        $urunYorumId = $_GET['urunYorumId'];

        $sql1= "DELETE FROM urunyorum WHERE urunYorumId = '$urunYorumId' ";
    
        $sorgu1 = mysqli_query($baglan,$sql1);
        
        if($sorgu1){
            header("Location:/yc196502005/site/urun.php?urunId=$urunId");
        }else{
            header("Location:/yc16502005/site/urun.php?urunId=$urunId");
        }
    }else{

        $memberId = $_SESSION['member']['memberId'];
        $yorum = $_POST['yorum'];

        $sql1= "INSERT INTO urunyorum VALUE (NULL, '$urunId', '$memberId', '$yorum')";
    
        $sorgu1 = mysqli_query($baglan,$sql1);
    
        if($sorgu1){
            header("Location:/yc196502005/site/urun.php?urunId=$urunId");
        }else{
            header("Location:/yc196502005/site/urun.php?urunId=$urunId");
        }
    }


?>