<?php
include 'baglanti.php';
/* Menu Kaydet*/
if(isset($_POST['menuKaydet']))
{

    $menu_ust=$_POST['menu_ust'];
    $ad=$_POST['menu_ad'];
    $detay=$_POST['menu_detay'];
    $url=$_POST['menu_url'];
    $sira=$_POST['menu_sira'];
    $durum=$_POST['menu_durum'];
    /* icon secme kaydetme*/
    /*
    $uploads_dir ='../sliderUploads';
    $tmp_name=$_FILES['menu_icon']["tmp_name"];
    $name=$_FILES['menu_icon']["name"];
    $benzersizSayi1=rand(20000,32000);
    $benzersizSayi2=rand(20000,32000);
    $benzersizSayi3=rand(20000,32000);
    $benzersizSayi4=rand(20000,32000);
    $benzersizAd=$benzersizSayi1.$benzersizSayi1.$benzersizSayi3.$benzersizSayi4;
    $refingyol=substr($uploads_dir,3)."/".$benzersizAd.$name;
    move_uploaded_file($tmp_name,"$uploads_dir/$benzersizAd$name");
    */
    $menu_ekle=$db->prepare("insert into menuler (menu_ust,menu_ad,
menu_detay,menu_url,menu_sira,menu_durum) values(?,?,?,?,?,?)");

    $menu_ekle->execute(array($menu_ust,$ad,$detay,$url,$sira,$durum));
    if($menu_ekle)
    {
        //echo " Menu  Kaydedildi";
        header("Location:../production/menu.php");
        //  header("Location:../production/iletisim_ayar.php?durum=ok");

    }
    else
    {
        //echo " Menu HATAAAAAAAAAAAAAAAAAA";
       header("Location:../production/menu.php");
        //header("Location:../production/iletisim_ayar.php?durum=no");
    }
}
/*Menu Güncelle Kısmı */
if(isset($_POST['menuGuncelle']))
{
    $menu_id=$_POST['menu_id'];
    $kategori_id=$_POST['kategori_id'];
    $menu_ust=$_POST['menu_ust'];
    $ad=$_POST['menu_ad'];
    $detay=$_POST['menu_detay'];
    $url=$_POST['menu_url'];
    $sira=$_POST['menu_sira'];
    $durum=$_POST['menu_durum'];
    if($_FILES['menu_icon']["size"]>0)
    {
        $uploads_dir ='../sliderUploads';
        $tmp_name=$_FILES['menu_icon']["tmp_name"];
        $name=$_FILES['menu_icon']["name"];
        $benzersizSayi1=rand(20000,32000);
        $benzersizSayi2=rand(20000,32000);
        $benzersizSayi3=rand(20000,32000);
        $benzersizSayi4=rand(20000,32000);
        $benzersizAd=$benzersizSayi1.$benzersizSayi1.$benzersizSayi3.$benzersizSayi4;
        $refingyol=substr($uploads_dir,3)."/".$benzersizAd.$name;
        move_uploaded_file($tmp_name,"$uploads_dir/$benzersizAd$name");

        $menuGuncelle=$db->prepare("update menuler set kategori_id=:kId,menu_ust=:ust,
menu_ad=:ad,menu_detay=:detay,menu_url=:url,menu_sira=:sira,menu_durum=:durum,menu_icon=:icon where menu_id=:id ");
        $menuGuncelle->execute(array(
            "id"=>$menu_id,
            "kId"=>$kategori_id,
            "ust"=>$menu_ust,
            "ad"=>$ad,
            "detay"=>$detay,
            "url"=>$url,
            "sira"=>$sira,
            "durum"=>$durum,
            "icon"=>$refingyol
        ));
        if($menuGuncelle)
        {
            //echo " Menu  Guncellendi";
            header("Location:../production/menu.php");
            //  header("Location:../production/iletisim_ayar.php?durum=ok");

        }
        else
        {
            //echo " Menu HATAAAAAAAAAAAAAAAAAA";
           header("Location:../production/menu.php");
            //header("Location:../production/iletisim_ayar.php?durum=no");
        }
    }
    else{
        $menuGuncelle=$db->prepare("update menuler set kategori_id=:kId,menu_ust=:ust,
menu_ad=:ad,menu_detay=:detay,menu_url=:url,menu_sira=:sira,menu_durum=:durum where menu_id=:id ");
        $menuGuncelle->execute(array(
            "id"=>$menu_id,
            "kId"=>$kategori_id,
            "ust"=>$menu_ust,
            "ad"=>$ad,
            "detay"=>$detay,
            "url"=>$url,
            "sira"=>$sira,
            "durum"=>$durum

        ));
        if($menuGuncelle)
        {
            //echo " Menu  Guncellendi";
            header("Location:../production/menu.php");
            //  header("Location:../production/iletisim_ayar.php?durum=ok");

        }
        else
        {
            //echo " Menu HATAAAAAAAAAAAAAAAAAA";
             header("Location:../production/menu.php");
            //header("Location:../production/iletisim_ayar.php?durum=no");
        }
    }

}





/*Menu Sil*/
if(isset($_GET['menu_id']))
{
    $id=$_GET['menu_id'];
    $menuSil=$db->prepare("delete from menuler where menu_id=:id");
    $menuSil->execute(array("id"=>$id));
    if($menuSil)
    {
        echo " Menu  Silindi";
        header("Location:../production/menu.php");
    }
    else
    {
        echo " Menu Silme HATAAAAAAAAAAAAAAAAAA";
        header("Location:../production/menu.php");


    }
}

