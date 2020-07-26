<?php
include 'header.php';
if(isset($_POST['arama']))
{
    $aranan=$_POST['aranan'];
  $menusor=$db->prepare("select * from menuler where menu_ad like '$aranan'");
    $menusor->execute();
}
else{
    $menusor=$db->prepare("select * from menuler  where menu_ust=:menu_ust order by menu_sira asc");
    $menusor->execute(array("menu_ust"=>'0'));
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
                              <h2>Menu Yönetim Sayfası  <small>Mehmet Parlak - Developer</small></h2>


                              <div class="clearfix"></div>
                          </div>
                          <div class="x_content">

                              <table class="table">
                                  <thead>
                                  <tr>
                                      <th>#</th>
                                      <th>Menu Ust</th>
                                      <th>Menu  Ad</th>
                                      <th>Menu  Detay</th>
                                      <th>Menu  Url</th>
                                      <th>Menu  Sira</th>
                                      <th>Menu  Durum</th>
                                      <th></th>
                                      <th></th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <?php

                                  foreach ($menusor as $menuCek)
                                  {
                                      $menu_id = $menuCek['menu_id'];

                                      ?>
                                  <tr>
                                      <td scope="row"><?php echo $menuCek['menu_id']; ?></td>
                                      <td scope="row"><?php echo $menuCek['menu_ust']; ?></td>
                                      <td scope="row"><?php echo $menuCek['menu_ad']; ?></td>
                                      <td scope="row"><?php echo $menuCek['menu_detay']; ?></td>
                                      <td scope="row"><?php echo $menuCek['menu_url']; ?></td>
                                      <td scope="row"><?php echo $menuCek['menu_sira']; ?></td>
                                      <td scope="row"><?php
                                      if($menuCek['menu_durum']=='1')
                                      {
                                          echo "AKTİF";
                                      }
                                      else{
                                          echo "PASİF";
                                      }
                                      ?></td>

                                     <td>
                                             <a href="menu_duzenle.php?menu_id=<?php echo $menuCek['menu_id'];?>"><button  type="submit" class="btn btn-success">Güncelle</button></a>
                                      </td>
                                      <td><a href="../db/menu_islemler.php?menu_id=<?php echo $menuCek['menu_id'];?>"><button class="btn btn-danger" ><i class="glyphicon glyphicon-trash"></i> Sil</button></a></td>
                                  </tr>


                                      <?php
                                      $altmenuSor=$db->prepare("select * from menuler where menu_ust=:menu_id order by menu_sira asc");
                                      $altmenuSor->execute(array("menu_id"=>$menu_id));
                                     while($altmenucek=$altmenuSor->fetch(PDO::FETCH_ASSOC))
                                      {?>

                                      <tr>
                                          <td scope="row"><?php echo $altmenucek['menu_id']; ?></td>
                                          <td scope="row"><?php echo $altmenucek['menu_ust']; ?></td>
                                          <td scope="row"><b>******</b>&nbsp;&nbsp;<?php echo $altmenucek['menu_ad']; ?></td>
                                          <td scope="row"><?php echo substr($altmenucek['menu_detay'],0,100); ?></td>
                                          <td scope="row"><?php echo $menuCek['menu_url']; ?></td>
                                          <td scope="row"><?php echo $altmenucek['menu_sira']; ?></td>
                                          <td scope="row"><?php
                                              if($altmenucek['menu_durum']=='1')
                                              {
                                                  echo "AKTİF";
                                              }
                                              else{
                                                  echo "PASİF";
                                              }
                                              ?></td>

                                          <td>
                                              <a href="menu_duzenle.php?menu_id=<?php echo $altmenucek['menu_id'];?>"><button  type="submit" class="btn btn-success">Güncelle</button></a>
                                          </td>
                                          <td><a href="../db/menu_islemler.php?menu_id=<?php echo $altmenucek['menu_id'];?>"><button class="btn btn-danger" ><i class="glyphicon glyphicon-trash"></i> Sil</button></a></td>
                                      </tr>




                                  <?php  }
                                  }
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