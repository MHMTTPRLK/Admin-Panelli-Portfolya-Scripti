<?php
include 'header.php';
$iletisimsor=$db->prepare("select * from ayar where ayar_id=:ayar_id");
$iletisimsor->execute(array("ayar_id"=>1));
$iletisimcek=$iletisimsor->fetch(PDO::FETCH_ASSOC);

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
                              <h2>İletişim Ayarları<small>
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
                                  <!-- Site Telefon -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Telefon Numaranız <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="ayar_tel" value="<?php echo $iletisimcek['ayar_tel']; ?>" >
                                      </div>
                                  </div>
                                  <!-- Site GSM -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">GSM Numaranız  <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="ayar_gsm" value="<?php echo $iletisimcek['ayar_gsm']; ?>">
                                      </div>
                                  </div>
                                  <!-- Site Fax -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Fax Numaranız <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="ayar_fax" value="<?php echo $iletisimcek['ayar_fax']; ?>">
                                      </div>
                                  </div>
                                  <!-- Site mail -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mail Adresiniz<span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="ayar_mail" value="<?php echo $iletisimcek['ayar_mail']; ?>">
                                      </div>
                                  </div>
                                  <!-- Site Adres -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Adresniz <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="ayar_adres" value="<?php echo $iletisimcek['ayar_adres']; ?>">
                                      </div>
                                  </div>
                                  <!-- Site İlçe -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İlçeniz <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="ayar_ilce" value="<?php echo $iletisimcek['ayar_ilce']; ?>">
                                      </div>
                                  </div>
                                  <!-- Site İl -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">İliniz <span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="sehir" value="<?php echo $iletisimcek['ayar_il']; ?>">
                                      </div>
                                  </div>
                                  <!-- Site Mesai -->
                                  <div class="form-group">
                                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Mesainiz<span class="required">*</span>
                                      </label>
                                      <div class="col-md-6 col-sm-6 col-xs-12">
                                          <input type="text"  required="required" class="form-control col-md-7 col-xs-12" name="saat" value="<?php echo $iletisimcek['saat']; ?>" >
                                      </div>
                                  </div>
                                  <!-- Buttons-->
                                  <div  align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                          <button type="submit" name="iletisimAyarKaydet"class="btn btn-primary">Kaydet</button>
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