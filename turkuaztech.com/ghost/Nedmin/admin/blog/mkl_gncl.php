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


<?php

$id = $_GET['id'];

$sorgu = $db->prepare("SELECT * FROM wp_blog WHERE id =:id");

$sorgu ->execute(array(":id" => $id));

$row = $sorgu ->fetch(PDO::FETCH_ASSOC);

?>

<form action="" method="post">
<div class="blog-ekl-box">
  <div style="width: 100%;height: auto;float: left;">
    <input type="text" required="" value="<?php echo $row['bg_title']; ?>" placeholder="Makale Title" name="bg_title">
  </div>
  <div style="width: 100%;height: auto;float: left;">
    <input type="text" required="" value="<?php echo $row['bg_description']; ?>" placeholder="Makale Tanımlaması" name="bg_description">
  </div>
	<div style="width: 100%;height: auto;float: left;">
		<div class="file_text">
		Kapak Resmi Yükle
		<input type="file" value="<?php echo $row['bg_kapak']; ?>" name="bg_kapak" />
		</div>
	</div>
	<div style="width: 100%;height: auto;float: left;">
		<input type="text" required="" placeholder="Başlık Giriniz" value="<?php echo $row['bg_baslik']; ?>" name="bg_baslik">
	</div>
	<div style="width: 100%;height: auto;float: left;">
		<input type="text" required="" value="<?php echo $row['bg_ozet']; ?>" placeholder="Özet Giriniz" name="bg_ozet">
	</div>
	<div style="width: 100%;height: auto;float: left;">
		<input type="number" required="" placeholder="Gün" value="<?php echo $row['bg_gun']; ?>" name="bg_gun">
		<select required="" value="<?php echo $row['bg_ay']; ?>" name="bg_ay">
			<option>Ay</option>
			  <option value="Ocak">Ocak</option>
			    <option value="Şubat">Şubat</option>
			      <option value="Mart">Mart</option>
			         <option value="Nisan">Nisan</option>
			           <option value="Mayıs">Mayıs</option>
			             <option value="Haziran">Haziran</option>
			           <option value="Temmuz">Temmuz</option>
			         <option value="Ağustos">Ağustos</option>
			      <option value="Eylül">Eylül</option>
			   <option value="Ekim">Ekim</option>
			  <option value="Kasım">Kasım</option>
			<option value="Aralık">Aralık</option>
		</select>
		<input style="margin-left: 2%;width: 100px;font-size: 17px;" type="number" value="<?php echo $row['bg_yil']; ?>" required="" placeholder="Yıl" name="bg_yil">
	    <input style="width: 200px;" type="text" required="" value="<?php echo $row['bg_yzr']; ?>" placeholder="Yazar İsmi" name="bg_yzr">
	</div>
	<div style="width: 100%;height: auto;float: left;margin-top: 15px;">
	<textarea name="editor1"></textarea>
	

	</div>
	<input style="width: 200px;" type="text" required="" value="<?php echo $row['bg_ktlg']; ?>" placeholder="Makale Katoloğu" name="bg_ktlg">
	<div style="width: 50%;height: auto;float: left;margin-top: 15px;">
		<button>Makaleyi Ekle</button>
	</div>
</div>
</form>






<?php

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

    $mkl_ekl = $db->prepare("UPDATE wp_blog set

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

    	where id=:id");

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
          ":bg_ktlg"   => $bg_ktlg,

          ":id"        => $id

    ));

    if($mkl_array){
    	echo '
    	<script type="text/javascript">alert("Makale Başarıyla Güncellendi:)");</script>
    	';
    }else{
    	echo "Başarısız";
    }

}

?>

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
