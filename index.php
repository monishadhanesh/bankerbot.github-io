<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome to banker bot</title>
		<link rel="stylesheet" href="style1.css">
</head>
<body>
<div class="header">
		<img src="bank.png" width=100%">
	</div>
	
<a href="bank.php?logout=true" class="main" style="color:white;font-size:25px;text-decoration: none;border:2px solid white;border-width: 5px 5px 4px 5px;float:right;margin-right:10%;margin-top:10px;padding:5px">logout</a><br>
<div class="cont">
	<a href="sample.php">
	<div class="card1">
<img src="botter.png" width="100px" height="100px" class=".img1">
</div></a><br><br>
<a href ="findbank.php">
<div class="card2">
<img src="address.png" width="100px" height="100px" class="img2" >
</div>
</a>
</div>

</body>
</html>
	