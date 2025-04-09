<?php
    include('../source/include/baglan.php');
    $memberId = $_SESSION['member']['memberId'];
    $sql3 = "SELECT * FROM magaza WHERE $memberId = magaza.memberId";
    $sorgu3 = mysqli_query($baglan,$sql3);
    $sorguCek3 = mysqli_fetch_array($sorgu3);
    
    $_SESSION['magaza'] = $sorguCek3;

    if($_SESSION['magaza']['magazaId'] != ''){
        include('magaza.php');
    }else{
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/yc196502005/source/css/bootstrap.css">
    <title>Mağaza Oluştur</title>
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
            width:300px;
            height:50px;
            background-color:rgba(235,235,235,0.4);
            border-radius:20px;
            text-indent:15px;
            border:none;
            outline:none;
        }
        .input3{
            width:150px;
            height:50px;
            border:none;
            outline:none;
        }
        .input2:focus{
            border:1px solid blue;
        }
        .input2:hover{
            border:1px solid blue;
        }
        .input3:hover{
            border:1px solid blue;
        }
        ::placeholder{
            color:blue;
        }
    </style>
</head>
<body>

    <?php   include('../source/include/top.php');?>

    <div class="container text-center mb-5 py-5 shadow" style="margin-top: 150px;">
        <div class="row">
            <div class="col-12 ps-5 ms-5">
                <div class="row">
                    <div class="col-1 text-end">
                        <a href="/yc196502005/">
                            <img src="/yc196502005/source/photo/balArti.fw.png" width="70px">
                        </a>
                    </div>
                    <div class="col-11 text-start">
                        <div class="h3 ">
                            Mağaza Oluştur
                        </div>
                        <div style="padding-left: 100px;">
                            Kendi Mağazanı Oluşturup Bal Ürünlerini Satmanın En Kolay Yolu BalŞifa.com da
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <form action="/yc196502005/magaza/magazaOlustur.php" method="POST" enctype="multipart/form-data">
                    <input type="text" name="isim" placeholder="Magaza İsmi" class="input2 mt-2 mb-2 p-2" autofocus required><br>
                    Yüklenecek profil resmini seçin (400 * 400 px)<br>
                    <input type="file" name="profil" class="mt-2 mb-2 p-2" required><br>
                    Yüklenecek banner resmini seçin (1400 * 200)<br>
                    <input type="file" name="banner" class="mt-2 mb-2 p-2" required><br>
                    <input type="reset" value="Sıfırla" class="input3 bg-warning text-white rounded">
                    <input type="submit" value="Mağaza Oluştur" class="input3 bg-warning text-white rounded">
                </form>
            </div>
        </div>
    </div>

    <?php   include('../source/include/bottom.php');?>

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
<?php
    }
?>