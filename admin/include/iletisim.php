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
    </style>
</head>
<body>
    <div class="container text-center p-2">
        <div class="row">
            <div class="col-12 text-warning h1 mb-4">
                İletişim
            </div>

            <div class="col-12">
                <?php
                    $sql7 = "SELECT * FROM iletisim ORDER BY iletisimId DESC";
                    $sorgu7 = mysqli_query($baglan,$sql7);
                    while($sorguCek7 = mysqli_fetch_array($sorgu7)):
                ?>
                    <div class="row text-start my-3">
                        <div class="col-12 border">
                            <div class="row">
                                <div class="col-6">
                                    <?php echo $sorguCek7['ad']." ".$sorguCek7['soyad']." ".$sorguCek7['ePosta']." ".$sorguCek7['tel'];?>
                                </div>
                                <div class="col-6 text-end">
                                    <a href="/yc196502005/admin/include/iletisimIslem.php?iletisimId=<?php echo $sorguCek7['iletisimId'];?>">
                                        Mesajı Sil <img src="/yc196502005/source/photo/sil.fw.png" alt="" width="17px" height="17px">
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-12">
                            <?php echo $sorguCek7['mesaj']?>
                        </div>
                    </div>  
                <?php
                    endwhile;
                ?>
            </div>
        </div>
    </div>
    

</body>
</html>