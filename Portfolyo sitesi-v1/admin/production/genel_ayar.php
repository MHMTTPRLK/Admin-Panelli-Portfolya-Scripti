<?php
include 'header.php';
$ayarsor=$db->prepare("select * from ayar where ayar_id=:ayar_id");
$ayarsor->execute(array("ayar_id"=>1));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Ayarlar</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Arama...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Ara</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="x_panel">
                          <div class="x_title">
                              <h2>Genel Ayarlar<small>
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

                              <form action="../db/ayar_islemler.php"  method="POST" id="demo-form2"   enctype="multipart/form-data" data-parsley-validate class="form-horizontal form-label-left" >
                                  <!-- Site Url -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Url <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="ayar_siteurl" value="<?php echo $ayarcek['ayar_siteurl']; ?>" >
                                      </div>
                                  </div>
                                  <!-- Site Title -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Başlığı <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="ayar_title" value="<?php echo $ayarcek['ayar_title']; ?>">
                                      </div>
                                  </div>
                                  <!-- Site Description -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Açıklama<span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="ayar_description" value="<?php echo $ayarcek['ayar_description']; ?>">
                                      </div>
                                  </div>
                                  <!-- Site Keywords -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Keywords<span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="ayar_keywords" value="<?php echo $ayarcek['ayar_keywords']; ?>">
                                      </div>
                                  </div>
                                  <!-- Site Author -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Site Yazar<span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="ayar_author" value="<?php echo $ayarcek['ayar_author']; ?>">
                                      </div>
                                  </div>

                                  <!-- Yuklu Logo -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Logo <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <?php
                                          if(strlen($ayarcek['ayar_logo'])>0)
                                          {?>
                                              <img  style="width: 200px; height: 200px;" src="../<?php echo $ayarcek['ayar_logo']?>">
                                         <?php }

                                          else
                                              {?>
                                                  <img  style="width: 200px; height: 200px;" src="../../images/logo_yok.png">
                                         <?php  }
                                          ?>


                                      </div>
                                  </div>
                                  <!-- Logo Seç -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ayar Logo Seç <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="file"   class="form-control col-md-7 col-xs-12" name="ayar_logo">

                                      </div>
                                  </div>
                                  <!-- Buttons-->
                                  <div  align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                          <button type="submit" name="genelAyarKaydet"class="btn btn-primary">Kaydet</button>
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