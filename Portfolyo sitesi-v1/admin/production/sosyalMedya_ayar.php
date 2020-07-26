<?php
include 'header.php';
$medyasor=$db->prepare("select * from ayar where ayar_id=:ayar_id");
$medyasor->execute(array("ayar_id"=>1));
$medyacek=$medyasor->fetch(PDO::FETCH_ASSOC);

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
                              <h2>Sosyal Medya Ayarlar<small>
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

                              <form action="../db/ayar_islemler.php"  method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" >
                                  <!-- Site Facebook -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Facebook<span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"   class="form-control col-md-7 col-xs-12" name="ayar_facebook" value="<?php echo $medyacek['ayar_facebook']; ?>" >
                                      </div>
                                  </div>
                                  <!-- Site Twitter -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Twitter <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"   class="form-control col-md-7 col-xs-12" name="ayar_twitter" value="<?php echo $medyacek['ayar_twitter']; ?>">
                                      </div>
                                  </div>
                                  <!-- Site Youtube -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Youtube<span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"  class="form-control col-md-7 col-xs-12" name="ayar_youtube" value="<?php echo $medyacek['ayar_youtube']; ?>">
                                      </div>
                                  </div>
                                  <!-- Site Linkedin -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Linkedin<span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"   class="form-control col-md-7 col-xs-12" name="ayar_linkedin" value="<?php echo $medyacek['ayar_linkedin']; ?>">
                                      </div>
                                  </div>
                                  <!-- Site İnstagram -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İnstagram<span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"  class="form-control col-md-7 col-xs-12" name="ayar_instagram" value="<?php echo $medyacek['ayar_instagram']; ?>">
                                      </div>
                                  </div>
                                  <!-- Site Google -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Google<span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"   class="form-control col-md-7 col-xs-12" name="ayar_google" value="<?php echo $medyacek['ayar_google']; ?>">
                                      </div>
                                  </div>
                                  <!-- Buttons-->
                                  <div  align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                          <button type="submit" name="sosyalmedyaAyarKaydet"class="btn btn-primary">Kaydet</button>
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