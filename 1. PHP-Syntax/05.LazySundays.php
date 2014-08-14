<?php
	$month = date("m");  
	$year = date("Y");
 	for ($i = 1; $i < 32; $i++) {
 		$datestr = $year.'-'.$month.'-'.$i;
 		$newdate = new DateTime($datestr);
 		$sunday = date_format($newdate, "l");
 		if ($sunday == 'Sunday') {
 			echo date_format($newdate, 'jS F, Y')."<br>"; 
 		}
 	}
?>