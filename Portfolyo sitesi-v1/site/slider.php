<?php
$ayarsor1=$db->prepare("select * from ayar where ayar_id=:ayar_id");
$ayarsor1->execute(array(
    "ayar_id"=>1
));
$ayarcek1=$ayarsor1->fetch(PDO::FETCH_ASSOC);

/* foreach($ayarsor as $ayarcek) olur   */


?>

<div role="main" class="main">

    <div class="slider-container rev_slider_wrapper" style="height: 650px;">
        <div id="revolutionSlider" class="slider rev_slider manual">

            <ul>
                <?php
                $sliderCek=$db->query("select * from slider  where slider_durum='1' order by slider_sira DESC LIMIT 5")->fetchAll();

                foreach ($sliderCek as $sliderlar)
                { ?>



                <li data-transition="zoom" data-title="<?php echo $ayarcek1['ayar_author'];?>" data-thumb="../admin/<?php echo $sliderlar['slider_resimyol'];?>">

                    <img src="../admin/<?php echo $sliderlar['slider_resimyol'];?>"
                         alt="<?php echo $sliderlar['slider_ad'];?>"
                         data-bgposition="center center"
                         data-bgfit="cover"
                         data-bgrepeat="no-repeat"
                         class="rev-slidebg">

                    <!--
                    <div class="tp-caption top-label"
                         data-x="right" data-hoffset="100"
                         data-y="center" data-voffset="-95"
                         data-start="1000"
                         style="z-index: 5"
                         data-transform_in="y:[-300%];opacity:0;s:500;">YOUR TRUSTED</div>

                    <div class="tp-caption main-label"
                         data-x="right" data-hoffset="100"
                         data-y="center" data-voffset="-45"
                         data-start="1500"
                         data-whitespace="nowrap"
                         data-transform_in="y:[100%];s:500;"
                         data-transform_out="opacity:0;s:500;"
                         style="z-index: 5"
                         data-mask_in="x:0px;y:0px;">ADVOCATE TEAM</div>

                    <div class="tp-caption bottom-label"
                         data-x="right" data-hoffset="100"
                         data-y="center" data-voffset="5"
                         data-start="2000"
                         style="z-index: 5"
                         data-transform_in="y:[100%];opacity:0;s:500;">Consult With Our Experienced Team for Solutions.</div>

                    <a class="tp-caption btn btn-primary btn-lg"
                       data-hash
                       data-hash-offset="85"
                       href="#home-intro"
                       data-x="right" data-hoffset="100"
                       data-y="center" data-voffset="80"
                       data-start="2500"
                       data-whitespace="nowrap"
                       data-transform_in="y:[100%];s:500;"
                       data-transform_out="opacity:0;s:500;"
                       style="z-index: 5"
                       data-mask_in="x:0px;y:0px;">Request a Free Consultation</a>

                    -->
                </li>
              <?php  } ?>
            </ul>
        </div>
    </div>