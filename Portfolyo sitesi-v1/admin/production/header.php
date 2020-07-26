<?php
include "../db/baglanti.php";
if (!isset($_SESSION['username']) and !isset($_SESSION['user_fullname']))
{
header("Location:login.php");
}
$id=$_SESSION['user_id'];
$kullaciSor=$db->prepare("select * from users where user_id=?");
$kullaciSor->execute(array($id));
$kullaniciCek=$kullaciSor->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <META HTTP-EQUIV="Content-language" CONTENT="tr">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Yönetim Paneli | </title>
    <script src="https://cdn.ckeditor.com/4.14.1/standard-all/ckeditor.js"></script>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Select2 -->
    <link href="../../vendors/select2/dist/css/select2.min.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- title icon -->
    <link rel="shortcut icon" href="../yonetim_images/code.jpg"type="image/x-icon" />

    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.php" class="site_title"><i class="fa fa-code"></i> <span>Mehmet Parlak</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <?php
                        if(strlen($kullaniciCek['user_resimyol'])>0)
                        {?>
                            <img src="../<?php echo $kullaniciCek['user_resimyol']?>" alt="..." class="img-circle profile_img">

                        <?php }
                        else
                        {?>
                            <img src="../../images/resimyok.jpg" alt=""class="img-circle profile_img">


                        <?php  }
                        ?>

                    </div>
                    <div class="profile_info">
                        <span>Hoşgeldin</span>
                        <h2><?php  echo $_SESSION['user_fullname'];?> </h2>
                <?php
                        if($kullaniciCek['user_yetki']==1)
                        {
                            echo "Yetki:Yönetici";
                        }
                        else{
                            echo "Yetki:Kullanıcı";
                        }

                        ?>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- /menu profile quick info -->

                <br />

                <?php
                include 'sidebar.php';
                ?>
                <!-- /menu footer buttons -->
                <?php
                include 'menu_footer_button.php';
                ?>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <?php
                                if(strlen($kullaniciCek['user_resimyol'])>0)
                                {?>
                                    <img src="../<?php echo $kullaniciCek['user_resimyol']?>" alt=""><?php  echo $_SESSION['user_fullname'];?>

                                <?php }
                                else
                                {?>
                                    <img src="../../images/resimyok.jpg" alt=""><?php  echo $_SESSION['user_fullname'];?>


                                <?php  }
                                ?>


                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="profil.php"> Profile</a></li>
                                <li><a href="javascript:;">Help</a></li>
                                <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>

                     
                               
                               
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->
