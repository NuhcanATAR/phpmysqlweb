<?php

include("../../../../database/db.php");//veri tabanı bağlantısı sağlandı
include("../../../../database/function.php");//seo optimizasyonu dosyası bağlandı

$gelen_id = $_GET['id'];

$msj_sil = $db->prepare("DELETE FROM wp_message where id=?");

$msj_control = $msj_sil->execute(array($gelen_id));

if($msj_control){
  echo '
      <h1
        style="
         text-align:center;
         margin-top:300px;
        "
      >👍 Mesajınız Silindi 🗑</h1>
      ';
      header("refresh:2;url=msj-list.php");
}else{
  echo "Başarısız";
}

?>
