<?php

try{
	$db = new PDO('mysql:host=localhost;dbname=turkua10_turkuaztech.com;charset=utf8','turkua10','19781919turkuaztech-');
}catch(PDOException $eror){
	print $eror;
}


?>