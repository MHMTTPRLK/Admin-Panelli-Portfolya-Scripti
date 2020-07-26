<?php
include 'header.php';
include 'slider.php';
$hakkimizdasor=$db->prepare("select * from hakkimizda where hakkimizda_id=:id");
$hakkimizdasor->execute(array("id"=>1));
$hakkimizde_cek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);
?>
    <section class="section section-default section-no-border mt-none">
        <div class="container">
            <div class="row mb-xl">
                <div class="col-md-7">
                    <h2 class="mt-xl mb-none"><?php echo$hakkimizde_cek['hakkimizda_baslik'];?></h2>
                    <div class="divider divider-primary divider-small mb-xl">
                        <hr>
                    </div>
                    <p class="mt-lg"><?php echo substr($hakkimizde_cek['hakkimizda_icerik'],0,500);?></p>

                    <a class="mt-md" href="hakkimizda.php">Devamını oku <i class="fa fa-long-arrow-right"></i></a>
                </div>

                <div class="col-md-4 col-md-offset-1">
                    <h4 class="mt-xl mb-none">Video Tanıtım</h4>
                    <div class="divider divider-primary divider-small mb-xl">
                        <hr>
                    </div>
                    <div class="embed-responsive embed-responsive-16by9 mb-xl">
                        <iframe width="300" height="200" src="https://www.youtube.com/embed/<?php echo $hakkimizde_cek['hakkimizda_video'];?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></iframe>
                    </div>

                    <blockquote class="blockquote-secondary">
                        <p class="font-size-lg">"<?php echo $hakkimizde_cek['hakkimizda_vizyon'];?>"</p>
                        <footer>Mehmet Parlak <cite> - Developer</cite></footer>

                    </blockquote> </div>



            </div>
        </div>
    </section>
<!--
    <div class="container" id="practice-areas">
        <div class="row">
            <div class="col-md-12 center">
                <h2 class="mt-xl mb-none">Practice Areas</h2>
                <div class="divider divider-primary divider-small divider-small-center mb-xl">
                    <hr>
                </div>
            </div>
        </div>

        <div class="row mt-lg">
            <div class="col-md-4">
                <div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                    <div class="feature-box-icon">
                        <img src="img/demos/law-firm/icons/criminal-law.png" alt="" />
                    </div>
                    <div class="feature-box-info ml-md">
                        <h4 class="mb-sm">Criminal Law</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
                        <a class="mt-md" href="demo-law-firm-practice-areas-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                    <div class="feature-box-icon">
                        <img src="img/demos/law-firm/icons/business-law.png" alt="" />
                    </div>
                    <div class="feature-box-info ml-md">
                        <h4 class="mb-sm">Business Law</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        <a class="mt-md" href="demo-law-firm-practice-areas-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="0">
                    <div class="feature-box-icon">
                        <img src="img/demos/law-firm/icons/health-law.png" alt="" />
                    </div>
                    <div class="feature-box-info ml-md">
                        <h4 class="mb-sm">Health Law</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        <a class="mt-md" href="demo-law-firm-practice-areas-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-md mb-xl">
            <div class="col-md-4">
                <div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                    <div class="feature-box-icon">
                        <img src="img/demos/law-firm/icons/divorce-law.png" alt="" />
                    </div>
                    <div class="feature-box-info ml-md">
                        <h4 class="mb-sm">Divorce Law</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet.</p>
                        <a class="mt-md" href="demo-law-firm-practice-areas-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                    <div class="feature-box-icon">
                        <img src="img/demos/law-firm/icons/capital-law.png" alt="" />
                    </div>
                    <div class="feature-box-info ml-md">
                        <h4 class="mb-sm">Capital Law</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        <a class="mt-md" href="demo-law-firm-practice-areas-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInUp" data-appear-animation-delay="300">
                    <div class="feature-box-icon">
                        <img src="img/demos/law-firm/icons/accident-law.png" alt="" />
                    </div>
                    <div class="feature-box-info ml-md">
                        <h4 class="mb-sm">Accident Law</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                        <a class="mt-md" href="demo-law-firm-practice-areas-detail.html">Learn More <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
-->

<!--
        <div class="container">
            <div class="row">
                <div class="col-md-12 center">
                    <h2 class="mt-xl mb-none">Attorneys</h2>
                    <div class="divider divider-primary divider-small divider-small-center mb-xl">
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row mt-lg">
                <div class="owl-carousel owl-theme owl-team-custom show-nav-title" data-plugin-options='{"items": 4, "margin": 10, "loop": false, "nav": true, "dots": false}'>
                    <div class="center mb-lg">
                        <a href="demo-law-firm-attorneys-detail.html">
                            <img src="img/team/team-22.jpg" class="img-responsive" alt="">
                        </a>
                        <h4 class="mt-md mb-none">David Doe</h4>
                        <p class="mb-none">Criminal Law</p>
                        <span class="thumb-info-social-icons mt-sm pb-none">
										<a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a>
										<a href="http://www.twitter.com"><i class="fa fa-twitter"></i><span>Twitter</span></a>
										<a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
									</span>>
                    </div>
                    <div class="center mb-lg">
                        <a href="demo-law-firm-attorneys-detail.html">
                            <img src="img/team/team-23.jpg" class="img-responsive" alt="">
                        </a>
                        <h4 class="mt-md mb-none">Jeff Doe</h4>
                        <p class="mb-none">Business Law</p>
                        <span class="thumb-info-social-icons mt-sm pb-none">
										<a href="mailto:mail@example.com"><i class="fa fa-envelope"></i><span>Email</span></a>
										<a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
									</span>

                    </div>
                    <div class="center mb-lg">
                        <a href="demo-law-firm-attorneys-detail.html">
                            <img src="img/team/team-24.jpg" class="img-responsive" alt="">
                        </a>
                        <h4 class="mt-md mb-none">Craig Doe</h4>
                        <p class="mb-none">Divorce Law</p>
                        <span class="thumb-info-social-icons mt-sm pb-none">
										<a href="http://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a>
										<a href="http://www.twitter.com"><i class="fa fa-twitter"></i><span>Twitter</span></a>
										<a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>

									</span>
                    </div>
                    <div class="center mb-lg">
                        <a href="demo-law-firm-attorneys-detail.html">
                            <img src="img/team/team-25.jpg" class="img-responsive" alt="">
                        </a>
                        <h4 class="mt-md mb-none">Richard Doe</h4>
                        <p class="mb-none">Accident Law</p>
                        <span class="thumb-info-social-icons mt-sm pb-none">
										<a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
									</span>>
                    </div>
                    <div class="center mb-lg">
                        <a href="demo-law-firm-attorneys-detail.html">
                            <img src="img/team/team-29.jpg" class="img-responsive" alt="">
                        </a>
                        <h4 class="mt-md mb-none">Amanda Doe</h4>
                        <p class="mb-none">Health Law</p>
                        <span class="thumb-info-social-icons mt-sm pb-none">
										<a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
									</span>>
                    </div>
                    <div class="center mb-lg">
                        <a href="demo-law-firm-attorneys-detail.html">
                            <img src="img/team/team-30.jpg" class="img-responsive" alt="">
                        </a>
                        <h4 class="mt-md mb-none">Jessica Doe</h4>
                        <p class="mb-none">Capital Law</p>
                        <span class="thumb-info-social-icons mt-sm pb-none">
										<a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
									</span>
                    </div>
                </div>
            </div>
        </div>
        </div>
        -->


<!--
    <section class="parallax section section-text-light section-parallax section-center mt-xl" data-plugin-parallax data-plugin-options='{"speed": 1.5}' data-image-src="img/demos/law-firm/parallax-law-firm-2.jpg">
        <div class="container">
            <div class="row">
                <div class="counters counters-text-light">
                    <div class="col-md-3 col-sm-6">
                        <div class="counter mb-lg mt-lg">
                            <i class="icon-user-following icons"></i>
                            <strong data-to="20000" data-append="+">0</strong>
                            <label>Happy Clients</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter mb-lg mt-lg">
                            <i class="icon-diamond icons"></i>
                            <strong data-to="15">0</strong>
                            <label>Years in Business</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter mb-lg mt-lg">
                            <i class="icon-badge icons"></i>
                            <strong data-to="3">0</strong>
                            <label>Awards</label>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="counter mb-lg mt-lg">
                            <i class="icon-paper-plane icons"></i>
                            <strong data-to="178">0</strong>
                            <label>Successful Stories</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->
    <div class="container">
        <div class="row">
            <div class="col-md-12 center">
                <h2 class="mt-xl mb-none">Son Haberler</h2>
                <div class="divider divider-primary divider-small divider-small-center mb-xl">
                    <hr>
                </div>
            </div>
        </div>
        <div class="row mt-xl">
            <?php
            $habersor=$db->prepare("select * from icerik where icerik_durum='1' limit 2 ");
            $habersor->execute();

            foreach ($habersor as $haberCek)
            {
        ?>
            <div class="col-md-6">

							<span class="thumb-info thumb-info-side-image thumb-info-no-zoom mb-xl">
								<span class="thumb-info-side-image-wrapper p-none hidden-xs">
									<a title="" href="icerik_detay.php?icerik_id=<?php echo $haberCek['icerik_id']; ?>">
										<img src="../admin/<?php echo $haberCek['icerik_resimyol'] ?>" class="img-responsive" alt="" style="width: 195px;">
									</a>
								</span>
								<span class="thumb-info-caption">
									<span class="thumb-info-caption-text">
										<h2 class="mb-md mt-xs"><a title="" class="text-dark" href="icerik_detay.php?icerik_id=<?php echo $haberCek['icerik_id']; ?>"><?php echo $haberCek['icerik_ad']; ?></a></h2>
										<span class="post-meta">
											<span><?php echo $haberCek['icerik_zaman']; ?> | <a href="icerik_detay.php?icerik_id=<?php echo $haberCek['icerik_id']; ?>"><?php echo $haberCek['icerik_author']; ?></a></span>
										</span>
										<p class="font-size-md"><?php echo substr($haberCek['icerik_detay'],0,250); ?></p>
										<a class="mt-md" href="icerik_detay.php?icerik_id=<?php echo $haberCek['icerik_id']; ?>">Okumak İçin <i class="fa fa-long-arrow-right"></i></a>
									</span>
								</span>
							</span>

            </div>
           <?php }?>
        </div>
    </div>

    <section class="section section-background section-footer" style="background-image: url(img/light-cover.jpg); background-position: 50% 100%;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-6">
                    <h2 class="mt-xl mb-none">Request a Free Consultation</h2>
                    <p>Consult with our experienced team for complete solutions to your legal issues.</p>
                    <div class="divider divider-primary divider-small mb-xl">
                        <hr>
                    </div>
                    <form id="contactForm" action="php/contact-form.php" method="POST">
                        <div class="row">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <input type="text" value="" placeholder="Your name" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                                </div>
                                <div class="col-sm-6">
                                    <input type="email" value="" placeholder="Your email address *" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input type="text" value="" placeholder="Subject" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <textarea maxlength="5000" placeholder="Message *" data-msg-required="Please enter your message." rows="3" class="form-control" name="message" id="message" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="submit" value="Send Message" class="btn btn-primary mb-xl" data-loading-text="Loading...">

                                <div class="alert alert-success hidden" id="contactSuccess">
                                    Message has been sent to us.
                                </div>

                                <div class="alert alert-danger hidden" id="contactError">
                                    Error sending your message.
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </section>
</div>
<?php include 'footer.php';?>