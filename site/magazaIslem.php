<?php
    include("../source/include/baglan.php");
    $magazaId = $_GET['magazaId'];
    if(isset($_GET['magazaYorumId'])){
        $magazaYorumId = $_GET['magazaYorumId'];

        $sql1= "DELETE FROM magazayorum WHERE magazaYorumId = '$magazaYorumId' ";
    
        $sorgu1 = mysqli_query($baglan,$sql1);
        
        if($sorgu1){
            header("Location:/yc196502005/site/magaza.php?magazaId=$magazaId");
        }else{
            header("Location:/yc16502005/site/magaza.php?magazaId=$magazaId");
        }
    }else{

        $memberId = $_SESSION['member']['memberId'];
        $yorum = $_POST['yorum'];

        $sql1= "INSERT INTO magazayorum VALUE (NULL, '$magazaId', '$memberId', '$yorum')";
    
        $sorgu1 = mysqli_query($baglan,$sql1);
    
        if($sorgu1){
            header("Location:/yc196502005/site/magaza.php?magazaId=$magazaId");
        }else{
            header("Location:/yc196502005/site/magaza.php?magazaId=$magazaId");
        }
    }


?>