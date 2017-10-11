<?php
class tuker_angka {
  
	public $a=1;
	public $b=3;	
  
	public function mySwap($a,$b) {	
			list($a,$b) = array($b,$a);
			return " \$a = $a <br/>\n
					 \$b = $b <br/>\n";
		}
}   

class tuker_angka2 {
  
	public $a=5;
	public $b=9;	
  
	public function mySwap2($a,$b) {	

			list($a,$b) = array($b,$a);
			return " \$a = $a <br/>\n
					 \$b = $b <br/>\n";
		}
} 


$cetak_tuker_angka= new tuker_angka();
$cetak_tuker_angka2= new tuker_angka2();

//echo "\$a = $cetak_tuker_angka->a <br/>\n";
//echo "\$b = $cetak_tuker_angka->b <br/>\n";

//echo $cetak_tuker_angka->mySwap(1,3);


//echo "\$a = $cetak_tuker_angka2->a <br/>\n";
//echo "\$b = $cetak_tuker_angka2->b <br/>\n"; 

//echo $cetak_tuker_angka2->mySwap2(5,9);


?>

