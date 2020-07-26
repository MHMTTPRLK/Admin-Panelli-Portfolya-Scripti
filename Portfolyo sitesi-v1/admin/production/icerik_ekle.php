<?php
include 'header.php';
?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>İçerik Ekleme Sayfası</h3>
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

                              <form action="../db/icerik_islemler.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" >
                                  <!-- İçerik Ad -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik Ad <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"   class="form-control col-md-7 col-xs-12" name="icerik_ad">
                                      </div>
                                  </div>
                                  <!-- İçerik Detay -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik Detay <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <textarea class="ckeditor" name="icerik_detay"></textarea>

                                      </div>
                                  </div>
                                  <!-- İçerik Keyword -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik Keyword <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"   class="form-control col-md-7 col-xs-12" name="icerik_keyword">
                                      </div>
                                  </div>
                                  <!-- İçerik Author -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik Yazar <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"   class="form-control col-md-7 col-xs-12" name="icerik_author">
                                      </div>
                                  </div>
                                  <!-- İçerik Author Life -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik Yazar Hakkında <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <textarea class="ckeditor" name="icerik_authorlife"></textarea>

                                      </div>
                                  </div>
                                  <!-- İçerik Durum -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik Durum <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <select id="heard" class="form-control"  name="icerik_durum" required>
                                              <option value="1">Aktif</option>
                                              <option value="0">Pasif</option>
                                              <
                                          </select>
                                      </div>
                                  </div>
                                  <!-- İçerik Zaman -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İçerik Zaman <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="datetime-local"   class="form-control col-md-7 col-xs-12" name="icerik_zaman">

                                          </select>
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
                                          <button type="submit" name="icerikKaydet"class="btn btn-primary">Kaydet</button>
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