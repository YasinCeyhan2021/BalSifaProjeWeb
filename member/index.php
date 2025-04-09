<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../source/css/bootstrap.css">
    <title>Üye Giriş | Üye Ol</title>
    <style>
        a{
            text-decoration: none !important;
        }
        a:hover{
            cursor:pointer;
        }
        .sekme{
            display:none;
        }
        .sekmeAc{
            background-color:rgba(242,242,242,0.5);
        }
        .sekmeAc:hover{
            background-color:rgba(242,242,242,0.1) !important;
            color:blue;
        }
        .renk0{
            background-color:rgba(235,235,235,0.4);
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
                Üye
            </div>
            <div class="col-12 rounded text-warning h5 renk0 p-2 px-4">
                <div class="row">
                    <div class="col-6 rounded py-3 sekmeAc" style="background-color:white;">
                        <a onclick="sekmeAc(0)">
                            Üye Giriş
                        </a>    
                    </div>
                    <div class="col-6 rounded py-3 sekmeAc">
                        <a onclick="sekmeAc(1)">
                            Üye Ol
                        </a>    
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 sekme" style="display:block;">
                        <form action="/yc196502005/member/uyeGiris.php" method="POST">
                            <input type="email" name="ePosta" placeholder="E-posta adresi" class="input0 mt-2 mb-2 p-2 i" autofocus required><br>
                            <input type="password" name="sifre" placeholder="Şifre" class="input0 mt-2 mb-2 p-2" required><br>
                            <input type="reset" value="Sıfırla" class="input1 bg-warning text-white rounded">
                            <input type="submit" value="Giriş Yap" class="input1 bg-warning text-white rounded">
                        </form>
                    </div>
                    <div class="col-12 sekme">
                        <form action="/yc196502005/member/uyeKaydol.php" method="POST">
                            <input type="text" name="ad" placeholder="Ad" class="input0 input1 mt-2 mb-2 p-2 i" required>
                            <input type="text" name="soyad" placeholder="Soyad" class="input0 input1 mt-2 mb-2 p-2" required><br>
                            <input type="tel" name="tel" placeholder="Telefon Numarası" class="input0 mt-2 mb-2 p-2" required><br>
                            <input type="text" name="il" placeholder="İl" class="input0 input1 mt-2 mb-2 p-2 i" required>
                            <input type="text" name="ilce" placeholder="İlçe" class="input0 input1 mt-2 mb-2 p-2" required><br>
                            <textarea name="adres" placeholder="Açık Adres" class="input0 input2 mt-2 mb-2 p-2" required></textarea><br>
                            <input type="email" name="ePosta" placeholder="E-posta adresi" class="input0 mt-2 mb-2 p-2" required><br>
                            <input type="password" name="sifre" placeholder="Şifre" class="input0 mt-2 mb-2 p-2" required><br>
                            <input type="reset" value="Sıfırla" class="input1 bg-warning text-white rounded">
                            <input type="submit" value="Üye Ol" class="input1 bg-warning text-white rounded">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
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
    </script>
</body>
</html>