<?php
     include("../source/include/baglan.php");

     if(isset($_GET['sepetId'])){
          $sepetId = $_GET['sepetId'];
  
          $sql1= "DELETE FROM sepet WHERE sepetId = '$sepetId' ";
      
          $sorgu1 = mysqli_query($baglan,$sql1);
          
          if($sorgu1){
              header("Location:/yc196502005/site/sepet.php");
          }else{
              header("Location:/yc16502005/site/sepet.php");
          }
     }else{

          $memberId = $_SESSION['member']['memberId'];
          $urunId = $_GET['urunId'];

          $sql6 = "SELECT * FROM urun WHERE urun.urunId = '$urunId'";
          $sorgu6 = mysqli_query($baglan,$sql6);
          $sorguCek6 = mysqli_fetch_array($sorgu6);

          $stok = $sorguCek6['stok'];
          $stok--;

          $sql2= "UPDATE urun SET stok = '$stok'  WHERE  urunId = '$urunId' ";
          $sorgu2 = mysqli_query($baglan,$sql2);

          if($sorgu2){
               echo "";
          }else{
               echo "";
          }

          $sql1= "INSERT INTO sepet VALUE (NULL,'$memberId', '$urunId', '1')";

          $sorgu1 = mysqli_query($baglan,$sql1);

          if($sorgu1){
               echo "<script>alert('Sepete Eklendi !!!');</script>";
               header("refresh:0;url=/yc196502005/");
          }else{
               echo "<script>alert('Sepete eklenemedi !!!');</script>";
               header("refresh:0;url=/yc196502005/");
          }
     }

?>