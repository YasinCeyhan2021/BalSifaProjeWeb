<?php
    include('../source/include/baglan.php');
    $memberId = $_SESSION['member']['memberId'];
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/yc196502005/source/css/bootstrap.css">
    <title>Bal Şifa | Sepet</title>
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
        .img{
            width:200px;
            height:200px;
        }
    </style>
</head>
<body>

    <?php include('../source/include/top.php');?>

    <div class="container" style="margin-top: 150px; margin-bottom: 150px;">
        <div class="row justify-content-center align-items-center">
            <?php
                $toplamUcret = 0;
                $sql6 = "SELECT * FROM sepet, urun, magaza, uruncesit, kargo WHERE sepet.memberId = '$memberId' AND sepet.urunId = urun.urunId AND magaza.magazaId = urun.magazaId AND uruncesit.urunCesitId = urun.urunCesitId AND kargo.kargoId = sepet.kargoId ORDER BY sepet.sepetId DESC";
                $sorgu6 = mysqli_query($baglan,$sql6);
                while($sorguCek6 = mysqli_fetch_array($sorgu6)):
                    $toplamUcret += $sorguCek6['fiyat'];
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
                    <div class="col-6 text-end my-1">
                        <?php echo $sorguCek6['kargo']; ?>
                    </div>
                    <div class="col-12 text-end my-1 <?php echo $sorguCek6['kargoId'] == 1 ? 'd-block': 'd-none';?>">
                        <a href="/yc196502005/site/sepeteEkle.php?sepetId=<?php echo $sorguCek6['sepetId']?>">
                            Sepetten Kaldır <img src="/yc196502005/source/photo/sil.fw.png" alt="" width="20px">
                        </a>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
            ?>
        </div>
    </div>
    <div class="container-fluid fixed-bottom text-white" style="margin-top: -150px; background-color: rgb(10, 10, 10);">
        <div class="row">
            <div class="col-12 bg-primary text-primary">
                Sepet 
            </div>
            <div class="col-12 p-4 h3 text-center">
                Toplam Ücret : <?php echo $toplamUcret;?> Tl
            </div>
        </div>
    </div>

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