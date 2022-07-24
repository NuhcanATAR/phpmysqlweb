<?php

	session_start();
	session_destroy();
	header("refresh:3;url=index.php");

?>

<style type="text/css">
	
body{
	margin: 0px;
	padding: 0px;
}
section {
width: 408px;
margin: 80px auto;
}

body {
background: #292d33;
}

@keyframes gradientMove {
0% {
background-position: 0px 0px;
}

100% {
background-position: 100px 0px;
}
}

@keyframes reload {
0% {
width: 20px;
}

95% {
width: 400px;
}

100% {
width: 20px;
}
}

.progress-bar {
width: 400px;
background: #1a1e22;
padding: 3px;
border-radius: 50px;
box-shadow: inset 0px 1px 1px 0px black, 0px 1px 1px 0px #36393F;
}

#anim {
width: 400px;
height: 25px;
background: #bedc78;
background-size: 35px 25px;
border-radius: 50px;
box-shadow: inset 0px 1px 3px 0px #F2F2F2;
animation:reload 3s 2 linear;
}

</style>

<br><br>
<br><br><br>
<br><br><br><br>
<br><br><br>
<section>
<div class="progress-bar">
  <div class="polyfill" id="anim"></div>
</div>
</section>
<ul id="output"></ul>

<script type="text/javascript">

</script>