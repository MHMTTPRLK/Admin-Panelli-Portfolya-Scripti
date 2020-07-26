<footer class="short" id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <a href="demo-law-firm.html" class="logo mb-md">
                    <img alt="Porto Website Template" class="img-responsive" width="97" height="32" src="img/demos/law-firm/logo-law-firm-footer.png">
                </a>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis.</p>
            </div>
            <div class="col-md-3 col-md-offset-1">
                <h5 class="mb-sm">Adres Bilgilerimiz</h5>
                <ul class="list list-icons mt-xl">
                    <li><i class="fa fa-map-marker"></i> <strong>Adress:</strong>
                        <?php echo $ayarcek['ayar_adres']?><br>
                        <?php echo $ayarcek['ayar_ilce']?> /
                        <?php echo $ayarcek['ayar_il']?>
                    </li>
                    <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:<?php echo $ayarcek['ayar_mail']?>"><?php echo $ayarcek['ayar_mail']?></a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5 class="mb-sm">Bize Ulaşın</h5>
                <span class="phone"><?php echo $ayarcek['ayar_tel']?></span>
                <ul class="social-icons mt-lg">
                    <li class="social-icons-facebook"><a href="<?php echo $ayarcek['ayar_facebook']?>" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li class="social-icons-twitter"><a href="<?php echo $ayarcek['ayar_twitter']?>" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li class="social-icons-twitter"><a href="<?php echo $ayarcek['ayar_instagram']?>" target="_blank" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                    <li class="social-icons-linkedin"><a href="<?php echo $ayarcek['ayar_linkedin']?>" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li class="social-icons-facebook"><a href="<?php echo $ayarcek['ayar_youtube']?>" target="_blank" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>© Copyright 2020. All Rights Reserved.<?php  echo $ayarcek['ayar_author'];?> | <a href="https://iste.edu.tr" target="_blank"> PARLAK-SOFTWARE</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<!-- Vendor -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="vendor/jquery-cookie/jquery-cookie.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="vendor/common/common.min.js"></script>
<script src="vendor/jquery.validation/jquery.validation.min.js"></script>
<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
<script src="vendor/isotope/jquery.isotope.min.js"></script>
<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="vendor/vide/vide.min.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="js/theme.js"></script>

<!-- Current Page Vendor and Views -->
<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<!-- Current Page Vendor and Views -->
<script src="js/views/view.contact.js"></script>

<!-- Demo -->
<script src="js/demos/demo-law-firm.js"></script>

<!-- Theme Custom -->
<script src="js/custom.js"></script>

<!-- Theme Initialization Files -->
<script src="js/theme.init.js"></script>




 <!--Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', '<?php echo $ayarcek['ayar_analystic']?>>', 'auto');
    ga('send', 'pageview');
</script>-->



</body>
</html>
