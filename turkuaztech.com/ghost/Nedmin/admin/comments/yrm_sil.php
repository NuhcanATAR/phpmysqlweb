<?php

include("../../../../database/db.php");//veri tabanı bağlantısı sağlandı
include("../../../../database/function.php");//seo optimizasyonu dosyası bağlandı

$gelen_id = $_GET['id'];

$yrm_sil = $db->prepare("DELETE FROM bg_yorum where id=?");

$yrm_control = $yrm_sil->execute(array($gelen_id));

if($yrm_control){
  echo '
      <h1
        style="
         text-align:center;
         margin-top:300px;
        "
      >👍 Yorum Silindi 🗑</h1>
      ';
      header("refresh:2;url=yrmlar-list.php");
}else{
  echo "Başarısız";
}

?>
