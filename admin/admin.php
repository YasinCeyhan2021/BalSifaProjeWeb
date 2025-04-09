<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 minimum-scale=1.0, maximum-scale=1.0,user-scalable=0">
    <title>Kullanıcı Ayarları</title>
    <link rel="stylesheet" href="/yc196502005/source/css/bootstrap.css">
    <style>
    body {
        -webkit-user-select: none;
        -moz-user-select: none;     
        -ms-user-select: none;     
        -o-user-select: none;
        user-select: none;     
    }
    a{
        text-decoration: none !important;
        color: orange;
    }
    #kutu1 {
        width:50px;
        height: 100vh;
        margin-left:10px;
    }
    iframe{
        width:100%;
        height:100vh;
        border:0;
    }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col p-0 border-end" id="kutu1">
                <div class="row h5">
                    <div class="col-12 mt-3">
                        <a href="javascript:menu();">
                            <img src="/yc196502005/source/photo/menu.fw.png" width=40 height=30 id="resim">
                        </a>
                        <span class="none ps-3">
                            <a href="/yc196502005/" class="text-primary">
                                Anasayfa
                            </a>
                        </span>
                    </div>

                    <div class="col-12 mt-3">
                        <a href="/yc196502005/admin/include/slider.php" target="sayfa" class="click">
                            <img src="/yc196502005/source/photo/album.fw.png" width=40>
                        </a>
                        <span class="none ps-3">
                            <a href="/yc196502005/admin/include/slider.php" target="sayfa">
                                Slider
                            </a>
                        </span>  
                    </div>
                    <div class="col-12 mt-3">
                        <a href="/yc196502005/admin/include/sosyal.php" target="sayfa" class="click">
                            <img src="/yc196502005/source/photo/instagram.fw.png" width=40 >
                        </a>
                        <span class="none ps-3">
                            <a href="/yc196502005/admin/include/sosyal.php" target="sayfa">
                                Sosyal Medya
                            </a>
                        </span>    
                    </div>
                    <div class="col-12 mt-3">
                        <a href="/yc196502005/admin/include/iletisim.php" target="sayfa" class="click">
                            <img src="/yc196502005/source/photo/iletisim.fw.png" width=40>
                        </a>
                        <span class="none ps-3">
                            <a href="/yc196502005/admin/include/iletisim.php" target="sayfa">
                                İletişim
                            </a>
                        </span>    
                    </div>
                    <div class="col-12 mt-3">
                        <a href="/yc196502005/admin/include/admin.php" target="sayfa" class="click">
                            <img src="/yc196502005/source/photo/admin.fw.png" width=40>
                        </a>
                        <span class="none ps-3">
                            <a href="/yc196502005/admin/include/admin.php" target="sayfa">
                                Admin Ayarları
                            </a>
                        </span>    
                    </div>
                    <div class="col-12 mt-3">
                        <a href="/yc196502005/site/logout.php" class="click">
                            <img src="/yc196502005/source/photo/cikis.fw.png" width=40>
                        </a>
                        <span class="none ps-3">
                            <a href="/yc196502005/site/logout.php">
                                Oturumu Kapat
                            </a>
                        </span>    
                    </div>
                </div>
            </div>
            <div class="col-10" id="kutu2">
                <div class="row">
                    <iframe src="/yc196502005/admin/include/slider.php" name="sayfa" class="p-0 m-0"></iframe>
                </div>
            </div>
        </div>
    </div>
    <script>

        var sayi = 0;
        var i;
        var none = document.getElementsByClassName("none");
        var click = document.getElementsByClassName("click");
        <?php
            if(isset($_GET['sekme'])){
                echo "click[".$_GET['sekme']."].click();";
            }else{
                echo "click[0].click();";
            }
        ?>
        function menu(){
            if(sayi == 0){
                for(i = 0; i < none.length; i++){
                    none[i].style.display='none';
                }
                document.getElementById("kutu1").className = "p-0 border-end";
                document.getElementById("kutu2").className = "col";
                document.getElementById('resim').src='/yc196502005/source/photo/menu.png';

                sayi++; 
            }else{
                sayi--; 
                for(i = 0; i < none.length; i++){
                    none[i].style.display='inline-block';
                }
                document.getElementById("kutu1").className = "col p-0 border-end";
                document.getElementById("kutu2").className = "col-10";
                document.getElementById('resim').src='/yc196502005/source/photo/menu.fw.png';
            }
        }
    </script>
</body>
</html>