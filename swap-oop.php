<html>
<head>
<title>Tes Web Developer PHP</title>
<link rel="stylesheet" href="bootstrap.min.css" type="text/css" media="screen" />
<link rel="stylesheet" href="style.css" type="text/css" media="screen" />

</head>
<body>

<br/><br/>
<?php
require_once('myclass.php');

?>
<div class="container">
<h2>Tes Web Developer PHP OOP :: Chairul Rizky</h2>
	<div class="row">
	
		<div class="col-md-2">
			<div class="boxblue">
			<p><?php echo "\$a = $cetak_tuker_angka->a <br/>\n";?></p>
			<p><?php echo "\$b = $cetak_tuker_angka->b <br/>\n";?></p>
			</div>
		</div>
		<div class="col-md-2">
			<div class="box-noborder">
			<img src="arrow.jpg" class="img-responsive"/>
			</div>
		</div>
				
		<div class="col-md-2">
			<div class="boxblue">
				<?php echo $cetak_tuker_angka->mySwap(1,3);?>
			</div>
		</div>
		
	</div> <!-- row 1 -->

	<div class="row">
	
		<div class="col-md-2">
			<div class="boxblue">
			<p><?php echo "\$a = $cetak_tuker_angka2->a <br/>\n";?></p>
			<p><?php echo "\$b = $cetak_tuker_angka2->b <br/>\n";?></p>
			</div>
		</div>
		<div class="col-md-2">
			<div class="box-noborder">
			<img src="arrow.jpg" class="img-responsive"/>
			</div>
		</div>		
		
		<div class="col-md-2">
			<div class="boxblue">
				<?php echo $cetak_tuker_angka2->mySwap2(5,9);?>
			</div>
		</div>
		
	</div> <!-- row 2 -->	
	
</div> <!-- container -->


</body>

</html>