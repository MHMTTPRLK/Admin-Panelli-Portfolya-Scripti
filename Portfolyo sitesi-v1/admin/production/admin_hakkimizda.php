<?php
include 'header.php';
$hakkimizda_sor=$db->prepare("select * from hakkimizda where hakkimizda_id=:id");
$hakkimizda_sor->execute(array("id"=>1));
$hakkimizda_cek=$hakkimizda_sor->fetch(PDO::FETCH_ASSOC);

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

                              <form action="../db/hakkimizda_islemler.php"  method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" >
                                  <!-- Hakkimizda Başlık -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hakkımızda Başlık <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="hakkimizda_baslik" value="<?php echo $hakkimizda_cek['hakkimizda_baslik']; ?>" >
                                      </div>
                                  </div>
                                  <!-- Hakkimizda İçerik -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hakkımızda İçerik<span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <textarea class="ckeditor" name="hakkimizda_icerik"><?php echo $hakkimizda_cek['hakkimizda_icerik']; ?></textarea>
                                      </div>
                                  </div>
                                  <!-- Hakkimizda Video -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hakkımızda Video <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="hakkimizda_video" value="<?php echo $hakkimizda_cek['hakkimizda_video']; ?>" >
                                      </div>
                                  </div>
                                  <!-- Hakkimizda Vizyon -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hakkımızda Vizyon <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="hakkimizda_vizyon" value="<?php echo $hakkimizda_cek['hakkimizda_vizyon']; ?>" >
                                      </div>
                                  </div>
                                  <!-- Hakkimizda Misyon -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Hakkımızda Misyon <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <textarea class="editor2" id="editor2" name="hakkimizda_misyon"><?php echo $hakkimizda_cek['hakkimizda_misyon']; ?></textarea>
                                      </div>
                                  </div>
                                  <script>
                                      CKEDITOR.replace('editor2', {
                                          extraPlugins: 'uploadimage,image2',
                                          height: 300,

                                          // Upload images to a CKFinder connector (note that the response type is set to JSON).
                                          uploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json',

                                          // Configure your file manager integration. This example uses CKFinder 3 for PHP.
                                          filebrowserBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html',
                                          filebrowserImageBrowseUrl: '/apps/ckfinder/3.4.5/ckfinder.html?type=Images',
                                          filebrowserUploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                          filebrowserImageUploadUrl: '/apps/ckfinder/3.4.5/core/connector/php/connector.php?command=QuickUpload&type=Images',

                                          // The following options are not necessary and are used here for presentation purposes only.
                                          // They configure the Styles drop-down list and widgets to use classes.

                                          stylesSet: [{
                                              name: 'Narrow image',
                                              type: 'widget',
                                              widget: 'image',
                                              attributes: {
                                                  'class': 'image-narrow'
                                              }
                                          },
                                              {
                                                  name: 'Wide image',
                                                  type: 'widget',
                                                  widget: 'image',
                                                  attributes: {
                                                      'class': 'image-wide'
                                                  }
                                              }
                                          ],

                                          // Load the default contents.css file plus customizations for this sample.
                                          contentsCss: [
                                              'http://cdn.ckeditor.com/4.14.1/full-all/contents.css',
                                              'assets/css/widgetstyles.css'
                                          ],

                                          // Configure the Enhanced Image plugin to use classes instead of styles and to disable the
                                          // resizer (because image size is controlled by widget styles or the image takes maximum
                                          // 100% of the editor width).
                                          image2_alignClasses: ['image-align-left', 'image-align-center', 'image-align-right'],
                                          image2_disableResizer: true
                                      });
                                  </script>
                                  <!-- Buttons-->
                                  <div  align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                          <button type="submit" name="hakkimizdaKaydet"class="btn btn-primary">Kaydet</button>
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