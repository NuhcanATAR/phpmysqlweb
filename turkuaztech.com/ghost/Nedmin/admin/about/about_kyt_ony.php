<?php
include("../../../../database/db.php");//veri tabanı bağlantısı sağlandı
include("../../../../database/function.php");//seo optimizasyonu dosyası bağlandı

  if($_POST){

        $img     = $_POST['img'];
        $editor1 = $_POST['editor1'];
        
        $kyt = $db->prepare("INSERT into wp_about set
              
              img     =:img,
              editor1 =:editor1

        	");

        $control = $kyt->execute(array(
             
             ":img"     => $img,
             ":editor1" => $editor1
   
        ));

        if($control){
        	echo '
    	<h1
        style="         
         text-align:center;
         margin-top:300px;    
        "
    	>👍 Biyografi Sitenize Eklendi 🤗</h1>
    	';
    	header("refresh:2;url=about.php");
        }else{
        	echo "HATA";
        }
  }


?>