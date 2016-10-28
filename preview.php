<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="wrapper">
	<div id="menu">
		<a href="index.html"><div class="menuitem">Home</div></a>
		<a href="pricing.php"><div class="menuitem">Pricing</div></a>
		<a href="trial.html"><div class="menuitem">Trial</div></a>
		<a href="research.html"><div class="menuitem">Research</div></a>
		<a href="about.html"><div class="menuitem">About</div></a>
		
	</div>
	<div id="break">&nbsp;</div>
	<div class="textbox">
		<img id="logo" src="logo.png">
		<h1>
<?php
$folder = $_POST["folder"];
echo $folder;
echo "</h1><p> All lessons only 6 dollars!  Area of a Rectangle is a free lesson if you want to try Singin & Signing before purchasing. <img src='PayPalButton1.png' height='37' width='126'>";
$trimmed= rtrim($folder);

$somePath = "./lessons/$trimmed/$trimmed Preview Page/";

$pictures = glob($somePath.'*.PNG');

echo "</p>";
foreach($pictures as $x){
	
echo "<img src='$x' width='40%'>";
}
?>
	</div>
	<div id="foot">
	&#169; Singin'   Signin' LLC, All Rights Reserved
	</div>
</div>.
</body>
</html>
