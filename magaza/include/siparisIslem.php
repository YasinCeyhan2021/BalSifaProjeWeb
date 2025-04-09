<?php
    include('../../source/include/baglan.php');

    $sepetId = $_GET['sepetId'];

    $kargoId = $_POST['kargoId'];

    $sql1= "UPDATE sepet SET kargoId = '$kargoId'  WHERE sepetId = '$sepetId' ";
    $sorgu1 = mysqli_query($baglan,$sql1);

    if($sorgu1){
        header("Location:/yc196502005/magaza/?sekme=2");
    }else{
        header("Location:/yc196502005/magaza/?sekme=2");
    }
?>