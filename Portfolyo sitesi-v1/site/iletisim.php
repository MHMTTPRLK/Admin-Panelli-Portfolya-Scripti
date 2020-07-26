<?php
include 'header.php';
$adressor=$db->prepare("select * from ayar where ayar_id=:id");
$adressor->execute(array("id"=>1));
$adresCek=$adressor->fetch(PDO::FETCH_ASSOC);
?>
<div role="main" class="main">
    <div class="container">
        <div class="row pt-xl">
            <div class="col-md-7">
                <h1 class="mt-xl mb-none">Bize Ulaşın</h1>
                <div class="divider divider-primary divider-small mb-xl">
                    <hr>
                </div>
                <p class="lead mb-xl mt-lg">Bize Ulaşmak için aşagdaki formu eksiksiz doldurup iletişime geçebilirsiniz.</p>

                <div class="alert alert-success hidden mt-lg" id="contactSuccess">
                    <strong>Tebrikler!</strong> Mesajınız Gönderildi.
                </div>

                <div class="alert alert-danger hidden mt-lg" id="contactError">
                    <strong>Hata!</strong> Mesajınız Gönderilmedi.
                    <span class="font-size-xs mt-sm display-block" id="mailErrorMessage"></span>
                </div>

                <form id="contactForm" action="php/contact-form.php" method="POST">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" placeholder="Adınız Soyadınız" value="" data-msg-required="Lütfen adınızı soyadınızı giriniz." maxlength="100" class="form-control input-lg" name="adsoyad" id="name" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="email" placeholder="Email" value="" data-msg-required="Lütfen email adresiniz giriniz." data-msg-email="Emailinizi kontrol ediniz.." maxlength="100" class="form-control input-lg" name="email" id="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="text" placeholder="Konu" value="" data-msg-required="Lütfen Konu belirtiniz .." maxlength="100" class="form-control input-lg" name="konu" id="subject" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea maxlength="5000" placeholder="Mesajınız" data-msg-required="Lütfen mesajınızı giriniz.." rows="5" class="ckeditor" name="mesaj" id="message" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" value="Mesaj Gönder" class="btn btn-primary btn-lg mb-xlg" data-loading-text="Gönderiliyor...">
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-md-4 col-md-offset-1">

                <h4 class="mt-xl mb-none">İletişim Adresleri</h4>
                <div class="divider divider-primary divider-small mb-xl">
                    <hr>
                </div>

                <ul class="list list-icons list-icons-style-3 mt-xlg mb-xlg">
                    <li><i class="fa fa-map-marker"></i> <strong>Adres:</strong> <?php echo  $adresCek['ayar_adres']?></li>
                    <li><i class="fa fa-phone"></i> <strong>Telefon:</strong> <?php echo  $adresCek['ayar_tel']?></li>
                    <li><i class="fa fa-phone"></i> <strong>GSM:</strong> <?php echo  $adresCek['ayar_gsm']?></li>
                    <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:<?php echo  $adresCek['ayar_mail']?>"><?php echo  $adresCek['ayar_mail']?></a></li>
                </ul>

                <h4 class="pt-xl mb-none">Mesai Saatleri</h4>
                <div class="divider divider-primary divider-small mb-xl">
                    <hr>
                </div>

                <ul class="list list-icons list-dark mt-xlg">
                    <li><i class="fa fa-clock-o"></i><?php echo  $adresCek['saat']?></li>
                    <li><i class="fa fa-clock-o"></i><?php echo  $adresCek['saat2']?></li>

                </ul>

            </div>
        </div>
    </div>

    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
    <div id="googlemaps" class="google-map google-map-footer">

        <iframe
                width="100%"
                height="100%"
                frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?key=<?php echo  $adresCek['ayar_googlemap']?>
    &q=<?php echo  $adresCek['ayar_adres']?>" allowfullscreen>
        </iframe>

    </div>

</div>
<?php
include "footer.php";
?>
