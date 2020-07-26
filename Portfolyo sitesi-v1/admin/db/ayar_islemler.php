<?php
include "baglanti.php";
/* Genel Ayar Güncelleme Kaydetme işlemi*/
if(isset($_POST['genelAyarKaydet']))
{

    if($_FILES['ayar_logo']["size"]>0)
    {
    $uploads_dir = '../sliderUploads';
    $tmp_name = $_FILES['ayar_logo']["tmp_name"];
    $name = $_FILES['ayar_logo']["name"];
    $benzersizSayi1 = rand(20000, 32000);
    $benzersizSayi2 = rand(20000, 32000);
    $benzersizSayi3 = rand(20000, 32000);
    $benzersizSayi4 = rand(20000, 32000);
    $benzersizAd = $benzersizSayi1 . $benzersizSayi1 . $benzersizSayi3 . $benzersizSayi4;
    $refingyol = substr($uploads_dir, 3) . "/" . $benzersizAd . $name;
    move_uploaded_file($tmp_name, "$uploads_dir/$benzersizAd$name");
        $ayarKaydet=$db->prepare("update ayar set 
ayar_siteurl=:url,ayar_title=:baslik,ayar_description=:aciklama,
ayar_keywords=:anahtar_kelime,ayar_author=:yazar,ayar_logo=:logo where ayar_id=:ayar_idim");
        $ayarKaydet->execute(array(
            "ayar_idim"=>1,
            "url"=>$_POST['ayar_siteurl'],
            "baslik"=>$_POST['ayar_title'],
            "aciklama"=>$_POST['ayar_description'],
            "anahtar_kelime"=>$_POST['ayar_keywords'],
            "yazar"=>$_POST['ayar_author'],
            "logo"=>$refingyol
        ));
        if($ayarKaydet)
        {
            //echo " Genel Ayar Güncellendi";
            // header("Refresh: 2; ../production/genel_ayar.php?durum=ok");
            header("Location:../production/genel_ayar.php?durum=ok");

        }
        else
        {
            //echo " Genel Ayar HATAAAAAAAAAAAAAAAAAA";
           // header("Refresh:4  ;../production/genel_ayar.php?durum=no");
            header("Location:../production/genel_ayar.php?durum=no");
        }
}
else
{
    $ayarKaydet=$db->prepare("update ayar set 
ayar_siteurl=:url,ayar_title=:baslik,ayar_description=:aciklama,
ayar_keywords=:anahtar_kelime,ayar_author=:yazar where ayar_id=:ayar_idim");
    $ayarKaydet->execute(array(
        "ayar_idim"=>1,
        "url"=>$_POST['ayar_siteurl'],
        "baslik"=>$_POST['ayar_title'],
        "aciklama"=>$_POST['ayar_description'],
        "anahtar_kelime"=>$_POST['ayar_keywords'],
        "yazar"=>$_POST['ayar_author']

    ));
    if($ayarKaydet)
    {
        //echo " Genel es Ayar Güncellendi";
        // header("Refresh: 2; ../production/genel_ayar.php?durum=ok");
       header("Location:../production/genel_ayar.php?durum=ok");

    }
    else
    {
        //echo " Genel es Ayar HATAAAAAAAAAAAAAAAAAA";
        //header("Refresh:4  ;../production/genel_ayar.php?durum=no");
        header("Location:../production/genel_ayar.php?durum=no");
    }

}
}
/* İletişim Ayarları Güncelleme */
if(isset($_POST['iletisimAyarKaydet']))
{
    $iletisimKaydet=$db->prepare("update ayar set ayar_tel=:telno,
ayar_gsm=:gsmno,ayar_fax=:faxno,ayar_mail=:mail,ayar_adres=:adres,ayar_ilce=:ilce,ayar_il=:ayar_il,saat=:saat where ayar_id=:ayar_id");
    $iletisimKaydet->execute(array(
           "ayar_id"=>1,
           "telno"=>$_POST['ayar_tel'],
           "gsmno"=>$_POST['ayar_gsm'],
           "faxno"=>$_POST['ayar_fax'],
           "adres"=>$_POST['ayar_adres'],
           "mail"=>$_POST['ayar_mail'],
           "ilce"=>$_POST['ayar_ilce'],
            "ayar_il"=>$_POST['sehir'],
           "saat"=>$_POST['saat']

       ));
    if($iletisimKaydet)
    {
        echo " Genel İletişim Ayar Güncellendi";
        header("Location:../production/iletisim_ayar.php?durum=ok");
        //  header("Location:../production/iletisim_ayar.php?durum=ok");

    }
    else
    {
        echo " Genel İletişim  Ayar HATAAAAAAAAAAAAAAAAAA";
        header("Location:../production/iletisim_ayar.php?durum=no");
        //header("Location:../production/iletisim_ayar.php?durum=no");
    }
}
/* APi Ayar Güncelleme Kaydetme işlemi*/
if(isset($_POST['apiAyarKaydet']))
{
    $apiKaydet=$db->prepare("update ayar set 
ayar_recapctha=:recapctha,ayar_googlemap=:googlemap,ayar_analystic=:analystic
 where ayar_id=:ayar_idim");
    $apiKaydet->execute(array(
        "ayar_idim"=>1,
        "recapctha"=>$_POST['ayar_recapctha'],
        "googlemap"=>$_POST['ayar_googlemap'],
        "analystic"=>$_POST['ayar_analystic']

    ));
    if($apiKaydet)
    {
        echo " Genel Ayar Güncellendi";
        // header("Refresh: 2; ../production/genel_ayar.php?durum=ok");
        header("Location:../production/api_ayar.php?durum=ok");

    }
    else
    {
        echo " Genel Ayar HATAAAAAAAAAAAAAAAAAA";
        header("Refresh:4  ;../production/api_ayar.php?durum=no");
        //header("Location:../production/genel_ayar.php?durum=no");
    }
}
/* Genel Ayar Güncelleme Kaydetme işlemi*/
if(isset($_POST['sosyalmedyaAyarKaydet']))
{
    $medyaKaydet=$db->prepare("update ayar set 
ayar_facebook=:facebook,ayar_twitter=:twitter,ayar_youtube=:youtube,ayar_linkedin=:linkedin,ayar_instagram=:instagram,
ayar_google=:google
 where ayar_id=:ayar_idim");
    $medyaKaydet->execute(array(
        "ayar_idim"=>1,
        "facebook"=>$_POST['ayar_facebook'],
        "twitter"=>$_POST['ayar_twitter'],
        "youtube"=>$_POST['ayar_youtube'],
        "linkedin"=>$_POST['ayar_linkedin'],
        "instagram"=>$_POST['ayar_instagram'],
        "google"=>$_POST['ayar_google']
    ));
    if($medyaKaydet)
    {
        echo " Genel Ayar Güncellendi";
        // header("Refresh: 2; ../production/genel_ayar.php?durum=ok");
        header("Location:../production/sosyalMedya_ayar.php?durum=ok");

    }
    else
    {
        echo " Genel Ayar HATAAAAAAAAAAAAAAAAAA";
        header("Refresh:4  ;../production/sosyalMedya_ayar.php?durum=no");
        //header("Location:../production/genel_ayar.php?durum=no");
    }
}