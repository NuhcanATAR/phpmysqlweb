<?php

include("../../../../database/db.php");//veri tabanı bağlantısı sağlandı
include("../../../../database/function.php");//seo optimizasyonu dosyası bağlandı

if($_POST){

  $pr_baslik = $_POST['pr_baslik'];
  $pr_ozet   = $_POST['pr_ozet'];
  $pr_kapak  = $_POST['pr_kapak'];
  $editor1   = $_POST['editor1'];

  $pr_kyt = $db->prepare("INSERT into wp_proje set

  pr_baslik =:pr_baslik,
  pr_ozet   =:pr_ozet,
  pr_kapak  =:pr_kapak,
  editor1   =:editor1

  ");

  $pr_control = $pr_kyt->execute(array(

   ":pr_baslik" => $pr_baslik,
   ":pr_ozet"   => $pr_ozet,
   ":pr_kapak"  => $pr_kapak,
   ":editor1"   => $editor1
  ));

  if($pr_control){
    echo '
    <h1
      style="
       text-align:center;
       margin-top:300px;
      "
    >👍 Projeniz Başarıyla İle Eklendi 🤗</h1>
    ';
    header("refresh:2;url=proje.php");
  }else{
    echo "Başarısız";
  }
}



?>
