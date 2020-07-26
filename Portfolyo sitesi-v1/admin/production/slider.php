<?php
include 'header.php';
if(isset($_POST['arama']))
{
    $aranan=$_POST['aranan'];
  $slidersor=$db->prepare("select * from slider where slider_ad like '$aranan'");
    $slidersor->execute();
}
else{
    $slidersor=$db->prepare("select * from slider");
    $slidersor->execute();
    //$slidersor=$db->query("select * from slider")->fetchAll();
}


?>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">

            </div>
              <div class="title_right">
                  <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

                     <form action="" method="post">
                      <div class="input-group">
                          <input type="text" class="form-control" name="aranan" placeholder="Arama...">
                          <span class="input-group-btn">
                      <button class="btn btn-default" type="submit" name="arama">Ara</button>
                    </span>
                      </div>
                     </form>
                  </div>
              </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="x_panel">
                          <div class="x_title">
                              <h2>Slider Yönetim Sayfası  <small>Mehmet Parlak - Developer</small></h2>


                              <div class="clearfix"></div>
                          </div>
                          <div class="x_content">

                              <table class="table">
                                  <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>Slider Ad</th>
                                      <th>Slider Resim Yol </th>
                                      <th>Slider Link</th>
                                      <th >Slider Sira</th>
                                      <th >Slider Durum</th>
                                      <th>Slider Resim</th>
                                      <th></th>
                                      <th></th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <?php

                                  foreach ($slidersor as $sliderCek)
                                  {?>
                                  <tr>
                                      <th scope="row"><?php echo $sliderCek['slider_id']; ?></th>
                                      <td><?php echo $sliderCek['slider_ad']; ?></td>
                                      <td><?php echo $sliderCek['slider_resimyol']; ?></td>
                                      <td><?php echo $sliderCek['slider_url'];  ?></td>
                                      <td><?php echo $sliderCek['slider_sira'];  ?></td>
                                      <td><?php

                                          if($sliderCek['slider_durum']=='1')
                                          {
                                              echo "AKTİF";
                                          }
                                          else{
                                              echo "PASİF";
                                          }
                                          ?></td>
                                      <td>
                                          <img  width="200px" src="../<?php echo $sliderCek['slider_resimyol']; ?>">
                                      </td>
                                      <td>
                                             <a href="slider_duzenle.php?slider_id=<?php echo $sliderCek['slider_id'];?>"><button  type="submit"  name="sliderGuncelle"class="btn btn-success">Güncelle</button></a>
                                          </form>
                                      </td>
                                      <td><a href="../db/slider_islemler.php?slider_id=<?php echo $sliderCek['slider_id'];?>"><button class="btn btn-danger" ><i class="glyphicon glyphicon-trash"></i> Sil</button></a></td>
                                  </tr>
                                  <?php  }
                                  ?>
                                  </tbody>
                              </table>

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