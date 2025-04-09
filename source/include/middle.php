
<!-- middle -->

<div class="container my-3">
    <div class="row justify-content-center align-items-center">
        <?php
            $sql6 = "SELECT * FROM magaza, urunCesit, urun WHERE urun.magazaId = magaza.magazaId AND urun.urunCesitId = urunCesit.urunCesitId AND urun.stok != 0 ORDER BY urun.urunId DESC";
            $sorgu6 = mysqli_query($baglan,$sql6);
            while($sorguCek6 = mysqli_fetch_array($sorgu6)):
        ?>
        <div class="col-3 my-2 px-5">
            <div class="row shadow">
                <div class="col-12 text-center">
                    <a href="/yc196502005/site/urun.php?urunId=<?php echo $sorguCek6['urunId']?>">
                        <img src="<?php echo $sorguCek6['photo']; ?>" alt="" class="img">
                    </a>
                </div>
                <div class="col-6">
                    <a href="/yc196502005/site/magaza?magazaId=<?php echo $sorguCek6['magazaId'];?>">
                        <?php echo $sorguCek6['magaza']; ?>
                    </a>
                </div>
                <div class="col-6">
                    <?php echo $sorguCek6['urun']; ?>
                </div>
                <div class="col-6 text-end my-1">
                    <?php echo $sorguCek6['fiyat']; ?> Tl
                </div>
                <div class="col-6 my-1">
                    <form action="<?php if(isset($_SESSION['member'])){ echo "/yc196502005/site/sepeteEkle.php?urunId=".$sorguCek6['urunId']; }else{ echo "/yc196502005/member/"; }?>" method="POST">
                        <input type="submit" value="Sepete Ekle" class="input2 bg-warning text-white rounded">
                    </form>
                </div>
            </div>
        </div>
        <?php
            endwhile;
        ?>
    </div>
</div>