<?php
    include('../../source/include/baglan.php');
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
        .input3{
            width:100px;
            height:30px;
            border:none;
            outline:none;
        }
        .input4{
            width:150px;
            height:30px;
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
        .input3:hover{
            border:1px solid orange;
        }
        ::placeholder{
            color:blue;
        }
        .img{
            width:100%;
            height:150px;
        }
        .guncelle{
            display: none;
        }
    </style>
</head>
<body>
    <div class="container text-center p-2">
        <div class="row">
            <div class="col-12 text-warning h1 mb-4">
                Slider İşlemleri
            </div>
            <div class="col-12 rounded text-warning h5 renk0 p-2 px-4">
                <div class="row">
                    <div class="col-6 rounded py-3 sekmeAc" style="background-color:white;">
                        <a onclick="sekmeAc(0)">
                            Fotoğraflar
                        </a>    
                    </div>
                    <div class="col-6 rounded py-3 sekmeAc">
                        <a onclick="sekmeAc(1)">
                            Fotoğraf Ekle
                        </a>    
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 sekme" style="display:block;">
                        <div class="row justify-content-center align-items-center">
                            <?php
                                $sql6 = "SELECT * FROM slider";
                                $sorgu6 = mysqli_query($baglan,$sql6);
                                while($sorguCek6 = mysqli_fetch_array($sorgu6)):
                            ?>
                            <div class="col-4 my-2 px-5">
                                <div class="row shadow">
                                    <div class="col-12 text-start mb-1 border">
                                        <a href="javascript:guncelle(<?php echo $sorguCek6['sliderId'];?>)">
                                            <img src="/yc196502005/source/photo/guncelle.fw.png" alt="" width="17px" height="17px">
                                        </a>
                                    </div>
                                    <div id="guncel<?php echo $sorguCek6['sliderId'];?>">
                                        <div class="col-12 text-center">
                                            <img src="<?php echo $sorguCek6['url']; ?>" alt="" class="img">
                                        </div>
                                        <div class="col-12 my-1">
                                            <form action="/yc196502005/admin/include/sliderIslem.php?sliderSilId=<?php echo $sorguCek6['sliderId'];?>" method="POST">
                                                <input type="submit" value="Fotoğrafı Sil" class="input3 bg-warning text-white rounded">
                                            </form>
                                        </div>
                                    </div>
                                    <div class="guncelle p-1" id="guncelle<?php echo $sorguCek6['sliderId'];?>">
                                        <form action="/yc196502005/admin/include/sliderIslem.php?url=<?php echo $sorguCek6['url'];?>" method="POST" enctype="multipart/form-data">
                                            Yüklenecek resmi seçiniz (1500 * 660 px) : <br>
                                            <input type="file" name="url" class="mt-2 mb-2 p-2" required><br>
                                            <a href="javascript:kapat(<?php echo $sorguCek6['sliderId'];?>)" class="m-3 mr-4">
                                                <img src="/yc196502005/source/photo/kapat.fw.png" alt="" width="20px" height="20px">
                                            </a>
                                            <input type="submit" value="Güncelle" class="input1 input3 bg-warning text-white rounded">
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php
                                endwhile;
                            ?>
                        </div>
                    </div>
                    <div class="col-12 sekme">
                        <form action="/yc196502005/admin/include/sliderIslem.php" method="POST" enctype="multipart/form-data">
                            Yüklenecek resmi seçiniz (1500 * 660 px) : <br>
                            <input type="file" name="url" class="mt-2 mb-2 p-2" required><br>
                            <input type="reset" value="Sıfırla" class="input1 bg-warning text-white rounded">
                            <input type="submit" value="Kaydet" class="input1 bg-warning text-white rounded">
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

            document.getElementsByClassName('i')[e-1].focus();
              
        }

        function guncelle(e){
            document.getElementById("guncelle"+e).style.display = "block";
            document.getElementById("guncel"+e).style.display = "none";
        }
        function kapat(e){
            document.getElementById("guncelle"+e).style.display = "none";
            document.getElementById("guncel"+e).style.display = "block";
        }
    </script>
</body>
</html>