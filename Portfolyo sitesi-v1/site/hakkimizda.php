<?php include 'header.php';

$hakkimizdasor=$db->prepare("select * from hakkimizda ");
$hakkimizdasor->execute();
$hakkimizde_cek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
?>

    <div role="main" class="main">
        <div class="container">
            <div class="row pt-xl">
                <div class="col-md-7">
                    <h1 class="mt-xl mb-none"><?php echo $hakkimizde_cek['hakkimizda_baslik'];?></h1>
                    <div class="divider divider-primary divider-small mb-xl">
                        <hr>
                    </div>
                    <p><?php echo $hakkimizde_cek['hakkimizda_icerik'];?></p>
                </div>
                <div class="col-md-4 col-md-offset-1">

                    <h4 class="mt-xl mb-none">Video Tanıtım</h4>
                    <div class="divider divider-primary divider-small mb-xl">
                        <hr>
                    </div>
                    <?php  $hakkimda=$db->query("select * from hakkimizda order by hakkimizda_video")->fetchAll();
                    foreach ($hakkimda as $hak)
                    {  ?>

                        <div class="embed-responsive embed-responsive-16by9 mb-xl">
                            <iframe width="300" height="200" src="https://www.youtube.com/embed/<?php echo $hak['hakkimizda_video'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></iframe>
                        </div>

                        <blockquote class="blockquote-secondary">
                            <p class="font-size-lg">"<?php echo $hakkimizde_cek['hakkimizda_vizyon'];?>"</p>
                            <footer>Mehmet Parlak <cite> - Developer</cite></footer>

                        </blockquote>
                    <?php }?>
                    <h4 class="mt-xlg">Misyonumuz</h4>

                    <div class="divider divider-primary divider-small mb-xl">
                        <hr>
                    </div>

                    <ul class="list list-unstyled list-primary list-borders">
                        <?php
                        $hakkimda1=$db->query("select * from hakkimizda order by hakkimizda_misyon")->fetchAll();
                        foreach ($hakkimda1 as $hak1  )
                        {?>
                            <li class="pt-sm pb-sm"><strong class="text-color-primary font-size-xl">2020 - </strong><?php echo $hak1['hakkimizda_misyon'];?> </li>
                        <?php }?>
                    </ul>

                </div>
            </div>
        </div>
    </div>

<?php
include "footer.php";?>