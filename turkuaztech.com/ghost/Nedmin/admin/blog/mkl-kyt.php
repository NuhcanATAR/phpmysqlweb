<?php

include("../../../../database/db.php");//veri tabanı bağlantısı sağlandı
include("../../../../database/function.php");//seo optimizasyonu dosyası bağlandı

if($_POST){

		$bg_title  = $_POST["bg_title"];
		$bg_description = $_POST["bg_description"];
	  $bg_kapak  = $_POST['bg_kapak'];
    $bg_baslik = $_POST['bg_baslik'];
    $bg_ozet   = $_POST['bg_ozet'];
    $bg_gun    = $_POST['bg_gun'];
    $bg_ay     = $_POST['bg_ay'];
    $bg_yil    = $_POST['bg_yil'];
    $bg_yzr    = $_POST['bg_yzr'];
    $editor1   = $_POST['editor1'];
    $bg_ktlg   = $_POST['bg_ktlg'];

    $mkl_ekl = $db->prepare("INSERT into wp_blog set

					bg_title =:bg_title,
					bg_description =:bg_description,
          bg_kapak =:bg_kapak,
          bg_baslik =:bg_baslik,
          bg_ozet   =:bg_ozet,
          bg_gun    =:bg_gun,
          bg_ay     =:bg_ay,
          bg_yil    =:bg_yil,
          bg_yzr    =:bg_yzr,
          editor1   =:editor1,
          bg_ktlg   =:bg_ktlg

    	");

    $mkl_array = $mkl_ekl->execute(array(
          ":bg_title"  => $bg_title,
					":bg_description" => $bg_description,
          ":bg_kapak"  => $bg_kapak,
          ":bg_baslik" => $bg_baslik,
          ":bg_ozet"   => $bg_ozet,
          ":bg_gun"    => $bg_gun,
          ":bg_ay"     => $bg_ay,
          ":bg_yil"    => $bg_yil,
          ":bg_yzr"    => $bg_yzr,
          ":editor1"   => $editor1,
          ":bg_ktlg"   => $bg_ktlg

    ));

    if($mkl_array){
    	echo '
    	<h1
        style="
         text-align:center;
         margin-top:300px;
        "
    	>👍 Makaleniz Başarıyla İle Eklendi 🤗</h1>
    	';
    	header("refresh:2;url=mkl-ekl.php");
    }else{
    	echo "Başarısız";
    }

}


?>
