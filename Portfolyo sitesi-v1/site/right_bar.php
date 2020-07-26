<?php
$hakkimizdasor=$db->prepare("select * from hakkimizda ");
$hakkimizdasor->execute();
$hakkimizde_cek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
?>
<div class="col-md-3">
    <aside class="sidebar">
            <h4 class="mt-xl mb-md"><?php echo $hakkimizde_cek['hakkimizda_baslik'];?></h4>
        </div>
        <div class="divider divider-primary divider-small mb-xl">
            <hr>
        </div>

<div class="embed-responsive embed-responsive-16by9 mb-xl">
    <iframe width="300" height="200" src="https://www.youtube.com/embed/<?php echo $hakkimizde_cek['hakkimizda_video'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></iframe>
</div>

    </aside>
</div>