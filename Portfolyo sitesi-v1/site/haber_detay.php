<?php
include 'header.php';
$id=$_GET['menu_id'];
$habersor=$db->prepare("select * from menuler where menu_id='{$id}'");
$habersor->execute();
foreach ($habersor as $haberCek)
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

                                <h1><?php echo $haberCek['menu_ad']; ?></h1>

                                <div class="divider divider-primary divider-small mb-xl">
                                    <hr>
                                </div>




                                <p class="lead"><?php echo $haberCek['menu_detay']; ?></p>







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