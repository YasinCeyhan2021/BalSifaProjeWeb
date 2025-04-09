
<!-- bottom -->

<div class="container-fluid text-center d-inline-block justify-content-center align-items-center">
    <div class="row">
        <div class="col-12 bg-warning text-warning text-center">
            Bal Şifa
        </div>
        <div class="col-12 black py-5" style="background-color: rgb(10, 10, 10);">
            <div class="row justify-content-center align-items-center">
                <?php
                    $sql2 = "SELECT * FROM bottom";
                    $sorgu2 = mysqli_query($baglan,$sql2);
                    while($sorguCek2 = mysqli_fetch_array($sorgu2)):  
                ?>
                <div class="col-3 py-3">
                    <span class="menu">
                        <a href="<?php echo $sorguCek2['url'];?>" target="_blank" class="text-warning h3 a">
                            <img src="<?php echo $sorguCek2['photoUrl'];?>" alt="" width="100px">
                        </a>
                        <span class="menuAc p-1 rounded" style="top: -65px; left: 0px; right: 0px;">
                            <?php echo $sorguCek2['ad'];?>
                        </span>
                    </span>
                </div>
                <?php
                    endwhile;
                ?>
            </div>

        </div>
        <div class="col-12 bg-warning text-black text-center">
            BalŞifa.com - 2021
        </div>
    </div>
</div>