<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
		<div style="width:100%; overflow:auto;">
		<div style="width:40%; padding:10px; float:left;">
	    <p>A revolutionary math program designed for interactive classrooms! This program teaches complex math formulas to childhood songs and chants, using accompanying signs and gestures than easily adapts to any curriculum.</p>

			<div id="redbox">
			<ul>
				<li>Designed to address all learning styles </li>
				<li>Drastically reduces teacher prep time </li>
				<li>Proven to raise standardized test scores </li>
				<li>Maximizes student participation</li>
				<li>Award winning!</li>
			</ul>
			</div>
			</div>
			<div style="width:50%; padding:10px; float:right;">
			<img src="./lessons/Area of a Rectangle/Area of a Rectangle Preview Page/Area of a Rectangle 1.PNG" width="202" height="144" style="display:inline;">
			<img src="./lessons/Area of a Rectangle/Area of a Rectangle Preview Page/Area of a Rectangle 2.PNG" width="202" height="144" style="display:inline;">
			<img src="./lessons/Area of a Rectangle/Area of a Rectangle Preview Page/Area of a Rectangle 3.PNG" width="202" height="144" style="display:inline;">
			<img src="./lessons/Area of a Rectangle/Area of a Rectangle Preview Page/Area of a Rectangle 4.PNG" width="202" height="144" style="display:inline;">
			</div>
		</div>
<!-- lessons start here -->
		<div id="col4">
		<div id="lesson" style="background-color:yellow;"><center>Primary Package<br><font size="2">grades 1-3</font></center></div>
<?php 
$directories = file('primary.txt');
$c =0;
foreach($directories as $y)
	{
		echo "<div id='lesson'>";
		echo "<form id='$y' action='preview.php' method='POST'>";
		echo "<input type='hidden' name='folder' value='$y'>";
		echo "<button> $y </button>";
		echo "</form>";
		echo "</div>";
		$c++;
	}
$price = ($c * 6)*.8;
?>
		<div id="lesson" style="background-color:yellow;">Buy all <?php echo $c; ?> lessons and save 10%!</div>
		</div> <!-- col4 -->
		
		<div id="col4">
		<div id="lesson" style="background-color:yellow;"><center>Elementary Package<br><font size="2">grades 3-5</font></center></div>
<?php 
$directories = file('elementary.txt');
$c = 0; 
foreach($directories as $y)
	{
		
		echo  "<div id='lesson'>";
		echo "<form id='$y' action='preview.php' method='POST'>";
		echo "<input type='hidden' name='folder' value='$y'>";
		echo "<button> $y </button>";
		echo "</form>";
		echo "</div>";
		$c++;
	}
$price = ($c * 6)*.8;
?>
		<div id="lesson" style="background-color:yellow;">10% off, all <?php echo $c; ?> lessons is only $<?php echo $price; ?></div>
		</div> <!-- col4 -->
		
		<div id="col4">
		<div id="lesson" style="background-color:yellow;"><center>Intermediate Package<br><font size="2">grades 5-7</font></center></div>
<?php 
$directories = file('intermediate.txt');
$c = 0; 
foreach($directories as $y)
	{
		echo  "<div id='lesson'>";
		echo "<form id='$y' action='preview.php' method='POST'>";
		echo "<input type='hidden' name='folder' value='$y'>";
		echo "<button> $y </button>";
		echo "</form>";
		echo "</div>";
		$c++;
	}
$price = ($c * 6)*.8;

//count all lessons
	$all = glob('./lessons/*' , GLOB_ONLYDIR);
	$total = count($all);
	$pricetotal = ($total * 6)*.8;
?>
		<div id="lesson" style="background-color:yellow;">10% off, all <?php echo $c; ?> lessons is only $<?php echo $price; ?></div>
		</div> <!-- col4 -->
		<div id="col4" style="border-color:white;">
			<p><center>
		Buy all <?php echo $total; ?> lessons for $<?php echo $pricetotal; ?>
		<br><br>
			Each lesson available for <strong>individual purchase only: $6</strong>
		<br><br>
			<strong>Each lesson includes:</strong>
				</center>
			<br>
			color-coded, two-column notes with embedded video and sign clips for a fully kinesthetic learning experience!<br>Reproducible printouts for flashcards, Flip & Fold manipulatives, and lyric pages! <br>
			<br><br>Download a free lesson here<br>
			<a href="trial.html">Area of a Rectangle</a>
			</p>
		</div>
	<div id="break">&nbsp;</div>
	<div id="break">&nbsp;</div>
	<div id="break">&nbsp;</div>
	<div id="break">&nbsp;</div>

	</div>  <!-- textbox -->
	<div id="foot">
	&#169; Singin'   Signin' LLC, All Rights Reserved
	</div>
</div>
</body>
</html>
