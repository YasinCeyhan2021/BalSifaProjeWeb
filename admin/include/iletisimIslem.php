<?php
    include('../../source/include/baglan.php');

    if(isset($_GET['iletisimId'])){
        $iletisimId = $_GET['iletisimId'];

        $sql1= "DELETE FROM iletisim WHERE iletisimId = '$iletisimId' ";
    
        $sorgu1 = mysqli_query($baglan,$sql1);
        
        if($sorgu1){
            header("Location:/yc196502005/admin/?sekme=2");
        }else{
            header("Location:/yc16502005/admin/?sekme=2");
        }
    }
?>