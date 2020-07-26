<?php
include 'header.php';
$menusor=$db->prepare("select * from menuler where menu_id=:id");
$menusor->execute(array(
        "id"=>$_GET['menu_id']
));
$menuCek=$menusor->fetch(PDO::FETCH_ASSOC);
?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Menu  Düzenleme Sayfası</h3>
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

                              <form action="../db/menu_islemler.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"  enctype="multipart/form-data">
                                  <!-- Menu  Id -->
                                  <div class="form-group">
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="hidden"   class="form-control col-md-7 col-xs-12" name="menu_id" value="<?php echo $menuCek['menu_id'];?>">
                                      </div>
                                  </div>
                                  <!-- Menu Üst -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Üst Menü Seç</label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <select class="select2_single form-control"  name="menu_ust"required tabindex="-1" >
                                              <option value="0">Üst Menü</option>
                                                  <?php
                                                  $menu_sor=$db->prepare("select * from menuler order by menu_ad ASC");
                                                  $menu_sor->execute();
                                                  //$menuCek=$menusor->fetch(PDO::FETCH_ASSOC);
                                                  while($menu_Cek=$menu_sor->fetch(PDO::FETCH_ASSOC))
                                                  {?>


                                              <option value="<?php echo $menu_Cek['menu_id'];?>"><?php echo $menu_Cek['menu_ad'];?></option>

                                              <?php  } ?>


                                          </select>
                                      </div>
                                  </div>
                                  <!-- Menu Ad -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Ad<span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"   class="form-control col-md-7 col-xs-12" name="menu_ad" value="<?php echo $menuCek['menu_ad'];?>">
                                      </div>
                                  </div>
                                  <!-- Menu Detay -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Detay<span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <textarea class="ckeditor" name="menu_detay"><?php echo $menuCek['menu_detay'];?></textarea>

                                      </div>
                                  </div>
                                  <!-- Menu Url -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Url<span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"   class="form-control col-md-7 col-xs-12" name="menu_url" value="<?php echo $menuCek['menu_url'];?>">
                                      </div>
                                  </div>
                                  <!-- Menu Sıra -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Sıra<span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="number"   class="form-control col-md-7 col-xs-12" name="menu_sira" value="<?php echo $menuCek['menu_sira'];?>">
                                      </div>
                                  </div>
                                  <!-- Menu Durum -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu Durum <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <select id="heard" class="form-control"  name="menu_durum" required>

                                              <?php
                                              if($menuCek['menu_durum']==1)
                                              {  ?>
                                                  <option value="1">Aktif</option>
                                                  <option value="0">Pasif</option>
                                              <?php }
                                              else if($menuCek['menu_durum']==0)
                                              {?>
                                                  <option value="0">Pasif</option>
                                                  <option value="1">Aktif</option>

                                              <?php }?>
                                          </select>
                                      </div>
                                  </div>
                                  <!-- Yüklü Resim -->
                                  <!--
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Yüklü Resim <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <img  style="width: 200px; height: 200px;" src="../<?php echo $menuCek['menu_icon'];?>">

                                      </div>
                                  </div>     -->

                                  <!-- Menu İcon
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu İcon Seç <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="file"   class="form-control col-md-7 col-xs-12" name="menu_icon">
                                      </div>
                                  </div> -->

                                  <!-- Buttons-->
                                  <div  align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                                          <button type="submit" name="menuGuncelle"class="btn btn-primary" >Güncelle</button>

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