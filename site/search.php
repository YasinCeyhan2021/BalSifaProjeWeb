<?php
    include('../source/include/baglan.php');
    if(!isset($_GET['search']) ||  $_GET['search'] == ''){
        header("Location:/yc196502005/");
    }
    $search = $_GET['search'];
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/yc196502005/source/css/bootstrap.css">
    <title>Bal Şifa | Search</title>
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


    <div class="container border mb-5 p-2 text-center" style="margin-top: 100px; min-height: 500px;">
        <div class="row">
            <div class="col-12 h3">
                    Arama Sonuçları
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-12 h3 my-5 text-start">
                Ürünler
            </div>
            <?php
                $sql6 = "SELECT * FROM magaza, urunCesit, urun WHERE urun.magazaId = magaza.magazaId AND urunCesit.urunCesitId = urun.urunCesitId AND urun.stok != 0 AND (magaza.magaza LIKE '%$search%' OR uruncesit.urun LIKE '%$search%')";
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
                            <?php echo $sorguCek6['magaza']; ?> - >
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

        <div class="row">
            <div class="col-12 h3 my-5 text-start">
                Mağazalar
            </div>
            <?php
                $sql7 = "SELECT * FROM magaza WHERE magaza.magaza LIKE '%$search%'";
                $sorgu7 = mysqli_query($baglan,$sql7);
                while($sorguCek7 = mysqli_fetch_array($sorgu7)):
            ?>
            <div class="col-6 my-2 px-5">
                <div class="row shadow bg-light">
                    <div class="col-12 p-0">
                        <img src="<?php echo $sorguCek7['banner'] ?>" width="100%" height="80px">
                    </div>
                    <div class="col-3" style="position: relative; top: -20px; left: 20px;">
                        <img src="<?php echo $sorguCek7['profil'] ?>" class="img-thumbnail rounded-circle border-primary" style="width: 60px; height: 60px;">
                    </div>
                    <div class="col-3" style="text-indent: -100px;">
                        <a href="/yc196502005/site/magaza?magazaId=<?php echo $sorguCek7['magazaId'];?>">
                            <?php echo $sorguCek7['magaza']; ?>
                        </a>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
            ?>
        </div>
    </div>

    <?php include('../source/include/bottom.php');?>


    <script>
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