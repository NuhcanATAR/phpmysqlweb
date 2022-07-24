<?php

include("../../../../database/db.php");//veri tabanı bağlantısı sağlandı
include("../../../../database/function.php");//seo optimizasyonu dosyası bağlandı

$gelen_id = $_GET['id'];

$yrm_ekle = $db->prepare("UPDATE bg_yorum SET durum= durum +1 WHERE id=?");

$yrm_control = $yrm_ekle->execute(array($gelen_id));

if($yrm_control){
  echo '
      <h1
        style="
         text-align:center;
         margin-top:300px;
        "
      >👍 Yorum Eklendi 🗑</h1>
      ';
      header("refresh:2;url=yrmlar-list.php");
}else{
  echo "Başarısız";
}

?>
