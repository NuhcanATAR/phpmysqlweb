<?php

 include("database/db.php");//veri tabanı bağlantısı sağlandı
 include("database/function.php");//seo optimizasyonu dosyası bağlandı

 ?>


<?php

$islem = @$_GET["islem"];

switch ($islem){


  case "devam":
  $id =  @$_GET["id"];
   $v = $db->prepare("select * from wp_proje where id=?");
    $v->execute(array($id));
   $x =  $v->fetchAll(PDO::FETCH_ASSOC);
    $xx = $v->rowCount();
    if($xx){
      foreach($x as $m){
        ?>

<!DOCTYPE html>
 <html>
  <head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<meta name="description"
		content="<?php echo $m['pr_ozet'];?>">
		<meta name="author" content="NuhcanATAR">

		<meta property="og:site_name" content="TurkuazTech"/>
		<meta property="og:site" content="http://www.turkuaztech.com"/>
		<meta property="og:title" content=""/>
		<meta property="og:description" content="<?php echo $m['pr_ozet'];?>"/>
		<meta property="og:image" content=""/>
		<meta property="og:url" content="http://www.turkuaztech.com"/>
		<meta property="og:type" content="article"/>

		<title>Turkuaztech - <?php echo $m['pr_baslik'];?></title>

		<link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">
		<link rel="stylesheet" type="text/css" href="style/css/style.css">
		<link rel="stylesheet" type="text/css" href="style/css/proje.css">

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
  <div  class="page-left-box-area">

        <?php echo $m["editor1"];?>

  </div>

   </div>




 </body>
 </html>







<?php
      }
}else{
  echo "boyle bir konu yok silinmis yada hiç var olmamıs olabilir";
}

break;

default:

$v = $db->prepare("select * from wp_proje order by id desc");

$v->execute(array());
$x = $v->fetchAll(PDO::FETCH_ASSOC);

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

		<title>Turkuaztech - Projelerim</title>

		<link rel="icon" href="img/favicon.png" type="image/png" sizes="16x16">
		<link rel="stylesheet" type="text/css" href="style/css/style.css">
		<link rel="stylesheet" type="text/css" href="style/css/proje.css">

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

  <?php foreach($x as $m){ ?>
	<div class="proje-box-area">
	<div class="proje-box-left" style="background-image: url('admin/proje/img/<?php echo $m['pr_kapak'];?>');"></div>
	<div class="proje-box-right">
	<h6><?php echo $m['pr_baslik'];?></h6>
	<div class="proje-text">
<?php echo $m['pr_ozet'];?>
	</div>
	<a href="projem?islem=devam&id=<?php echo $m['id'];?>">
	<div class="proje-btns">
	<button>Proje Detayları</button>
	</div>
	</a>
	</div>
	</div>
  <div style="width:100%;height:auto;float:left;"></div>
  <?php } ?>

</div>




 </body>
 </html>






<?php

break;

}

      ?>
