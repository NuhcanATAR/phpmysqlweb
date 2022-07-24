<?php

 include("database/db.php");//veri tabanı bağlantısı sağlandı
 include("database/function.php");//seo optimizasyonu dosyası bağlandı

 ?>
 <!DOCTYPE html>
 <html>
  <head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


		<meta name="author" content="NuhcanATAR">

		<meta property="og:site_name" content="TurkuazTech"/>
		<meta property="og:site" content="http://www.turkuaztech.com"/>
		<meta property="og:title" content=""/>

		<meta property="og:image" content=""/>
		<meta property="og:url" content="http://www.turkuaztech.com"/>
		<meta property="og:type" content="article"/>

		<title>Turkuaztech - İletişime Geç</title>

		<link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">
		<link rel="stylesheet" type="text/css" href="style/css/style.css">
		<link rel="stylesheet" type="text/css" href="style/css/iletisim.css">

        <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>

         <!--
fontawesom
-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/brands.min.css" integrity="sha512-AMDXrE+qaoUHsd0DXQJr5dL4m5xmpkGLxXZQik2TvR2VCVKT/XRPQ4e/LTnwl84mCv+eFm92UG6ErWDtGM/Q5Q==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/fontawesome.min.css" integrity="sha512-8jdwayz5n8F2cnW26l9vpV6+yGOcRAqz6HTu+DQ3FtVIAts2gTdlFZOGpYhvBMXkWEgxPN3Y22UWyZXuDowNLA==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/regular.min.css" integrity="sha512-qgtcTTDJDk6Fs9eNeN1tnuQwYjhnrJ8wdTVxJpUTkeafKKP6vprqRx5Sj/rB7Q57hoYDbZdtHR4krNZ/11zONg==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/solid.min.css" integrity="sha512-QN7X/bUbbeel9bbq6JVNJXk1Zowt+n+QPN+DjhEmTa4TdL1YPCsCey5JrvfRW8xp28LDYgGG/waNVdrhwMQmVQ==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/svg-with-js.min.css" integrity="sha512-gX1L9ovb6aHWz/bJYE364vKdGBDOeZLMt168kVRpRdo2I2TpveBJpbDzHMZQWy8liTTG7Qm9Onl1Ji92Eo3x7Q==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/v4-shims.min.css" integrity="sha512-njWvXjJPMYfvYHb2DAnEL0MS5KEmoIeZVdpK7tpxiApoL3ZoUzHSvkoSFrbASdTuIHnEVG+Ko+ES/DXKygBH4g==" crossorigin="anonymous" />


  </head>
 <body>

 	<div class="page_header_contact-box">
 		<i class="fas fa-envelope"></i>
 		<p>turkuaztech00@gmail.com</p>
 	</div>

   <div style="height: 800px;" class="page-area-box">
   	<div class="page_header_box_area">
   		<a style="text-decoration: none;" href="index">
   		<h1>TurkuazTech</h1>
     	</a>
   		<h2>Bilim & Teknoloji</h2>
   	</div>
   	<div class="page_menu_box">
      <div class="header">
	    <input type="checkbox" id="chk">
	    <label for="chk" class="show-menu-btn">
	      <i style="color: black;" class="fas fa-ellipsis-h"></i>
	    </label>
	    <ul class="menu">
	      <a href="iletisim">İLETİŞİME Geç</a>
	      <a href="hakkımda">Ben Kimim?</a>
	      <a href="projem">Projelerim</a>
	      <label for="chk" class="hide-menu-btn">
	        <i class="fas fa-times"></i>
	      </label>
	    </ul>
      </div>
   	</div>
    <form action="" method="post">
   	<div class="iletisim-input-box">
   		<input type="text" required="" placeholder="Adınızı Giriniz" name="iad">
   	</div>
   		<div class="iletisim-input-box">
   		<input type="text" required="" placeholder="E-posta Adresiniz" name="imail">
   	</div>
   	<div class="iletisim-input-box">
   		<textarea required="" placeholder="Mesajınızı Giriniz" name="imsj"></textarea>
   	</div>
   	<div class="iletisim-input-box">
   		<button>Mesajınızı Gönderiniz</button>
   	</div>
  </form>

  <?php

   if($_POST){

    $iad   = $_POST["iad"];
    $imail = $_POST["imail"];
    $imsj  = $_POST["imsj"];

    $msj_post = $db->prepare("INSERT into wp_message set

     name =:iad,
     mail =:imail,
     msj  =:imsj

    ");

    $msj_control = $msj_post->execute(array(

     ":iad"   => $iad,
     ":imail" => $imail,
     ":imsj"  => $imsj

    ));

    if($msj_control){
      echo '
      <script type="text/javascript">alert("Mesajınız Başarı İle Gönderildi");</script>
      ';
    }else{
      echo '
    	<script type="text/javascript">alert("Mesajınız Gönderilemedi");</script>
    	';
    }


   }

  ?>



   </div>

   <div
    style="
      width: 100%;
      height: 270px;
      float: left;
      background-color: black;
      margin: 0px;
    "
   >



      <div class="page-footer-min-box">
      <div style="width: 100%;height: auto;float: left;">
      <h6>İletişim</h6>
     </div>
     <?php

     $url_list = $db->prepare("SELECT * FROM wp_contact_url");
     $url_list->execute(array());
     $rows = $url_list->fetchAll(PDO::FETCH_ASSOC);
     foreach($rows as $m){

     ?>
      <div style="width: 100%;height: auto;float: left;">
       <i style="font-size: 19px;margin-top: -2px;" class="fab fa-instagram"></i>
       <a style="text-decoration: none;" href="<?php echo $m['url_instagram'];?>"><p>turkuaz_tech</p></a>
     </div>
      <div style="width: 100%;height: auto;float: left;">
       <i style="font-size: 19px;margin-top: -2px;" class="fab fa-facebook-f"></i>
       <a style="text-decoration: none;" href="<?php echo $m['url_facebook'];?>"><p>TurkuazTech</p></a>
     </div>
      <div style="width: 100%;height: auto;float: left;">
       <i style="font-size: 19px;margin-top: -2px;" class="fab fa-twitter"></i>
       <a style="text-decoration: none;" href="<?php echo $m['url_twitter'];?>"><p>@turkuaztech</p></a>
     </div>
      <div style="width: 100%;height: auto;float: left;">
       <i style="font-size: 19px;margin-top: -2px;" class="far fa-envelope"></i>
       <p><?php echo $m['url_mail'];?></p>
     </div>
   <?php } ?>
     </div>

     <div class="page-footer-min-box">
     <div style="width: 100%;height: auto;float: left;">
     <h6>Menü</h6>
    </div>

     <div style="width: 100%;height: auto;float: left;">
      <a style="text-decoration: none;" href="index"><p>Anasayfa</p></a>
    </div>
    <div style="width: 100%;height: auto;float: left;">
     <a style="text-decoration: none;" href="iletisim"><p>İletişime Geç</p></a>
    </div>
     <div style="width: 100%;height: auto;float: left;">
      <a style="text-decoration: none;" href="hakkımda"><p>Ben Kimim?</p></a>
    </div>
    <div style="width: 100%;height: auto;float: left;">
     <a style="text-decoration: none;" href="projem"><p>Projelerim</p></a>
    </div>


    </div>

   </div>







 </body>
 </html>
