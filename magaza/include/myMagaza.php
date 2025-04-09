<?php
    include('../../source/include/baglan.php');
    $magazaId = $_SESSION['magaza']['magazaId'];
    $sql4 = "SELECT * FROM magaza WHERE $magazaId = magaza.magazaId";
    $sorgu4 = mysqli_query($baglan,$sql4);
    $sorguCek4 = mysqli_fetch_array($sorgu4);
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
    <div class="container-fluid fixed-top" >
        <div class="row bg-light" style="height: 250px;">
            <div class="col-12 p-0">
                <img src="<?php echo $sorguCek4['banner'] ?>" width="100%" height="200px">
            </div>
            <div class="col-3" style="position: relative; top: -60px; left: 150px;">
                <img src="<?php echo $sorguCek4['profil'] ?>" class="img-thumbnail rounded-circle border-primary" style="width: 140px; height: 140px;">
            </div>
            <div class="col-3 h1" >
                <?php echo $sorguCek4['magaza'] ?>
            </div>
        </div>
    </div>

    <div class="container border text-center mb-4 p-5" style="margin-top: 300px;z-index: -1;">
        <div class="row">
            <div class="col-12 text-warning h1 mb-4">
                Mağaza Ayarları
            </div>
            <div class="col-12 rounded text-warning h5 renk0 p-2 px-4">
                <div class="row">
                    <div class="col-4 rounded py-3 sekmeAc" style="background-color:white;">
                        <a onclick="sekmeAc(0)">
                            Mağaza ismi
                        </a>    
                    </div>
                    <div class="col-4 rounded py-3 sekmeAc">
                        <a onclick="sekmeAc(1)">
                            Mağaza Profili
                        </a>    
                    </div>
                    <div class="col-4 rounded py-3 sekmeAc">
                        <a onclick="sekmeAc(2)">
                            Mağaza Bannerı
                        </a>    
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 sekme" style="display:block;">
                        <form action="/yc196502005/magaza/include/magazaAyar.php?magazaId=<?php echo $magazaId;?>" method="POST">
                            <input type="text" name="isim" placeholder="Magaza İsmi" class="input2 mt-2 mb-2 p-2 i" autofocus required><br>
                            <input type="reset" value="Sıfırla" class="input3 bg-warning text-white rounded">
                            <input type="submit" value="Değiştir" class="input3 bg-warning text-white rounded">
                        </form>
                    </div>
                    <div class="col-12 sekme">
                        <form action="/yc196502005/magaza/include/magazaAyar.php?profil=<?php echo $sorguCek4['profil'];?>" method="POST" enctype="multipart/form-data">
                            Yüklenecek profil resmini seçin (400 * 400 px)<br>
                            <input type="file" name="profil" class="mt-2 mb-2 p-2" required><br>
                            <input type="reset" value="Sıfırla" class="input3 bg-warning text-white rounded">
                            <input type="submit" value="Değiştir" class="input3 bg-warning text-white rounded">
                        </form>
                    </div>
                    <div class="col-12 sekme">
                        <form action="/yc196502005/magaza/include/magazaAyar.php?banner=<?php echo $sorguCek4['banner']?>" method="POST" enctype="multipart/form-data">
                            Yüklenecek banner resmini seçin (1400 * 200 px)<br>
                            <input type="file" name="banner" class="mt-2 mb-2 p-2" required><br>
                            <input type="reset" value="Sıfırla" class="input3 bg-warning text-white rounded">
                            <input type="submit" value="Değiştir" class="input3 bg-warning text-white rounded">
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