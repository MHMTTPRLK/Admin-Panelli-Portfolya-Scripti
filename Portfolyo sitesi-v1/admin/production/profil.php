<?php
include 'header.php';
$id=$_SESSION['user_id'];
$kullaciSor=$db->prepare("select * from users where user_id=?");
$kullaciSor->execute(array($id));
$kullaniciCek=$kullaciSor->fetch(PDO::FETCH_ASSOC);

?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">

              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="x_panel">
                          <div class="x_title">
                              <h2>Kullanıcı Profil Sayfası<small>
                                      <?php
                                      error_reporting(0);
                                  if($_GET['durum']=='ok')
                                      {?>
                                         <b style="color: green">Başarıyla Kaydedildi</b>
                                      <?php } elseif($_GET['durum']=='no') {?>
                                  <b style="color: red">Hata var Kaydedilmedi

                                  </b> <?php
                                  }?>


                             </small></h2>
                              <ul class="nav navbar-right panel_toolbox">
                                  <li class="dropdown">

                                      <ul class="dropdown-menu" role="menu">
                                          <li><a href="#">Settings 1</a>
                                          </li>
                                          <li><a href="#">Settings 2</a>
                                          </li>
                                      </ul>
                                  </li>

                              </ul>
                              <div class="clearfix"></div>
                          </div>

                          <div class="x_content">

                              <form action="../db/login_islemler.php"  method="POST" id="demo-form2"   enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left" >
                                  <!-- Kullanıcı İd -->
                                  <div class="form-group">
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="hidden"  class="form-control col-md-7 col-xs-12" name="user_id" value="<?php echo $kullaniciCek['user_id']; ?>" >
                                      </div>
                                  </div>
                                  <!-- Kullanıcı Adı -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Kullanıcı Adı <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="username" value="<?php echo $kullaniciCek['username']; ?>" >
                                      </div>
                                  </div>
                                  <!-- Full Name -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Full Name <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="user_fullname" value="<?php echo $kullaniciCek['user_fullname']; ?>">
                                      </div>
                                  </div>
                                  <!-- Yuklu Logo -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Logo <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <?php
                                          if(strlen($kullaniciCek['user_resimyol'])>0)
                                          {?>
                                              <img  style="width: 200px; height: 200px;" src="../<?php echo $kullaniciCek['user_resimyol']?>">
                                         <?php }

                                          else
                                              {?>
                                                  <img  style="width: 200px; height: 200px;" src="../../images/resimyok.jpg">
                                         <?php  }
                                          ?>


                                      </div>
                                  </div>
                                  <!-- Logo Seç -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">User Resim Seç <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="file"   class="form-control col-md-7 col-xs-12" name="user_resimyol">

                                      </div>
                                  </div>
                                  <!-- Buttons-->
                                  <div  align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                          <button type="submit" name="profilKaydet"class="btn btn-primary">Kaydet</button>
                                  </div>

                              </form>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

          <?php
include "footer.php";
?>