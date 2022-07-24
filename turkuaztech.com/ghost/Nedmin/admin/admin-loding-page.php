<?php

require_once '../../../database/db.php';
session_start();
ob_start();

?>

<?php

//giriş yapma

if(isset($_POST['kayit_ol'])){

  $user_name = $_POST['uad'];

  $user_password = $_POST['upass'];

  $kullanicisor = $db->prepare("SELECT * FROM user_admin WHERE user user_name =:user_name and user_password =:user_password");

  $kullanicisor->execute([
    
    'user_name' => $user_name,
    'user_password' => $user_password

  ]);
  echo $say = $kullanicisor->rowCount();

  if($say==1){
      $_SESSION['useruser_name']=$user_name;
      header('location:admin_page.php?durum=basarılıgiris');
      exit;
  }else{
      header('location:index.php?durum=basarısızgiris');
      exit;
  }


}

?>
