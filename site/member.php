<?php
    include('../source/include/baglan.php');
    $memberId = $_SESSION['member']['memberId'];
    $sql6 = "SELECT * FROM member WHERE memberId = '$memberId'";
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
    <title>Bal Şifa | Kullanıcı Ayarları</title>
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
        .input3{
            width:300px;
            height:50px;
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
        .input5{
            height:150px;
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

    <div class="container border mb-5 p-2 text-center" style="margin-top: 100px;">
        <div class="col-12 h3">
            Üye Ayarları
        </div>
        <form action="/yc196502005/site/memberIslem.php" method="POST">
            <input type="text" name="ad" value="<?php echo $sorguCek6['ad']?>" class="input3 input4 mt-2 mb-2 p-2" autofocus required>
            <input type="text" name="soyad" value="<?php echo $sorguCek6['soyad']?>" class="input3 input4 mt-2 mb-2 p-2" required><br>
            <input type="tel" name="tel" value="<?php echo $sorguCek6['tel']?>" class="input3 mt-2 mb-2 p-2" required><br>
            <input type="text" name="il" value="<?php echo $sorguCek6['il']?>" class="input3 input4 mt-2 mb-2 p-2 i" required>
            <input type="text" name="ilce" value="<?php echo $sorguCek6['ilce']?>" class="input3 input4 mt-2 mb-2 p-2" required><br>
            <textarea name="adres" class="input3 input5 mt-2 mb-2 p-2" required><?php echo $sorguCek6['adres']?></textarea><br>
            <input type="email" name="ePosta" value="<?php echo $sorguCek6['ePosta']?>" class="input3 mt-2 mb-2 p-2" required><br>
            <input type="password" name="sifre" value="<?php echo $sorguCek6['sifre']?>" class="input3 mt-2 mb-2 p-2" required><br>
            <input type="reset" value="Sıfırla" class="input4 bg-warning text-white rounded">
            <input type="submit" value="Güncelle" class="input4 bg-warning text-white rounded">
        </form>
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