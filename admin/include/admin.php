<?php
    include('../../source/include/baglan.php');
    $kullaniciId = $_SESSION['kullanici']['kullaniciId'];
    $sql6 = "SELECT * FROM kullanici WHERE kullaniciId = '$kullaniciId'";
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
    </style>
</head>
<body>

 

    <div class="container border mb-5 p-2 text-center" style="margin-top: 100px;">
        <div class="col-12 h3">
            Admin Ayarları
        </div>
        <form action="/yc196502005/admin/include/adminIslem.php" method="POST">
            <input type="text" name="kAdi" value="<?php echo $sorguCek6['kAdi']?>" class="input3 mt-2 mb-2 p-2" autofocus required><br>
            <input type="password" name="sifre" value="<?php echo $sorguCek6['sifre']?>" class="input3 mt-2 mb-2 p-2" required><br>
            <input type="reset" value="Sıfırla" class="input4 bg-warning text-white rounded">
            <input type="submit" value="Güncelle" class="input4 bg-warning text-white rounded">
        </form>
    </div>

    <script src="/yc196502005/source/js/bootstrap.js"></script>
    
</body>
</html>