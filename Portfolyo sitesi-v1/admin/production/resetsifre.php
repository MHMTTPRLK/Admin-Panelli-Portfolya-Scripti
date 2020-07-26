<?php
include "../db/baglanti.php";
$kadi=$_GET['kadi'];

?>

<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Giriş Paneli | </title>
      <!-- title icon -->
      <link rel="shortcut icon" href="../yonetim_images/code.jpg"type="image/x-icon" />
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="../db/login_islemler.php" method="post">
              <h1>Şifre Yenileme Ekranı </h1>
                <div>
                    <input type="hidden" class="form-control" name="user_name" value="<?php echo $kadi;?>"/>
                </div>
                <div>
                    <input type="text" class="form-control" placeholder="Yeni Şifrenizi Giriniz" required="" name="yeni_pass"/>
                </div>
                <div>
                    <input type="text" class="form-control" placeholder="Yeni Şifrenizi Doğrulayın" required="" name="yeni_pass_dogrulama" />
                </div>
                <div>
                    <input type="text" class="form-control" placeholder="Güvenlik Cevabını Giriniz" required="" name="guvenlik_pass" />
                </div>
              <div>
                <button class="btn btn-default submit" name="sifreGuncelle">Şifreyi Güncelle</button>

              </div>

              <div class="clearfix"></div>

                <div class="separator">
                    <div class="clearfix"></div>
                    <br />

                    <div>
                        <h1><i class="fa fa-code"></i> PARLAK-SOFTWARE</h1>
                        <p>© Copyright 2020. All Rights Reserved.Mehmet Parlak-Developer  </p>
                    </div>
                </div>
            </form>
          </section>
        </div>


      </div>
    </div>
  </body>
</html>
