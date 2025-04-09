<?php
    include('../source/include/baglan.php');
    if(!isset($_GET['urunId']) ||  $_GET['urunId'] == ''){
        header("Location:/yc196502005/");
    }
    if(isset($_SESSION['member'])){
        $memberId = $_SESSION['member']['memberId'];
    }else{
        $memberId = "";
    }
    $urunId = $_GET['urunId'];
    $sql6 = "SELECT * FROM urun, magaza, uruncesit WHERE urun.urunId = '$urunId' AND magaza.magazaId = urun.magazaId AND uruncesit.urunCesitId = urun.urunCesitId";
    $sorgu6 = mysqli_query($baglan,$sql6);
    $sorguCek6 = mysqli_fetch_array($sorgu6);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/yc196502005/source/css/bootstrap.css">
    <title>Bal Şifa | Ürün</title>
    <style>
        a{
            text-decoration: none !important;
        }
        a:hover{
            cursor:pointer;
        }
        .a:hover{
            cursor:auto;
        }
        .menu{
            position:relative;
            line-height:50px;
        }
        .menuAc{
            display:none;
            position:absolute;
            z-index: 1;
            top:30px;
            background: rgba(0,0,0,0.8);
            color: white;
            line-height:20px;
        }
        .menu:hover .menuAc{
            display: inline-block;
        }
        .menAc{
            display:none;
            position:absolute;
            z-index: 1;
            background: white;
            top:30px;
            line-height:20px;
        }
        .renk0{
            background-color:rgba(235,235,235,0.4);
        }
        .sekme{
            display:none;
        }
        .input0{
            width:300px;
            height:40px;
            background-color:rgba(235,235,235,0.4);
            border-radius:10px 0px 0px 10px;
            text-indent:15px;
            border:1px solid orange;
            outline:none;
        }
        .input1{
            width:100px;
            height:40px;
            border-radius:0px 10px 10px 0px;
            border:1px solid orange;
            outline:none;
        }
        .input2{
            width:100px;
            height:30px;
            border:none;
            outline:none;
        }
        .input2:hover{
            border:1px solid orange;
        }
        .input3{
            width:600px;
            height:200px;
            background-color:rgba(235,235,235,0.4);
            border-radius:20px;
            text-indent:15px;
            border:none;
            outline:none;
        }
        .input4{
            width:150px;
            height:50px;
            border:none;
            outline:none;
        }
        .input3:focus{
            border:1px solid blue;
        }
        .input3:hover{
            border:1px solid blue;
        }
        .input4:hover{
            border:1px solid blue;
        }
        ::placeholder{
            color:blue;
        }
        .img{
            width:500px;
            height:500px;
        }

    </style>
</head>
<body>

    <?php include('../source/include/top.php');?>

    <div class="container border p-2" style="margin-top: 150px;">
        <div class="row justify-content-center align-items-center">
            <div class="col-6">
                <img src="<?php echo $sorguCek6['photo']; ?>" alt="" class="img">
            </div>
            <div class="col-6">
                <div class="row">
                    
                    <div class="col-12 h3">
                        Mağaza İsmi : 
                        <a href="/yc196502005/site/magaza?magazaId=<?php echo $sorguCek6['magazaId'];?>">
                            <?php echo $sorguCek6['magaza']; ?>
                        </a>
                    </div>
                    <div class="col-12 h3">
                        Ürün İsmi : <?php echo $sorguCek6['urun']; ?>
                    </div>

                    <div class="col-12">
                        Ürün Açıklaması : <?php echo $sorguCek6['aciklama']; ?>
                    </div>
                    <div class="col-12">
                        Ürün Ağırlığı : <?php echo $sorguCek6['agirlik']; ?> Kg
                    </div>
                    <div class="col-12">
                        Ürün Adeti : <?php echo $sorguCek6['stok']; ?>
                    </div>
                    <div class="col-12 my-1">
                        Ürün Fiyatı : <?php echo $sorguCek6['fiyat']; ?> Tl
                    </div>
                    <div class="col-12 my-1">
                        <form action="<?php if(isset($_SESSION['member'])){ echo "/yc196502005/site/sepeteEkle.php?urunId=".$sorguCek6['urunId']; }else{ echo "/yc196502005/member/"; }?>" method="POST">
                            <input type="submit" value="Sepete Ekle" class="input2 bg-warning text-white rounded">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container border text-center my-4 p-5">
        <div class="row">
            <div class="col-12 text-warning h1 mb-4">
                Ürün Yorumları
            </div>
            <div class="col-12 rounded text-warning h5 renk0 p-2 px-4">
                <div class="row">
                    <div class="col-6 rounded py-3 sekmeAc" style="background-color:white;">
                        <a onclick="sekmeAc(0)">
                            Ürüne Yorum Yapın
                        </a>    
                    </div>
                    <div class="col-6 rounded py-3 sekmeAc">
                        <a onclick="sekmeAc(1)">
                            Ürün Yorumları
                        </a>    
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 sekme" style="display:block;">
                        <form action="<?php if($memberId == ''){ echo "/yc196502005/member/"; }else{ echo "/yc196502005/site/urunIslem?urunId=".$urunId; }?>" method="POST">
                            <textarea name="yorum" placeholder="Yorum Yapınız" class="input3 mt-2 mb-2 p-2" required></textarea><br>
                            <input type="reset" value="Sıfırla" class="input4 bg-warning text-white rounded">
                            <input type="submit" value="Yorum Yap" class="input4 bg-warning text-white rounded">
                        </form>
                    </div>
                    <div class="col-12 sekme">
                        <?php
                            $sql7 = "SELECT * FROM urun, urunyorum, member WHERE urunyorum.urunId = '$urunId' AND urun.urunId = urunyorum.urunId AND member.memberId = urunyorum.memberId ORDER BY urunYorumId DESC";
                            $sorgu7 = mysqli_query($baglan,$sql7);
                            while($sorguCek7 = mysqli_fetch_array($sorgu7)):
                        ?>
                            <div class="row text-start my-3">
                                <div class="col-12 border">
                                    <div class="row">
                                        <div class="col-6">
                                            <?php echo $sorguCek7['ad']." ".$sorguCek7['soyad']?>
                                        </div>
                                        <div class="col-6 text-end <?php echo $memberId == $sorguCek7['memberId'] ? '':'d-none'; ?>">
                                            <a href="/yc196502005/site/urunIslem?urunYorumId=<?php echo $sorguCek7['urunYorumId'];?>&&urunId=<?php echo $urunId;?>">
                                                Yorumu Sil <img src="/yc196502005/source/photo/sil.fw.png" alt="" width="17px" height="17px">
                                            </a>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-12">
                                    <?php echo $sorguCek7['yorum']?>
                                </div>
                            </div>  
                        <?php
                            endwhile;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <?php include('../source/include/bottom.php');?>

    <script>
        function sekmeAc(e){
            var sekmeAc = document.getElementsByClassName('sekmeAc');
            var sekme = document.getElementsByClassName('sekme');
            var i;
            for(i = 0; i < sekmeAc.length; i++){
                sekmeAc[i].style.backgroundColor = 'rgba(242,242,242,0.5)';
            }
            sekmeAc[e].style.backgroundColor = 'white';
            for(i = 0; i < sekme.length; i++){
                sekme[i].style.display = 'none';
            }
            sekme[e].style.display = 'block';

            document.getElementsByClassName('i')[e].focus();
        }

        var menAc = document.getElementsByClassName('menAc');
        var sayi = 0;
        function men(){
            if(sayi == 0){
                menAc[0].style.display = 'block';
                sayi++;
            }else{
                menAc[0].style.display = 'none';
                sayi--;
            }
        }
        function kapat(){
            menAc[0].style.display = 'none';
            sayi--;
        }
    </script>

    <script src="/yc196502005/source/js/bootstrap.js"></script>
    
</body>
</html>