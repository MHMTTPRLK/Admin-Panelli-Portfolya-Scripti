<?php
include 'baglanti.php';
/* Hakkimizda Güncelleme Kaydetme işlemi*/
if(isset($_POST['hakkimizdaKaydet']))
{
    $hakkimizdaKaydet=$db->prepare("update hakkimizda set hakkimizda_baslik=:baslik,
hakkimizda_icerik=:icerik,hakkimizda_video=:video,hakkimizda_vizyon=:vizyon,hakkimizda_misyon=:misyon
 where hakkimizda_id=:id");
    $hakkimizdaKaydet->execute(array(
        "id"=>1,
        "baslik"=>$_POST['hakkimizda_baslik'],
        "icerik"=>$_POST['hakkimizda_icerik'],
        "video"=>$_POST['hakkimizda_video'],
        "vizyon"=>$_POST['hakkimizda_vizyon'],
        "misyon"=>$_POST['hakkimizda_misyon']
    ));
    if($hakkimizdaKaydet)
    {
        echo " Hakkimizda Güncellendi";
      // header("Refresh: 5; ../production/admin_hakkimizda.php?durum=ok");
        header("Location:../production/admin_hakkimizda.php?durum=ok");

    }
    else
    {
        echo " Genel Ayar HATAAAAAAAAAAAAAAAAAA";
        //header("Refresh:5  ;../production/admin_hakkimizda..php?durum=no");
        header("Location:../production/admin_hakkimizda.php?durum=no");
    }
}
