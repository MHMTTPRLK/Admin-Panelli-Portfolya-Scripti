<?php
include 'header.php';
if(isset($_POST['arama']))
{
    $aranan=$_POST['aranan'];
  $iceriksor=$db->prepare("select * from icerik where icerik_ad like '$aranan'");
    $iceriksor->execute();
}
else{
    $iceriksor=$db->prepare("select * from icerik");
    $iceriksor->execute();
    //$iceriksor=$db->query("select * from icerik")->fetchAll();
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
                              <h2>İçerik Yönetim Sayfası  <small>Mehmet Parlak - Developer</small></h2>


                              <div class="clearfix"></div>
                          </div>
                          <div class="x_content">

                              <table class="table">
                                  <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>İçerik Ad</th>
                                      <th>İçerik Resim Yol </th>
                                      <th>İçerik Detay</th>
                                      <th >İçerik Keyword</th>
                                      <th >İçerik Yazar</th>
                                      <th >İçerik Durum</th>
                                      <th >İçerik Zaman</th>
                                      <th>İçerik Resim</th>
                                      <th></th>
                                      <th></th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <?php

                                  foreach ($iceriksor as $icerikCek)
                                  {?>
                                  <tr>
                                      <th scope="row"><?php echo $icerikCek['icerik_id']; ?></th>
                                      <td><?php echo $icerikCek['icerik_ad']; ?></td>
                                      <td><?php echo $icerikCek['icerik_resimyol']; ?></td>
                                      <td><?php echo substr($icerikCek['icerik_detay'],0,30);  ?></td>
                                      <td><?php echo $icerikCek['icerik_keyword'];  ?></td>
                                      <td><?php echo $icerikCek['icerik_author'];  ?></td>
                                      <td><?php

                                          if($icerikCek['icerik_durum']=='1')
                                          {
                                              echo "AKTİF";
                                          }
                                          else{
                                              echo "PASİF";
                                          }
                                          ?></td>
                                      <td><?php echo $icerikCek['icerik_zaman'];  ?></td>
                                      <td>
                                          <img  width="200px" src="../<?php echo $icerikCek['icerik_resimyol']; ?>">
                                      </td>
                                      <td>
                                             <a href="icerik_duzenle.php?icerik_id=<?php echo $icerikCek['icerik_id'];?>"><button  type="submit"  name="icerikGuncelle"class="btn btn-success">Güncelle</button></a>

                                      </td>
                                      <td><a href="../db/icerik_islemler.php?icerik_id=<?php echo $icerikCek['icerik_id'];?>"><button class="btn btn-danger" ><i class="glyphicon glyphicon-trash"></i> Sil</button></a></td>
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