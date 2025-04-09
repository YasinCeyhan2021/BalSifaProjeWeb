<?php
    include("../../source/include/baglan.php");

    if(isset($_GET['bottomSilId'])){
        $bottomSilId = $_GET['bottomSilId'];

        $sql1= "DELETE FROM bottom WHERE bottomId = '$bottomSilId' ";
    
        $sorgu1 = mysqli_query($baglan,$sql1);
        
        if($sorgu1){
            header("Location:/yc196502005/admin/?sekme=1");
        }else{
            header("Location:/yc16502005/admin/?sekme=1");
        }
    }else if(isset($_GET['bottomId'])){
        $bottomId = $_GET['bottomId'];
        $ad = $_POST['ad'];
        $url = $_POST['url'];

        $sql1 = "UPDATE bottom SET ad = '$ad', url = '$url' WHERE bottomId = '$bottomId'";
        $sorgu1 = mysqli_query($baglan,$sql1);

        if($sorgu1){
            header("Location:/yc196502005/admin/?sekme=1");
        }else{
            header("Location:/yc196502005/admin/?sekme=1");
        }
    }else{
        $ad = $_POST['ad'];
        $url = $_POST['url'];
        $photo = $_FILES["photoUrl"]["tmp_name"];
        $tarih = date('YmdHis');
        $photoUrl = "../../source/photo/sosyal".$tarih.".png";

        move_uploaded_file($photo,$photoUrl);

        $photoUrl=  "/yc196502005/source/photo/sosyal".$tarih.".png";

        $sql1= "INSERT INTO bottom VALUE (NULL, '$ad', '$url', '$photoUrl')";

        $sorgu1 = mysqli_query($baglan,$sql1);

        if($sorgu1){
            header("Location:/yc196502005/admin/?sekme=1");
        }else{
            header("Location:/yc196502005/admin/?sekme=1");
        }
    }

?>