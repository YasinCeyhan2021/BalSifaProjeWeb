<?php
    include('../source/include/baglan.php');
    if(isset($_SESSION['kullanici'])){
        include('admin.php');
    }else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../source/css/bootstrap.css">
    <title>Admin Giriş</title>
    <style>
        a{
            text-decoration: none !important;
        }
        a:hover{
            cursor:pointer;
        }
        .input0{
            width:300px;
            height:50px;
            background-color:rgba(235,235,235,0.4);
            border-radius:20px;
            text-indent:15px;
            border:none;
            outline:none;
        }
        .input1{
            width:150px;
            height:50px;
            border:none;
            outline:none;
        }
        .input2{
            height:150px;
        }
        .input0:focus{
            border:1px solid blue;
        }
        .input0:hover{
            border:1px solid blue;
        }
        .input1:hover{
            border:1px solid blue;
        }
        ::placeholder{
            color:blue;
        }
    </style>
</head>
<body>
    <div class="container border text-center mt-5 mb-5 p-5" style="width:500px;">
        <div class="row">
            <div class="col-12 text-warning h1 mb-4">
                Admin Giriş
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <form action="/yc196502005/admin/adminGiris.php" method="POST">
                            <input type="text" name="kAdi" placeholder="Kullanıcı Adı" class="input0 mt-2 mb-2 p-2" autofocus required><br>
                            <input type="password" name="sifre" placeholder="Şifre" class="input0 mt-2 mb-2 p-2" required><br>
                            <input type="reset" value="Sıfırla" class="input1 bg-warning text-white rounded">
                            <input type="submit" value="Giriş Yap" class="input1 bg-warning text-white rounded">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
<?php
    }
?>