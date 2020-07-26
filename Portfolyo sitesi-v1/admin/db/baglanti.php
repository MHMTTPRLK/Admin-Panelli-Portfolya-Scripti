<?php
session_start();
try{
        $db=new PDO("mysql:host=localhost;dbname=portofirma1;",'root','');


   // $db=new PDO("mysql:host=localhost;dbname=database name",'database username','database password')
     // echo "Veritabanı Baglantısı Başarılı";
    
}
catch (PDOException $e)
{
    echo $e->getMessage();
}