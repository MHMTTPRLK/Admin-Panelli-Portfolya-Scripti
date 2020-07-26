<?php
include 'header.php';
$id=$_GET['icerik_id'];
$iceriksor=$db->prepare("select * from icerik where icerik_id='{$id}'");
$iceriksor->execute();
foreach ($iceriksor as $icerikCek)
{

}

?>

<body>

<div class="body">

    <div role="main" class="main">
        <div class="container">
            <div class="row pt-xl">

                <div class="col-md-12">

                    <div class="blog-posts single-post mt-xl">

                        <article class="post post-large blog-single-post">

                            <div class="post-content">

                                <h1><?php echo $icerikCek['icerik_ad']; ?></h1>

                                <div class="divider divider-primary divider-small mb-xl">
                                    <hr>
                                </div>

                                <div class="post-meta">
                                    <span><i class="fa fa-user"></i> By <a href="#"><?php echo $icerikCek['icerik_author']; ?></a> </span>
                                    <span><i class="fa fa-tag"></i> <a href="#"><?php echo $icerikCek['icerik_keyword']; ?></a>,  </span>

                                </div>

                                <img src="../admin/<?php echo $icerikCek['icerik_resimyol']; ?>" class="img-responsive pull-left mb-xs mr-xl" alt="" style="width: 250px; height: 250px">

                                <p class="lead"><?php echo $icerikCek['icerik_detay']; ?></p>

                                <div class="post-block post-author mt-xl clearfix">
                                    <h4 class="mt-xl mb-none">Yazar</h4>
                                    <div class="divider divider-primary divider-small mb-xl">
                                        <hr>
                                    </div>
                                    <div class="img-thumbnail">
                                        <a href="blog-post.html">
                                            <img src="../admin/<?php echo $icerikCek['icerik_resimyol']; ?>" alt="" style="width: 100px; height: 100px;">
                                        </a>
                                    </div>
                                    <p><strong class="name mb-md"><?php echo $icerikCek['icerik_author']; ?></strong></p>
                                    <p class="mt-xs"><?php echo $icerikCek['icerik_authorlife'];?></p>
                                </div>





                            </div>
                        </article>

                    </div>

                </div>

            </div>

        </div>
    </div>





<?php
include "footer.php";
?>