<?php
include 'header.php';
$iceriksor=$db->prepare("select * from icerik where icerik_id=:id");
$iceriksor->execute(array(
        "id"=>$_GET['icerik_id']
));
$icerikCek=$iceriksor->fetch(PDO::FETCH_ASSOC);
?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>İçerik  Düzenleme Sayfası</h3>
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

                              <div class="clearfix"></div>
                          </div>

                          <div class="x_content">

                              <form action="../db/icerik_islemler.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"  enctype="multipart/form-data">
                                  <!-- İçerik İd -->
                                  <div class="form-group">
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="hidden"   class="form-control col-md-7 col-xs-12" name="icerik_id" value="<?php echo $icerikCek['icerik_id']?>">
                                      </div>
                                  </div>
                                  <!-- İçerik Ad -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik Ad <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"   class="form-control col-md-7 col-xs-12" name="icerik_ad" value="<?php echo $icerikCek['icerik_ad']?>">
                                      </div>
                                  </div>
                                  <!-- İçerik Detay -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik Detay <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <textarea class="ckeditor" name="icerik_detay"><?php echo $icerikCek['icerik_detay'];?></textarea>

                                      </div>
                                  </div>
                                  <!-- İçerik Keyword -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik Keyword <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"   class="form-control col-md-7 col-xs-12" name="icerik_keyword" value="<?php echo $icerikCek['icerik_keyword']; ?>">
                                      </div>
                                  </div>
                                  <!-- İçerik Author -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik Yazar <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"   class="form-control col-md-7 col-xs-12" name="icerik_author" value="<?php echo $icerikCek['icerik_author'];?>">
                                      </div>
                                  </div>
                                  <!-- İçerik Author Life -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik Yazar Hakkında <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <textarea class="ckeditor" name="icerik_authorlife"><?php echo $icerikCek['icerik_authorlife']; ?></textarea>

                                      </div>
                                  </div>
                                  <!-- İçerik Durum -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik Durum <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <select id="heard" class="form-control"  name="icerik_durum" required>
                                              <?php
                                              if($icerikCek['icerik_durum']==1)
                                              {  ?>
                                                  <option value="1">Aktif</option>
                                                  <option value="0">Pasif</option>
                                              <?php }
                                              else if($icerikCek['icerik_durum']==0)
                                              {?>
                                                  <option value="0">Pasif</option>
                                                  <option value="1">Aktif</option>

                                              <?php }?>

                                          </select>
                                      </div>
                                  </div>
                                        <?php

                                        $dt= $icerikCek['icerik_zaman'];
                                        $date = new DateTime($dt);

                                        ?>
                                  <!-- İçerik Zaman -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik Zaman <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="datetime-local"   class="form-control col-md-7 col-xs-12" name="icerik_zaman" value="<?php echo date_format($date, 'd-m-Y H:i:s');?>">


                                      </div>
                                  </div>
                                  <!-- Yüklü Resim -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Resim <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <img  style="width: 200px; height: 200px;" src="../<?php echo $icerikCek['icerik_resimyol'];?>">

                                      </div>
                                  </div>
                                  <!-- İçerik Resim -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik Resim Seç <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="file"   class="form-control col-md-7 col-xs-12" name="icerik_resimyol">
                                      </div>
                                  </div>
                                  <!-- Buttons-->
                                  <div  align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                                          <button type="submit" name="icerikGuncelle"class="btn btn-primary" >Güncelle</button>

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