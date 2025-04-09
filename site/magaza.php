<?php
    include('../source/include/baglan.php');

    if(!isset($_GET['magazaId']) ||  $_GET['magazaId'] == ''){
        header("Location:/yc196502005/");
    }
    if(isset($_SESSION['member'])){
        $memberId = $_SESSION['member']['memberId'];
    }else{
        $memberId = "";
    }
    $magazaId = $_GET['magazaId'];

    $magazaId = $_GET['magazaId'];
    $sql4 = "SELECT * FROM magaza WHERE $magazaId = magaza.magazaId";
    $sorgu4 = mysqli_query($baglan,$sql4);
    $sorguCek4 = mysqli_fetch_array($sorgu4);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 minimum-scale=1.0, maximum-scale=1.0,user-scalable=0">
    <link rel="stylesheet" href="/yc196502005/source/css/bootstrap.css">
    <title>Bal Şifa | Mağaza</title>
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
        .carousel-control-prev-icon, .carousel-control-next-icon {
            width: 50px;
            height: 50px;
            background-color:blue;
            border-radius:10px 10px 10px 10px;
        }
        .img{
            width:200px;
            height:200px;
        }
    </style>
</head>
<body>

    <?php include('../source/include/top.php');?>

    <div class="container-fluid" style="margin-top: 65px;">
        <div class="row bg-light" style="height: 275px;">
            <div class="col-12 p-0">
                <img src="<?php echo $sorguCek4['banner'] ?>" width="100%" height="225px">
            </div>
            <div class="col-3" style="position: relative; top: -60px; left: 150px;">
                <img src="<?php echo $sorguCek4['profil'] ?>" class="img-thumbnail rounded-circle border-primary" style="width: 140px; height: 140px;">
            </div>
            <div class="col-3 h1" >
                <?php echo $sorguCek4['magaza'] ?>
            </div>
        </div>
    </div>


    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
            <?php
                $sql6 = "SELECT * FROM magaza, urunCesit, urun WHERE magaza.magazaId = '$magazaId' AND urun.magazaId = magaza.magazaId AND urunCesit.urunCesitId = urun.urunCesitId";
                $sorgu6 = mysqli_query($baglan,$sql6);
                while($sorguCek6 = mysqli_fetch_array($sorgu6)):
            ?>
            <div class="col-3 my-2 px-5">
                <div class="row shadow">
                    <div class="col-12 text-center">
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
                    <div class="col-6 text-end my-1">
                        <?php echo $sorguCek6['fiyat']; ?> Tl
                    </div>
                    <div class="col-6 my-1">
                        <form action="<?php if(isset($_SESSION['member'])){ echo "/yc196502005/site/sepeteEkle.php?urunId=".$sorguCek6['urunId']; }else{ echo "/yc196502005/member/"; }?>" method="POST">
                            <input type="submit" value="Sepete Ekle" class="input2 bg-warning text-white rounded">
                        </form>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
            ?>
        </div>
    </div>

    <div class="container border text-center my-4 p-5">
        <div class="row">
            <div class="col-12 text-warning h1 mb-4">
                Mağaza Yorumları
            </div>
            <div class="col-12 rounded text-warning h5 renk0 p-2 px-4">
                <div class="row">
                    <div class="col-6 rounded py-3 sekmeAc" style="background-color:white;">
                        <a onclick="sekmeAc(0)">
                            Mağazaya Yorum Yapın
                        </a>    
                    </div>
                    <div class="col-6 rounded py-3 sekmeAc">
                        <a onclick="sekmeAc(1)">
                            Mağaza Yorumları
                        </a>    
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 sekme" style="display:block;">
                        <form action="<?php if($memberId == ''){ echo "/yc196502005/member/"; }else{ echo "/yc196502005/site/magazaIslem?magazaId=".$magazaId; }?>" method="POST">
                            <textarea name="yorum" placeholder="Yorum Yapınız" class="input3 mt-2 mb-2 p-2" required></textarea><br>
                            <input type="reset" value="Sıfırla" class="input4 bg-warning text-white rounded">
                            <input type="submit" value="Yorum Yap" class="input4 bg-warning text-white rounded">
                        </form>
                    </div>
                    <div class="col-12 sekme">
                        <?php
                            $sql7 = "SELECT * FROM magaza, magazayorum, member WHERE magazayorum.magazaId = '$magazaId' AND magaza.magazaId = magazayorum.magazaId AND member.memberId = magazayorum.memberId ORDER BY magazaYorumId DESC";
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
                                            <a href="/yc196502005/site/magazaIslem?magazaYorumId=<?php echo $sorguCek7['magazaYorumId'];?>&&magazaId=<?php echo $magazaId;?>">
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