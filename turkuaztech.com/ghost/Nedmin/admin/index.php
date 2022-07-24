<?php

include("../../../database/db.php");//veri tabanı bağlantısı sağlandı
include("../../../database/function.php");//seo optimizasyonu dosyası bağlandı

 session_start();
    if ($_SESSION) {
	  header("location: admin_page.php");
    }else{

 ?>
 <!DOCTYPE html>
 <html>
  <head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Turkuaztech - Control Panel</title>

		<link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">
		<link rel="stylesheet" type="text/css" href="style/css/style.css">
 	
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

 	<?php

 	$user_name     = trim(@$_POST['user_name']);

 	$user_password = trim(@$_POST['user_password']);
    
    $sorgu = $db->prepare('SELECT * FROM user_admin WHERE user_name=? and user_password=?');
    $sorgu->execute(array($user_name, $user_password));

    $islem = $sorgu->fetch();

    if($islem){
    	$_SESSION['user_name']     = $islem['user_name'];
    	$_SESSION['user_password'] = $islem['user_password'];
    	$_SESSION['user_admin']    = true;
    	header('location:admin_page.php');
    }

 	?>

    <form action="" method="post">
 	<div class="login-box-area">
 		<div class="login-ico">
 			<i class="fas fa-user-shield"></i>
 		</div>
 		<div style="width:100%;height: auto;float: left;">
 			<h1>Hoşgeldin</h1>
 		</div>
 		<div class="login-input-icon" style="width: 100%;height: auto;float: left;">
 			<i  class="fas fa-user"></i>
 			<input type="text" required="" placeholder="Kullanıcı Adınız" name="user_name">
 		</div>
 		<div class="login-input-icon" style="width: 100%;height: auto;float: left;">
 			<br>
 			<br><br>
 			<i class="fas fa-lock"></i>
 			<input type="password" required="" placeholder="Kullanıcı Şifresi" name="user_password">
 		</div>
 		<div class="login-input-icon" style="width: 100%;height: auto;float: left;">
 			<br>
 			<br><br>
 			<button name="kayit_ol">Giriş Yap</button>
 		</div></form>
 		<div class="login-input-icon" style="width: 100%;height: auto;float: left;">
 			<br>	
 		</div>
 	</div>

 </body>
 </html>

<?php } ?>
