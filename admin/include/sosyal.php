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
        body{
            word-wrap: break-word;
        }
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
            width:100px;
            height:100px;
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
                Sosyal Medya İşlemleri
            </div>
            <div class="col-12 rounded text-warning h5 renk0 p-2 px-4">
                <div class="row">
                    <div class="col-6 rounded py-3 sekmeAc" style="background-color:white;">
                        <a onclick="sekmeAc(0)">
                            Sosyal Medya
                        </a>    
                    </div>
                    <div class="col-6 rounded py-3 sekmeAc">
                        <a onclick="sekmeAc(1)">
                            Sosyal Medya Ekle
                        </a>    
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 sekme" style="display:block;">
                        <div class="row justify-content-center align-items-center">
                            <?php
                                $sql6 = "SELECT * FROM bottom";
                                $sorgu6 = mysqli_query($baglan,$sql6);
                                while($sorguCek6 = mysqli_fetch_array($sorgu6)):
                            ?>
                            <div class="col-4 my-2 px-5">
                                <div class="row shadow">
                                    <div class="col-12 text-start mb-1 border">
                                        <a href="javascript:guncelle(<?php echo $sorguCek6['bottomId'];?>)">
                                            <img src="/yc196502005/source/photo/guncelle.fw.png" alt="" width="17px" height="17px">
                                        </a>
                                    </div>
                                    <div id="guncel<?php echo $sorguCek6['bottomId'];?>">
                                        <div class="col-12 text-center">
                                            <a href="<?php echo $sorguCek6['url']; ?>" target="_blank">
                                                <?php echo $sorguCek6['ad']; ?><br>
                                                <?php echo $sorguCek6['url']; ?><br>
                                                <img src="<?php echo $sorguCek6['photoUrl']; ?>" alt="" class="img">
                                            </a> 
                                        </div>
                                        <div class="col-12 my-1">
                                            <form action="/yc196502005/admin/include/sosyalIslem.php?bottomSilId=<?php echo $sorguCek6['bottomId'];?>" method="POST">
                                                <input type="submit" value="Sil" class="input3 bg-warning text-white rounded">
                                            </form>
                                        </div>
                                    </div>
                                    <div class="guncelle p-1" id="guncelle<?php echo $sorguCek6['bottomId'];?>">
                                        <form action="/yc196502005/admin/include/sosyalIslem.php?bottomId=<?php echo $sorguCek6['bottomId'];?>" method="POST">
                                            <input type="text" name="ad" value="<?php echo $sorguCek6['ad'];?>" class="input0 mt-2 mb-2 p-2" autofocus required><br>
                                            <input type="text" name="url" value="<?php echo $sorguCek6['url'];?>" class="input0 mt-2 mb-2 p-2" required><br>
                                            <a href="javascript:kapat(<?php echo $sorguCek6['bottomId'];?>)" class="m-3 mr-4">
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
                        <form action="/yc196502005/admin/include/sosyalIslem.php" method="POST" enctype="multipart/form-data">
                            <input type="text" name="ad" placeholder="Sosyal Medya İsmi" class="input0 mt-2 mb-2 p-2" autofocus required><br>
                            <input type="text" name="url" placeholder="Sosyal Medya Urli" class="input0 mt-2 mb-2 p-2" required><br>
                            Yüklenecek resmi seçiniz (250 * 240 px) : <br>
                            <input type="file" name="photoUrl" class="mt-2 mb-2 p-2" required><br>
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