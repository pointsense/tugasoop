<html>
<head>
<title>Tes Web Developer PHP</title>
<link rel="stylesheet" href="bootstrap.min.css" type="text/css" media="screen" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />

</head>
<body>

<br/><br/>
<?php
require_once('func.php');
//definisi variable pertama
$a=1;$b=3;
?>
<div class="container">
<h2>Tes Web Developer PHP :: Chairul Rizky</h2>
	<div class="row">
	
		<div class="col-md-2">
			<div class="boxblue">
			<p><?php echo ' $a = '.$a.' ';?></p>
			<p><?php echo ' $b = '.$b.' ';?></p>
			</div>
		</div>
		<div class="col-md-2">
			<div class="box-noborder">
			<img src="arrow.jpg" class="img-responsive"/>
			</div>
		</div>
				
		<div class="col-md-2">
			<div class="boxblue">
				<?php echo mySwap(1,3) ;?>
			</div>
		</div>
		
	</div> <!-- row 1 -->
<?php
//definisi variable kedua
$a=5;$b=9;
?>
	<div class="row">
	
		<div class="col-md-2">
			<div class="boxblue">
			<p><?php echo ' $a = '.$a.' ';?></p>
			<p><?php echo ' $b = '.$b.' ';?></p>
			</div>
		</div>
		<div class="col-md-2">
			<div class="box-noborder">
			<img src="arrow.jpg" class="img-responsive"/>
			</div>
		</div>		
		
		<div class="col-md-2">
			<div class="boxblue">
				<?php echo mySwap(5,9) ;?>
			</div>
		</div>
		
	</div> <!-- row 2 -->	
	
</div> <!-- container -->


</body>

</html>