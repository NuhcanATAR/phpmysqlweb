<?php

 include("database/db.php");//veri tabanı bağlantısı sağlandı
 include("database/function.php");//seo optimizasyonu dosyası bağlandı

 ?>
      <?php

      $islem = @$_GET["islem"];

      switch ($islem){


        case "devam":
        $id =  @$_GET["bg_baslik"];
         $v = $db->prepare("select * from wp_blog");
          $v->execute(array($id));
         $x =  $v->fetchAll(PDO::FETCH_ASSOC);
          $xx = $v->rowCount();
          if($xx){
            foreach($x as $m){
              ?>
              <?php
              $iid = $m["id"]; // Film id'yi 1 olarak varsayıyoruz siz $id'yi GET ile çektiğiniz için 1 yerine GET kodunuzu yazabilirsiniz.
              $hit = $db->prepare("UPDATE wp_blog SET bg_hit= bg_hit +1 WHERE id=?");
              $hit->execute(array($iid));

              $sorgu = $db->prepare("SELECT * FROM wp_blog Where id=:id");
              $sorgu->execute(array("id" => $iid));
              $islem = $sorgu->fetch(PDO::FETCH_ASSOC);

              ?>

              <base href="http://localhost/newTurkuazTech/index">

              <!DOCTYPE html>
              <html>
               <head>

                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

                <meta name="description"
                content="<?php echo $m['bg_description']; ?>">
                <meta name="author" content="<?php echo $m['bg_yzr']; ?>">

                <meta property="og:site_name" content="TurkuazTech"/>
                <meta property="og:site" content="http://www.turkuaztech.com"/>
                <meta property="og:title" content=""/>
                <meta property="og:description" content="<?php echo $m['bg_description']; ?>"/>
                <meta property="og:image" content=""/>
                <meta property="og:url" content="http://www.turkuaztech.com"/>
                <meta property="og:type" content="article"/>

                <title><?php echo $m['bg_title']; ?></title>

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

                <div class="page_header_contact-box">
                  <i class="fas fa-envelope"></i>
                  <p>turkuaztech00@gmail.com</p>
                </div>

                <div class="page-area-box">
                  <div class="page_header_box_area">
                    <a style="text-decoration: none;" href="index">
                    <h1><?php echo $m["bg_baslik"]; ?></h1>
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
                    <a href="index">Anasayfa</a>
                    <a href="iletisim">İletişime Geç</a>
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
                  <div class="page-right-box-area">
                    <div style="width: 100%;height: auto;float: left;">
                    <h4>Benim Hakkımda</h4>
                    <img src="img/red-line.png">
                    </div>
                    <div style="width: 100%;height: auto;float: left;">
                      <img class="cv-img" src='img/Nuhcan.jpg'>
                    </div>
                    <div style="width: 100%;height: auto;float: left;">
                      <h5>NuhcanATAR & Web Desinger</h5>
                    </div>
                    <div style="width: 100%;height: auto;float: left;">
                      <p>
                        Merhaba Bloguma Hoşgeldin blogumda bilime ve teknolojiye dair yazılarımı barındıracağım
                        ve yapmış oldugum çalışmalarımı & projelerime yer vereceğim tekrardan bloguma hoşgeldin..
                      </p>
                    </div>
                    <div style="width: 100%;height: auto;float: left;">
                    <h4>Son Yazılarım</h4>
                    <img src="img/red-line.png">
                    </div>

                    <?php

                      $son_bg = $db->prepare("SELECT * FROM wp_blog limit 5");
                      $son_bg->execute(array());
                      $row = $son_bg->fetchAll(PDO::FETCH_ASSOC);
                      foreach($row as $m){

                    ?>
                   <div style="width: 100%;height: auto;float: left;margin-top:15px;margin-left:4%;">
                   <i style="float:left;font-size:11px;margin-top:5px;margin-right:2%;" class="fas fa-circle"></i><a href="index/<?=seo($m["bg_baslik"])?>"><?php echo $m['bg_baslik'];?></a><br><br><p style="font-size: 15px;"><?php echo $m["bg_gun"]; ?> <?php echo $m["bg_ay"]; ?> <?php echo $m["bg_yil"]; ?></p>
                   </div>
                 <?php } ?>



                    <div style="width: 100%;height: auto;float: left;">
                    <h4>En Çok Okunan Yazılar</h4>
                    <img src="img/red-line.png">
                    </div>
                    <?php

                      $pop = $db->prepare("select * from wp_blog where konu_tarih >= date_sub(curdate(),interval 7 day) order by bg_hit desc limit 5");
                      $pop->execute(array());
                      $x = $pop->fetchAll(PDO::FETCH_ASSOC);
                      foreach($x as $m){

                    ?>
                   <div style="width: 100%;height: auto;float: left;margin-top:15px;margin-left:4%;">
                   <i style="float:left;font-size:11px;margin-top:5px;margin-right:2%;" class="fas fa-square"></i><a href="index/<?=seo($m["bg_baslik"])?>"><?php echo $m['bg_baslik'];?></a><br><br><p style="font-size: 15px;"><?php echo $m["bg_gun"]; ?> <?php echo $m["bg_ay"]; ?> <?php echo $m["bg_yil"]; ?>  </p>
                   </div>
                 <?php } ?>

                  </div>
                </div>
                <div class="page-yorum-box">
                <div class="page-yorum-min-box">
                  <table border="0"><form action="" method="POST">
                  <tr><td><label>Ad Soyad : </label></td><td><input type="text" name="Ad_soyad" required=""></td></tr>
                  <tr><td><label>E Posta :</label></td><td><input type="text" name="Eposta" required=""></td></tr>
                  <tr><td><label>Yorum :</label></td><td><textarea name="yorum" rows="5" cols="35" style="resize:none;"required="" wrap="" placeholder="Lütfen Yorumunuzu Buraya Yazınız..."></textarea></td></tr>
                  <tr><td></td><td><input type="submit" value="Yayınla" name="yolla"></td></tr>
                  </table>             
                 </form>
                </div></div>

                
                
                <?php 
          

    $bg_id  = $m["id"];
    $Ad_soyad = @$_POST['Ad_soyad'];
    $Eposta  = @$_POST['Eposta'];
    $yorum = @$_POST['yorum'];
    if (isset($Ad_soyad)) {
      if (isset($Eposta)) {
        if (isset($yorum)) {
          if (isset($bg_id)) {
            $sql = "INSERT INTO bg_yorum (bg_id, Ad_soyad, Eposta, yorum) VALUES ('".$bg_id."', '".$Ad_soyad."', '".$Eposta."', '".$yorum."')";
            if (mysqli_query($conn, $sql)) {
            }
            mysqli_close($conn);
          }
        }
      }
    }
    


  
?>

<?php

$yrm_list = $db->query('SELECT * FROM bg_yorum');

$yrm_list->execute(array());

$rows = $yrm_list->fetchAll(PDO::FETCH_ASSOC);

foreach($rows as $row){

  $durum=$row["durum"];
  $bgg_id=$row["bg_id"];
  $iiid=$m["id"];
  

?>

<?php if ($durum==1 && $bgg_id==$iiid) {
  # code...
?>

<div class="page-yorum-box">
                <div class="page-yorum-min-box">
                  <table cellspacing="0" cellpadding="0" border="0">
                  <tr><td><label<p><?php echo $row['Ad_soyad']; ?></p></label></td></tr><tr><td></td><td><?php echo $row['yorum']; ?></td></tr>
                  
                  </table>             
                 
                </div></div>


<?php } }?>

               

                <div class="page-footer-box">
                  <div class="page-footer-min-box">
                  <div style="width: 100%;height: auto;float: left;">
                  <h6>En Çok Okunan Makale</h6>
                 </div>

                 <?php
                     $pop = $db->prepare("select * from wp_blog where konu_tarih >= date_sub(curdate(),interval 7 day) order by bg_hit desc limit 5");
                     $pop->execute(array());
                     $rows = $pop->fetchAll(PDO::FETCH_ASSOC);
                     foreach($rows as $row){
                 ?>
                 <div style="width: 100%;height: auto;float: left;">
                  <i class="fas fa-square"></i>
                  <a style="text-decoration: none;" href="index/<?=seo($m["bg_baslik"])?>"><p><?php echo $row["bg_baslik"]; ?></p></a>
                 </div>
               <?php } ?>
                 </div>



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

      			  <?php
      		  }

            // konu hit baslangıc
            if(!@$_COOKIE["hit".$id]){
            $hit = $db->prepare("update wp_blog set bg_hit= bg_hit +1 where id=?");
            $hit->execute(array($id));
            }
            // konu hit bitis

      	  }else{
      		  echo "boyle bir konu yok silinmis yada hiç var olmamıs olabilir";
      	  }




      	break;

      	default:

      	$v = $db->prepare("select * from wp_blog inner join katagori on katagori.katagori_id = wp_blog.bg_katalog  order by id desc");

      	$v->execute(array());
      	$x = $v->fetchAll(PDO::FETCH_ASSOC);

      ?>

      <!DOCTYPE html>
      <html>
       <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <meta name="description"
        content="Merhaba Siz Okuyuculara ve Ziyaretçilerime yazmış olduğum bilim ve teknoloji ile alaklı makale yazılarımı bu sitede yer vereceğim...">
        <meta name="author" content="NuhcanATAR">

        <meta property="og:site_name" content="TurkuazTech"/>
        <meta property="og:site" content="http://www.turkuaztech.com"/>
        <meta property="og:title" content=""/>
        <meta property="og:description" content="Merhaba Siz Okuyuculara ve Ziyaretçilerime yazmış olduğum bilim ve teknoloji ile alaklı makale yazılarımı bu sitede yer vereceğim..."/>
        <meta property="og:image" content=""/>
        <meta property="og:url" content="http://www.turkuaztech.com"/>
        <meta property="og:type" content="article"/>

        <title>Turkuaztech - Bilim ve Teknoloji</title>

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

        <div class="page_header_contact-box">
          <i class="fas fa-envelope"></i>
          <p>turkuaztech00@gmail.com</p>
        </div>

        <div class="page-area-box">
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
            <a href="index">Anasayfa</a>
            <a href="iletisim">İLETİŞİME Geç</a>
            <a href="hakkımda">Ben Kimim?</a>
            <a href="projem">Projelerim</a>
            <label for="chk" class="hide-menu-btn">
              <i class="fas fa-times"></i>
            </label>
          </ul>
           </div>
          </div>
          <div  style="background-image: url('img/img-box.jpg');" class="page_img_box-area">
            <div class="img-box-text">
              <h3>Merhaba Ben Nuhcan ATAR</h3>
              <p>Bloguma Hoşgeldiniz</p>
            </div>
          </div>
          <div class="page-left-box-area">

      <?php

      	foreach($x as $m){
      		?>
          	   <div class="page-left-blog-box">
          	     <div class="blog-box-header">
          		  <div style="width: 100%;height: auto;float: left;">
          			<h5><?php echo $m["bg_baslik"]; ?></h5>
          		   </div>
          		   <div style="width: 100%;height: auto;float: left;">
          			<i class="fas fa-user"></i>
          			<p><?php echo $m["bg_yzr"]; ?></p>
          			<i class="fas fa-calendar-alt"></i>
          			<p><?php echo $m["bg_gun"]; ?> <?php echo $m["bg_ay"]; ?> <?php echo $m["bg_yil"]; ?></p>
          			<i class="fas fa-bookmark"></i>
          			<p><?php echo $m["katagori_adi"];?></p>
                     </div>
          		 </div>
          		 <div style="background-image: url('ghost/Nedmin/admin/blog/img/<?php echo $m['bg_kapak']; ?>');" class="blog-box-body"></div>
          		 <div class="blog-box-footer">
          			 <p>
          			 <?php echo $m["bg_ozet"]; ?>
          			 </p>
          			 <a href="index/<?=seo($m["bg_baslik"])?>">Devamını Oku</a>
          		 </div>
          	   </div>
    		<?php
      	}
        ?>
      </div>
      <div class="page-right-box-area">
        <div style="width: 100%;height: auto;float: left;">
        <h4>Benim Hakkımda</h4>
        <img src="img/red-line.png">
        </div>
        <div style="width: 100%;height: auto;float: left;">
          <img class="cv-img" src="ghost/Nedmin/admin/about/img/Nuhcan.jpg">
        </div>
        <div style="width: 100%;height: auto;float: left;">
          <h5>NuhcanATAR & Web Desinger</h5>
        </div>
        <div style="width: 100%;height: auto;float: left;">
          <p>
            Merhaba Bloguma Hoşgeldin blogumda bilime ve teknolojiye dair yazılarımı barındıracağım
            ve yapmış oldugum çalışmalarımı & projelerime yer vereceğim tekrardan bloguma hoşgeldin..
          </p>
        </div>
        <div style="width: 100%;height: auto;float: left;">
        <h4>Son Yazılarım</h4>
        <img src="img/red-line.png">
        </div>

        <?php

          $son_bg = $db->prepare("SELECT * FROM wp_blog limit 5");
          $son_bg->execute(array());
          $row = $son_bg->fetchAll(PDO::FETCH_ASSOC);
          foreach($row as $m){

        ?>
       <div style="width: 100%;height: auto;float: left;margin-top:15px;margin-left:4%;">
       <i style="float:left;font-size:11px;margin-top:5px;margin-right:2%;" class="fas fa-circle"></i><a href="index/<?=seo($m["bg_baslik"])?>"><?php echo $m['bg_baslik'];?></a><br><br><p style="font-size: 15px;"><?php echo $m["bg_gun"]; ?> <?php echo $m["bg_ay"]; ?> <?php echo $m["bg_yil"]; ?></p>
       </div>
     <?php } ?>



        <div style="width: 100%;height: auto;float: left;">
        <h4>En Çok Okunan Yazılar</h4>
        <img src="img/red-line.png">
        </div>
        <?php

          $pop = $db->prepare("select * from wp_blog where konu_tarih >= date_sub(curdate(),interval 7 day) order by bg_hit desc limit 5");
          $pop->execute(array());
          $x = $pop->fetchAll(PDO::FETCH_ASSOC);
          foreach($x as $m){

        ?>
       <div style="width: 100%;height: auto;float: left;margin-top:15px;margin-left:4%;">
       <i style="float:left;font-size:11px;margin-top:5px;margin-right:2%;" class="fas fa-square"></i><a href="index/<?=seo($m["bg_baslik"])?>"><?php echo $m['bg_baslik'];?></a><br><br><p style="font-size: 15px;"><?php echo $m["bg_gun"]; ?> <?php echo $m["bg_ay"]; ?> <?php echo $m["bg_yil"]; ?>  </p>
       </div>
     <?php } ?>





      </div>
    </div>


    <div class="page-footer-box">
      <div class="page-footer-min-box">
      <div style="width: 100%;height: auto;float: left;">
      <h6>En Çok Okunan Makale</h6>
     </div>

     <?php
         $pop = $db->prepare("select * from wp_blog where konu_tarih >= date_sub(curdate(),interval 7 day) order by bg_hit desc limit 5");
         $pop->execute(array());
         $rows = $pop->fetchAll(PDO::FETCH_ASSOC);
         foreach($rows as $row){
     ?>
     <div style="width: 100%;height: auto;float: left;">
      <i class="fas fa-square"></i>
      <a style="text-decoration: none;" href="index/<?=seo($m["bg_baslik"])?>"><p><?php echo $row["bg_baslik"]; ?></p></a>
     </div>
   <?php } ?>
     </div>



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

        <?php

      	break;

      }

      ?>

 </body>
 </html>
