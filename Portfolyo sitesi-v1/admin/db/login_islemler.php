<?php
include "baglanti.php";
/* kullanici Giriş*/
if(isset($_POST['login']))
{
    $kadi=$_POST['kadi'];
    $sifre=md5($_POST['sifre']);
 echo  $sifre;
    if($kadi && $sifre)
    {
    $userCek=$db->prepare("select * from users where username=:username and user_pass=:user_pass");
    $userCek->execute(array(
        "username"=>$kadi,
        "user_pass"=>$sifre
    ));
    $login=$userCek->fetch();
    if($login)
    {
        $_SESSION['username']=$login['username'];
        $_SESSION['user_fullname']=$login['user_fullname'];
        $_SESSION['user_id']=$login['user_id'];
        header("Location:../production/index.php");
    }
    else{
        header("Location:../production/login.php?durum=no");
    }
    }

}
/* şifremi unttum button*/
if(isset($_POST['sifreUnuttum']))
{
    $kadi=$_POST['kadi'];
    if($kadi)
    {
        header("Location:../production/resetsifre.php?kadi=$kadi");
    }

}
/* Şifre Unuttum Form*/
if(isset($_POST['sifreGuncelle']))
{
    $user_name=$_POST['user_name'];
    $usernameCek=$db->prepare("select * from users where username=? order by user_id ");
    $usernameCek->execute(array($user_name));
    $usernameCek->fetch();

    $user=$usernameCek['user_id'];
    echo $user;
    exit();


    $guvenlik_pass=md5($_POST['guvenlik_pass']);
    $yeni_pass=md5($_POST['yeni_pass']);
    $yeni_pass_dogrulama=md5($_POST['yeni_pass_dogrulama']);

    if($guvenlik_pass and $yeni_pass and $yeni_pass_dogrulama)
    {
        if($yeni_pass==$yeni_pass_dogrulama)
        {
           $user_Kontrol=$db->prepare("update user set user_pass=:user_pass where user_id=:id");
           $user_Kontrol->execute(array($yeni_pass));
           $passUpdate=$user_Kontrol->fetch(PDO::FETCH_ASSOC);
           if($passUpdate)
           {
               header("Location:../production/index.php");
           }
        }


    }
}
/* Profil Guncelleme*/
if(isset($_POST['profilKaydet']))
{
    $id=$_POST['user_id'];
    $username=$_POST['username'];
    $user_fullname=$_POST['user_fullname'];
if($_FILES['user_resimyol']["size"]>0)
{
    $uploads_dir = '../sliderUploads';
    $tmp_name = $_FILES['user_resimyol']["tmp_name"];
    $name = $_FILES['user_resimyol']["name"];
    $benzersizSayi1 = rand(20000, 32000);
    $benzersizSayi2 = rand(20000, 32000);
    $benzersizSayi3 = rand(20000, 32000);
    $benzersizSayi4 = rand(20000, 32000);
    $benzersizAd = $benzersizSayi1 . $benzersizSayi1 . $benzersizSayi3 . $benzersizSayi4;
    $refingyol = substr($uploads_dir, 3) . "/" . $benzersizAd . $name;
    move_uploaded_file($tmp_name, "$uploads_dir/$benzersizAd$name");
    $userUpdate=$db->prepare("update users set username=:username,user_fullname=:user_fullname,user_resimyol=:resim where user_id=:id");
    $userUpdate->execute(array(
        "username"=>$username,
        "user_fullname"=>$user_fullname,
        "resim"=>$refingyol,
        "id"=>$id
    ));
    $userUpdate->fetch(PDO::FETCH_ASSOC);
    if($userUpdate)
    {
      // echo " Profil  Kaydedildi";
       header("Location:../production/profil.php");
    }
    else
    {
        //echo " Profil HATAAAAAAAAAAAAAAAAAA";
        header("Location:../production/profil.php");
        //header("Location:../production/iletisim_ayar.php?durum=no");
    }
}
else{
    $userUpdate=$db->prepare("update users set username=:username,user_fullname=:user_fullname where user_id=:id");
    $userUpdate->execute(array(
        "username"=>$username,
        "user_fullname"=>$user_fullname,
        "id"=>$id
    ));
    $userUpdate->fetch(PDO::FETCH_ASSOC);
    if($userUpdate)
    {
        // echo " Profil  Kaydedildi";
        header("Location:../production/profil.php");
    }
    else
    {
        //echo " Profil HATAAAAAAAAAAAAAAAAAA";
        header("Location:../production/profil.php");
        //header("Location:../production/iletisim_ayar.php?durum=no");
    }
}

}
?>
