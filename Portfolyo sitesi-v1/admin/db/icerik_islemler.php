<?php
include 'baglanti.php';
/* İçerik Ekleme */
if(isset($_POST['icerikKaydet']))
{
    $ad=$_POST['icerik_ad'];
    $detay=$_POST['icerik_detay'];
    $keyword=$_POST['icerik_keyword'];
    $durum=$_POST['icerik_durum'];
    $zaman=$_POST['icerik_zaman'];
    $yazar=$_POST['icerik_author'];
    $yazar_hayat=$_POST['icerik_authorlife'];

    $uploads_dir ='../sliderUploads';
    $tmp_name=$_FILES['icerik_resimyol']["tmp_name"];
    $name=$_FILES['icerik_resimyol']["name"];
    $benzersizSayi1=rand(20000,32000);
    $benzersizSayi2=rand(20000,32000);
    $benzersizSayi3=rand(20000,32000);
    $benzersizSayi4=rand(20000,32000);
    $benzersizAd=$benzersizSayi1.$benzersizSayi1.$benzersizSayi3.$benzersizSayi4;
    $refingyol=substr($uploads_dir,3)."/".$benzersizAd.$name;
    move_uploaded_file($tmp_name,"$uploads_dir/$benzersizAd$name");
    $icerik_ekle=$db->prepare("insert into icerik (icerik_ad,icerik_detay,icerik_keyword,icerik_durum,icerik_zaman,icerik_author,icerik_authorlife,icerik_resimyol) values(?,?,?,?,?,?,?,?)");
    $icerik_ekle->execute(array($ad,$detay,$keyword,$durum,$zaman,$yazar,$yazar_hayat,$refingyol));
    if($icerik_ekle)
    {
        //echo " İçerik  Kaydedildi";
        header("Location:../production/icerik.php?durum=ok");
        //  header("Location:../production/iletisim_ayar.php?durum=ok");

    }
    else
    {
       // echo " İçerik HATAAAAAAAAAAAAAAAAAA";
       header("Location:../production/icerik.php?durum=no");
        //header("Location:../production/iletisim_ayar.php?durum=no");
    }

}
/* İcerik Guncelle*/
if(isset($_POST['icerikGuncelle']))
{
    $id=$_POST['icerik_id'];
    $ad=$_POST['icerik_ad'];
    $detay=$_POST['icerik_detay'];
    $keyword=$_POST['icerik_keyword'];
    $durum=$_POST['icerik_durum'];
    $zaman=$_POST['icerik_zaman'];
    $yazar=$_POST['icerik_author'];
    $yazar_hayat=$_POST['icerik_authorlife'];
    if($_FILES['icerik_resimyol']["size"]>0)
    {
        $uploads_dir ='../sliderUploads';
        $tmp_name=$_FILES['icerik_resimyol']["tmp_name"];
        $name=$_FILES['icerik_resimyol']["name"];
        $benzersizSayi1=rand(20000,32000);
        $benzersizSayi2=rand(20000,32000);
        $benzersizSayi3=rand(20000,32000);
        $benzersizSayi4=rand(20000,32000);
        $benzersizAd=$benzersizSayi1.$benzersizSayi1.$benzersizSayi3.$benzersizSayi4;
        $refingyol=substr($uploads_dir,3)."/".$benzersizAd.$name;
        move_uploaded_file($tmp_name,"$uploads_dir/$benzersizAd$name");

        $icerik_duzenle=$db->prepare("update icerik  set icerik_ad=:ad,icerik_detay=:detay,
icerik_keyword=:keyword,icerik_durum=:durum,icerik_zaman=:zaman,icerik_resimyol=:resimyol icerik_author=:yazar,icerik_authorlife=:yazar_hayat where icerik_id='{$id}' ");
        $icerik_duzenle->execute(array(
            "ad"=>$ad,
            "detay"=>$detay,
            "keyword"=>$keyword,
            "durum"=>$durum,
            "zaman"=>$zaman,
            "resimyol"=>$refingyol,
            "yazar"=>$yazar,
            "yazar_hayat"=>$yazar_hayat


        ));
        if($icerik_duzenle)
        {
            //echo " İçerik Kaydedildi";
            header("Location:../production/icerik.php");
            //  header("Location:../production/iletisim_ayar.php?durum=ok");

        }
        else
        {
            //echo " İçerik HATAAAAAAAAAAAAAAAAAA";
            header("Location:../production/icerik.php");
            //header("Location:../production/iletisim_ayar.php?durum=no");
        }

    }
    else{

        $icerik_duzenle=$db->prepare("update icerik  set icerik_ad=:ad,icerik_detay=:detay,
icerik_keyword=:keyword,icerik_durum=:durum, icerik_author=:yazar,icerik_authorlife=:yazar_hayat where icerik_id='{$id}' ");
        $icerik_duzenle->execute(array(
            "ad"=>$ad,
            "detay"=>$detay,
            "keyword"=>$keyword,
            "durum"=>$durum,
            "yazar"=>$yazar,
            "yazar_hayat"=>$yazar_hayat



        ));
        if($icerik_duzenle)
        {
            //echo " İçerik Kaydedildi";
            header("Location:../production/icerik.php");
            //  header("Location:../production/iletisim_ayar.php?durum=ok");

        }
        else
        {
            //echo " İçerik HATAAAAAAAAAAAAAAAAAA";
            header("Location:../production/icerik.php");
            //header("Location:../production/iletisim_ayar.php?durum=no");
        }
    }
}
/* İçerik Silme*/
/* Slider Sil*/
if(isset($_GET['icerik_id']))
{
    $icerikSil=$db->prepare("delete from icerik where icerik_id=:id");
    $icerikSil->execute(array("id"=>$_GET['icerik_id']));
    if($icerikSil)
    {
        echo " İçerik  Silindi";
        header("Location:../production/icerik.php");
    }
    else
    {
        echo " İçerik Slime HATAAAAAAAAAAAAAAAAAA";
        header("Location:../production/icerik.php");


    }
}

