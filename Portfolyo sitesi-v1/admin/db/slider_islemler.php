<?php
include "baglanti.php";
/* Slider Ekle*/
if(isset($_POST['sliderKaydet']))
{
    $ad=$_POST['slider_ad'];
    $link=$_POST['slider_url'];
    $sira=$_POST['slider_sira'];
    $durum=$_POST['slider_durum'];

    $uploads_dir ='../sliderUploads';
    $tmp_name=$_FILES['slider_resimyol']["tmp_name"];
    $name=$_FILES['slider_resimyol']["name"];
    $benzersizSayi1=rand(20000,32000);
    $benzersizSayi2=rand(20000,32000);
    $benzersizSayi3=rand(20000,32000);
    $benzersizSayi4=rand(20000,32000);
    $benzersizAd=$benzersizSayi1.$benzersizSayi1.$benzersizSayi3.$benzersizSayi4;
    $refingyol=substr($uploads_dir,3)."/".$benzersizAd.$name;
    move_uploaded_file($tmp_name,"$uploads_dir/$benzersizAd$name");
    $slider_ekle=$db->prepare("insert into slider (slider_ad,slider_url,slider_sira,slider_durum,slider_resimyol) values(?,?,?,?,?)");
    $slider_ekle->execute(array($ad,$link,$sira,$durum,$refingyol));
    if($slider_ekle)
    {
       // echo " Slider  Kaydedildi";
        header("Location:../production/slider.php?durum=ok");
        //  header("Location:../production/iletisim_ayar.php?durum=ok");

    }
    else
    {
        //echo " SliderHATAAAAAAAAAAAAAAAAAA";
        header("Location:../production/slider.php?durum=no");
        //header("Location:../production/iletisim_ayar.php?durum=no");
    }
}
/* Slider Guncelle*/
if(isset($_POST['sliderGuncelle']))
{
    $id=$_POST['slider_id'];
    $ad=$_POST['slider_ad'];
    $link=$_POST['slider_url'];
    $sira=$_POST['slider_sira'];
    $durum=$_POST['slider_durum'];

$MAX_SIZE=5000000;
if($_FILES['slider_resimyol']["size"]>0)
{
    $uploads_dir ='../sliderUploads';
    $tmp_name=$_FILES['slider_resimyol']["tmp_name"];
    $name=$_FILES['slider_resimyol']["name"];
    $benzersizSayi1=rand(20000,32000);
    $benzersizSayi2=rand(20000,32000);
    $benzersizSayi3=rand(20000,32000);
    $benzersizSayi4=rand(20000,32000);
    $benzersizAd=$benzersizSayi1.$benzersizSayi1.$benzersizSayi3.$benzersizSayi4;
    $refingyol=substr($uploads_dir,3)."/".$benzersizAd.$name;
    move_uploaded_file($tmp_name,"$uploads_dir/$benzersizAd$name");

    $slider_duzenle=$db->prepare("update slider  set slider_ad=:ad,slider_url=:url,
slider_sira=:sira,slider_durum=:durum,slider_resimyol=:resimyol where slider_id='{$id}' ");
    $slider_duzenle->execute(array(
        "ad"=>$ad,
        "url"=>$link,
        "sira"=>$sira,
        "durum"=>$durum,
        "resimyol"=>$refingyol


    ));
    if($slider_duzenle)
    {
        //echo " Slider  Kaydedildi";
         header("Location:../production/slider.php");
        //  header("Location:../production/iletisim_ayar.php?durum=ok");

    }
    else
    {
        //echo " SliderHATAAAAAAAAAAAAAAAAAA";
        header("Location:../production/slider.php");
        //header("Location:../production/iletisim_ayar.php?durum=no");
    }

}
else{

    $slider_duzenle=$db->prepare("update slider  set slider_ad=:ad,slider_url=:url,
slider_sira=:sira,slider_durum=:durum where slider_id='{$id}' ");
    $slider_duzenle->execute(array(
        "ad"=>$ad,
        "url"=>$link,
        "sira"=>$sira,
        "durum"=>$durum


    ));
    if($slider_duzenle)
    {
        echo " Slider Resim Seçilmedi Kaydedildi";
      header("Location:../production/slider.php");
        //  header("Location:../production/iletisim_ayar.php?durum=ok");

    }
    else
    {
        echo " Slider Resim HATAAAAAAAAAAAAAAAAAA";
       header("Location:../production/slider.php");
        //header("Location:../production/iletisim_ayar.php?durum=no");
    }
}




}
/* Slider Sil*/
if(isset($_GET['slider_id']))
{
$sliderSil=$db->prepare("delete from slider where slider_id=:id");
$sliderSil->execute(array("id"=>$_GET['slider_id']));
if($sliderSil)
{
    echo " Slider  Silindi";
    header("Location:../production/slider.php");
}
else
{
    echo " Slider Slime HATAAAAAAAAAAAAAAAAAA";
    header("Location:../production/slider.php");


}
}