<?php
    include('../../source/include/baglan.php');
    $magazaId = $_SESSION['magaza']['magazaId'];
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 minimum-scale=1.0, maximum-scale=1.0,user-scalable=0">
    <title></title>
    <link rel="stylesheet" href="/yc196502005/source/css/bootstrap.css">
    <style>
        a{
            text-decoration: none !important;
        }
        .input1{
            width:150px;
            height:50px;
            border:none;
            outline:none;
        }
        .input3{
            width:100px;
            height:30px;
            border:none;
            outline:none;
        }
        .input3:hover{
            border:1px solid orange;
        }
        ::placeholder{
            color:blue;
        }
        .img{
            width: 100px;
            height: 100px;
        }
    </style>
</head>
<body>
    <div class="container text-center p-2">
        <div class="row">
            <div class="col-12 text-warning h1 mb-4">
                Siparişler
            </div>

            <div class="col-12">
                <div class="row justify-content-center align-items-center">
                    <?php
                        $sql6 = "SELECT * FROM sepet, urun, magaza, uruncesit, kargo, member WHERE magaza.magazaId = '$magazaId' AND sepet.urunId = urun.urunId AND magaza.magazaId = urun.magazaId AND uruncesit.urunCesitId = urun.urunCesitId AND kargo.kargoId = sepet.kargoId AND sepet.memberId = member.memberId ORDER BY sepet.sepetId DESC";
                        $sorgu6 = mysqli_query($baglan,$sql6);
                        while($sorguCek6 = mysqli_fetch_array($sorgu6)):
                    ?>
                    <div class="col-3 my-2 px-5">
                        <div class="row shadow">
                            <div class="col-12">
                                <a href="/yc196502005/site/urun.php?urunId=<?php echo $sorguCek6['urunId']?>">
                                    <img src="<?php echo $sorguCek6['photo']; ?>" alt="" class="img">
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="/yc196502005/site/magaza?magazaId=<?php echo $sorguCek6['magazaId'];?>">
                                    <?php echo $sorguCek6['magaza']; ?>
                                </a>
                            </div>
                            <div class="col-6">
                                <?php echo $sorguCek6['urun']; ?>
                            </div>
                            <div class="col-12 my-1">
                                <?php echo $sorguCek6['fiyat']; ?> Tl
                            </div>
                            <div class="col-12 my-1">
                                Sipariş Veren : <br><?php echo $sorguCek6['ad']." ".$sorguCek6['soyad']; ?>
                            </div>
                            <div class="col-12 my-1">
                                Telefon Numarası : <br><?php echo $sorguCek6['tel'];?>
                            </div>
                            <div class="col-12 my-1">
                                E-Posta : <br><?php echo $sorguCek6['ePosta']?>
                            </div>
                            <div class="col-12 my-1">
                                Adres : <?php echo $sorguCek6['il']." ".$sorguCek6['ilce']." ".$sorguCek6['adres']; ?>
                            </div>
                            <div class="col-12  my-1">
                                Kargo Durumu : <?php echo $sorguCek6['kargo']; ?>
                            </div>
                            <div class="col-12 my-1">
                                <form action="/yc196502005/magaza/include/siparisIslem.php?sepetId=<?php echo $sorguCek6['sepetId'];?>" method="POST" enctype="multipart/form-data">
                                    Kargo Durumunu Güncelle
                                    <select name="kargoId" required>
                                        <?php
                                            $sql5 = "SELECT * FROM kargo";
                                            $sorgu5 = mysqli_query($baglan,$sql5);
                                            while($sorguCek5 = mysqli_fetch_array($sorgu5)):
                                        ?>
                                        <option value="<?php echo $sorguCek5['kargoId']; ?>"><?php echo $sorguCek5['kargo']; ?></option>
                                        <?php
                                            endwhile;
                                        ?>
                                    </select><br>
                                    <input type="submit" value="Güncelle" class="input1 input3 bg-warning text-white rounded my-2">
                                </form>
                            </div>
                        </div>
                    </div>
                    <?php
                        endwhile;
                    ?>
                </div>
            </div>
        </div>
    </div>
    

</body>
</html>