
<!-- slider -->

<link rel="stylesheet" href="/yc196502005/source/css/bootstrap.css">

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="margin-top: 65px;">
    <div class="carousel-indicators">
        <?php
            $sql1 = "SELECT * FROM slider";
            $sorgu1 = mysqli_query($baglan,$sql1);
            $active = 0;  
            while($sorguCek1 = mysqli_fetch_array($sorgu1)):  
        ?>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo $active;?>" class="blue <?php echo $active == 0 ? 'active':''; ?>" aria-current="<?php echo $active == 0 ? 'true':''; ?>"></button>
        <?php
            $active++;
            endwhile;
        ?>
    </div>
    <div class="carousel-inner">
        <?php
            $sql2 = "SELECT * FROM slider";

            $sorgu2 = mysqli_query($baglan,$sql2);

            $active = 0;  

            while($sorguCek2 = mysqli_fetch_array($sorgu2)):  
        ?>
        <div class="carousel-item <?php echo $active == 0 ? 'active':''; ?>">
            <img src="<?php echo $sorguCek2['url'];?>" class="d-block w-100" alt="..." height="660">
        </div>
        <?php
            $active++;
            endwhile;
        ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<script src="/yc196502005/source/js/bootstrap.js"></script>