
<!-- top -->

<div class="container-fluid text-center shadow-sm fixed-top bg-white">
    <div class="row">
        <div class="col-12 bg-warning text-start" style="font-size: 12px;">
            <a href="/yc196502005/admin/">
                Bal Şifa
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <span class="menu">
                <a href="/yc196502005/" class="text-warning h3 a">
                    Bal Şifa
                </a>
                <span class="menuAc p-1 rounded" style="left: 0px; right: 0px;">
                    Site İsmi
                </span>
            </span>
        </div>
        <div class="col-4">
            <span class="menu">
                <form action="/yc196502005/site/search.php" method="GET">
                    <input type="text" name="search" placeholder="Arama Motoru" class="input0">
                    <input type="submit" value="Ara" class="input1 bg-warning" style="margin-left: -10px; line-height: 20px;">
                    <span class="menuAc p-1 rounded" style="top: 50px; left: -70px; right: -70px;">
                        Arama Motoru
                    </span>
                </form>
            </span>
        </div>
        <div class="col-4">
            <span class="menu">
                <?php
                    if(!isset($_SESSION['member'])){    
                ?>
                    <a href="/yc196502005/member/">
                        Giriş Yap
                    </a>
                    <span class="menuAc p-1 rounded" style="left: -20px; right: -20px;">
                        veya Üye Ol
                    </span>
                <?php 
                    }else{               
                ?>
                    <a onclick="men()">
                        <?php echo $_SESSION['member']['ad']." ".$_SESSION['member']['soyad'];?>
                    </a>
                    <span class="menAc p-2 ps-3 rounded shadow-sm text-start" style="top: 40px; left: -40px; right: -40px;">
                        <div class="row">
                            <div class="col-12 text-end">
                                <a onclick="kapat()">
                                    <img src="/yc196502005/source/photo/kapat.fw.png" alt="" width="15px">
                                </a>
                            </div>
                            <div class="col-12 my-1">
                                <div class="row">
                                    <div class="col-2">
                                        <a href="/yc196502005/site/sepet.php">
                                            <img src="/yc196502005/source/photo/sepet.fw.png" alt="" width="20px">
                                        </a>
                                    </div>
                                    <div class="col-10">                        
                                        <a href="/yc196502005/site/sepet.php">
                                            Sepet
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 my-1">
                                <div class="row">
                                    <div class="col-2">
                                        <a href="/yc196502005/magaza/">
                                            <img src="/yc196502005/source/photo/magaza.fw.png" alt="" width="20px">
                                        </a>
                                    </div>
                                    <div class="col-10">                        
                                        <a href="/yc196502005/magaza/">
                                            Mağaza
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 my-1">
                                <div class="row">
                                    <div class="col-2">
                                        <a href="/yc196502005/site/member.php">
                                            <img src="/yc196502005/source/photo/admin.fw.png" alt="" width="20px">
                                        </a>
                                    </div>
                                    <div class="col-10">                        
                                        <a href="/yc196502005/site/member.php">
                                            Kullanıcı Ayarları
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 my-1">
                                <div class="row">
                                    <div class="col-2">
                                        <a href="/yc196502005/site/iletisim.php">
                                            <img src="/yc196502005/source/photo/iletisim.fw.png" alt="" width="20px">
                                        </a>
                                    </div>
                                    <div class="col-10">                        
                                        <a href="/yc196502005/site/iletisim.php">
                                            İletişime Geç
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 my-1">
                                <div class="row">
                                    <div class="col-2">
                                        <a href="/yc196502005/site/logout.php">
                                            <img src="/yc196502005/source/photo/cikis.fw.png" alt="" width="20px">
                                        </a>
                                    </div>
                                    <div class="col-10">                        
                                        <a href="/yc196502005/site/logout.php">
                                            Çıkış Yap
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </span>
                <?php 
                    }              
                ?>
            </span>
        </div>
    </div>
</div>