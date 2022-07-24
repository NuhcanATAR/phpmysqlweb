<?php

include("../../../../database/db.php");//veri tabanı bağlantısı sağlandı
include("../../../../database/function.php");//seo optimizasyonu dosyası bağlandı
session_start();
if ($_SESSION["user_admin"]) {//admin sessionu mevcut ise
?>

<?php

 ?>
 <!DOCTYPE html>
 <html>
  <head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Turkuaztech - Control Panel</title>

		<link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">
		<link rel="stylesheet" type="text/css" href="../style/css/style.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
 	
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

<div class="admin-page-left-menu">
	<div style="width: 100%;height: auto;float: left;">
		<img src="../about/img/Nuhcan.jpg">
	</div>
	<div style="width: 100%;height: auto;float: left;">
		<a href="../admin_page.php"><h1>Admin</h1></a>
	</div>
	<div style="margin-top:15px;width: 100%;height: auto;float: left;">
		<a href="../blog/blog-ekl.php">
		<i class="fas fa-plus"></i>
		<p>Makale Ekle</p>
	    </a>
	</div>
	<div style="width: 100%;height: auto;float: left;margin-top: 8px;">
		<a href="../about/about.php">
		<i class="far fa-address-card"></i>
		<p>Hakkımda</p>
	    </a>
	</div>
	<div style="width: 100%;height: auto;float: left;margin-top: 8px;">
		<a href="../proje/proje.php">
		<i class="fas fa-project-diagram"></i>
		<p>Proje</p>
	    </a>
	</div>
	<div style="width: 100%;height: auto;float: left;margin-top: 8px;">
		<a href="../mesajlar/msj-list.php">
		<i class="far fa-envelope"></i>
		<p>Son Mesajlar</p>
	    </a>
	</div>
	<div style="width: 100%;height: auto;float: left;margin-top: 8px;">
		<a href="../comments/yrmlar-list.php">
		<i class="fas fa-comment"></i>
		<p>Yorumlar</p>
	    </a>
	</div>
	<div style="width: 100%;height: auto;float: left;margin-top: 8px;">
		<a href="../contact/connect-list.php">
		<i class="fas fa-link"></i>
		<p>İletişim Bağlantıları</p>
	    </a>
	</div>
</div>


<form action="about_kyt_ony.php" method="post">
 <div class="about-box-area">
   <div style="width: 100%;height: auto;float: left;">
   	<div class="file_text">
	   Kapak Resmi Yükle
	   <input  type="file" name="img" />
	</div>
   </div>
   <div style="width: 100%;height: auto;float: left;margin-top: 15px;">
     <textarea name="editor1"></textarea>
	 <script>
	   CKEDITOR.replace( 'editor1' );
	 </script>
   </div>
   <div class="about-box-btns">
	  <button>Gönder</button>
	</div>
 </div>
</form>

<div class="admin-page-right-menu">
	<a href="admin_quit.php">
	<div class="exit-box-icon">
		<i class="fas fa-sign-out-alt"></i>
	</div>
    </a>
</div>

 </body>
 </html>

<?php
	
}else{//session yoksa
	echo 'giriş yapman gerekiyor';
	header("location:index.php");
}

?>

