<?php

include("../../../../database/db.php");//veri tabanı bağlantısı sağlandı
include("../../../../database/function.php");//seo optimizasyonu dosyası bağlandı

$gelen_id = $_GET['i'];

$sil = $db->prepare("DELETE FROM wp_blog where id=?");

$m = $sil->execute(array($gelen_id));

if($m){
	echo '
    	<h1
        style="         
         text-align:center;
         margin-top:300px;    
        "
    	>👍 Makaleniz Silindi 🗑</h1>
    	';
    	header("refresh:2;url=blog-ekl.php");
}else{
	echo "Başarısız";
}

?>

