<?php
    include("../../source/include/baglan.php");

    if(isset($_GET['sliderSilId'])){
        $sliderSilId = $_GET['sliderSilId'];

        $sql1= "DELETE FROM slider WHERE sliderId = '$sliderSilId' ";
    
        $sorgu1 = mysqli_query($baglan,$sql1);
        
        if($sorgu1){
            header("Location:/yc196502005/admin/?sekme=0");
        }else{
            header("Location:/yc16502005/admin/?sekme=0");
        }
    }else if(isset($_GET['url'])){
        $url = $_GET['url'];
        $url = str_replace("/yc196502005/source/photo/", "", $url);

        $slider = $_FILES["url"]["tmp_name"];
        $tarih = date('YmdHis');
        $sliderUrl = "../../source/photo/".$url;
        move_uploaded_file($slider,$sliderUrl);
        header("Location:/yc196502005/admin/?sekme=0");
    }else{
        $slider = $_FILES["url"]["tmp_name"];
        $tarih = date('YmdHis');
        $sliderUrl = "../../source/photo/slider".$tarih.".png";

        move_uploaded_file($slider,$sliderUrl);

        $sliderUrl=  "/yc196502005/source/photo/slider".$tarih.".png";

        $sql1= "INSERT INTO slider VALUE (NULL,'$sliderUrl')";

        $sorgu1 = mysqli_query($baglan,$sql1);

        if($sorgu1){
            header("Location:/yc196502005/admin/?sekme=0");
        }else{
            header("Location:/yc196502005/admin/?sekme=0");
        }
    }

?>