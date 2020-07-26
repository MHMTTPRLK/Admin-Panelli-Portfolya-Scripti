<?php
include 'header.php';



?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Menu Ekleme Sayfası</h3>
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

                              <form action="../db/menu_islemler.php" method="POST" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" >
                                  <!-- Menu Üst -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Üst Menü Seç</label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <select class="select2_single form-control"  name="menu_ust"required tabindex="-1" >
                                              <option value="0">Üst Menü
                                                  <?php
                                                  $menusor=$db->prepare("select * from menuler where menu_ust=:menu_ust order by menu_ad asc");
                                                 $menusor->execute(array("menu_ust"=>'0'));
                                                  //$menuCek=$menusor->fetch(PDO::FETCH_ASSOC);
                                                 while($menuCek=$menusor->fetch(PDO::FETCH_ASSOC))


                                                  {?>
                                              <option value="<?php echo $menuCek['menu_id'];?>"><?php echo $menuCek['menu_ad'];?></option>

                                              <?php  }
                                                ?>

                                          </select>
                                      </div>
                                  </div>
                                  <!-- Menu Ad -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Ad<span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"   class="form-control col-md-7 col-xs-12" name="menu_ad">
                                      </div>
                                  </div>
                                  <!-- Menu Detay -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Detay<span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <textarea class="ckeditor" name="menu_detay"></textarea>

                                      </div>
                                  </div>
                                  <!-- Menu Url -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Url<span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"   class="form-control col-md-7 col-xs-12" name="menu_url">
                                      </div>
                                  </div>
                                  <!-- Menu Sıra -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Sıra<span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="number"   class="form-control col-md-7 col-xs-12" name="menu_sira">
                                      </div>
                                  </div>
                                  <!-- Menu Durum -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Durum <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <select id="heard" class="form-control"  name="menu_durum" required>
                                              <option value="1">Aktif</option>
                                              <option value="0">Pasif</option>
                                              <
                                          </select>
                                      </div>
                                  </div>

                                  <!-- Menu İcon
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu İcon Seç <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="file"   class="form-control col-md-7 col-xs-12" name="menu_icon">
                                      </div>
                                  </div>   -->
                                  <!-- Buttons-->
                                  <div  align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                          <button type="submit" name="menuKaydet"class="btn btn-primary">Kaydet</button>
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
    <!-- Select2 -->
    <script src="../../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Select2 -->
    <script>
        $(document).ready(function() {
            $(".select2_single").select2({
                placeholder: "Select a state",
                allowClear: true
            });
            $(".select2_group").select2({});
            $(".select2_multiple").select2({
                maximumSelectionLength: 4,
                placeholder: "With Max Selection limit 4",
                allowClear: true
            });
        });
    </script>
    <!-- /Select2 -->
          <?php




include "footer.php";
?>

