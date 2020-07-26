<?php
include 'header.php';
$slidersor=$db->prepare("select * from slider where slider_id=:id");
$slidersor->execute(array(
        "id"=>$_GET['slider_id']
));
$sliderCek=$slidersor->fetch(PDO::FETCH_ASSOC);
?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Slider DüzenlemeSayfası</h3>
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

                              <form action="../db/slider_islemler.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"  enctype="multipart/form-data">
                                  <!-- Slider İd -->
                                  <div class="form-group">
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="hidden"   class="form-control col-md-7 col-xs-12" name="slider_id" value="<?php echo $sliderCek['slider_id']?>">
                                      </div>
                                  </div>
                                  <!-- Slider Ad -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Ad <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"   class="form-control col-md-7 col-xs-12" name="slider_ad" value="<?php echo $sliderCek['slider_ad']?>">
                                      </div>
                                  </div>
                                  <!-- Slider Url -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Url <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"   class="form-control col-md-7 col-xs-12" name="slider_url" value="<?php echo $sliderCek['slider_url']?>">
                                      </div>
                                  </div>
                                  <!-- Slider Sıra -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Sıra <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"   class="form-control col-md-7 col-xs-12" name="slider_sira"  value="<?php echo $sliderCek['slider_sira']?>">
                                      </div>
                                  </div>
                                  <!-- Slider Durum -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Durum <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <select id="heard" class="form-control"  name="slider_durum" required value="<?php echo $sliderCek['slider_durum']?>">
                                              <?php
                                              if($sliderCek['slider_durum']==1)
                                              {  ?>
                                                   <option value="1">Aktif</option>
                                                      <option value="0">Pasif</option>
                                              <?php }
                                              else if($sliderCek['slider_durum']==0)
                                                  {?>
                                                      <option value="0">Pasif</option>
                                                      <option value="1">Aktif</option>

                                                 <?php }?>



                                          </select>

                                      </div>
                                  </div>
                                  <!-- Slider Resim -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Resim <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <img  style="width: 200px; height: 200px;" src="../<?php echo $sliderCek['slider_resimyol']?>">

                                      </div>
                                  </div>
                                  <!-- Slider Resim -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Slider Resim Seç <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="file"   class="form-control col-md-7 col-xs-12" name="slider_resimyol">

                                      </div>
                                  </div>
                                  <!-- Buttons-->
                                  <div  align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                                          <button type="submit" name="sliderGuncelle"class="btn btn-primary" >Güncelle</button>

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