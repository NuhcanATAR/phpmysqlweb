<?php

 include("../../../../database/db.php");//veri tabanı bağlantısı sağlandı
include("../../../../database/function.php");//seo optimizasyonu dosyası bağlandı

  $gelen_id = $_GET['i'];

  $pr_sil = $db->prepare("DELETE FROM wp_proje where id=?");

  $pr_control = $pr_sil->execute(array($gelen_id));

  if($pr_control){
    echo '
        <h1
          style="
           text-align:center;
           margin-top:300px;
          "
        >👍 Projeniz Silindi 🗑</h1>
        ';
        header("refresh:2;url=proje.php");
  }else{
    echo "BAŞARISIZ";
  }

?>
