<?php

	function dateDifference($date_1 , $date_2 , $differenceFormat = '%a' )
	{
		$datetime1 = date_create($date_1);
		$datetime2 = date_create($date_2);
	
		$interval = date_diff($datetime1, $datetime2);
	
		return $interval->format($differenceFormat);
	
	}
	/*
	 Hours until new year : 3395
	 Minutes until new year : 203693
	 Seconds until new year : 1222191
	 Days:Hours:Minutes:Seconds 142:10:53:51
	 * */
	$day = date("d");
	$month = date("m");
	$year = date("Y");
	$h  = date("H"); 
	$m  = date("i");
	$s  = date("s");
	
	$datestr = $year.'-'.$month.'-'.$day.' '.$h.':'.$m.':'.$s;
	//$newdate = new DateTime($datestr);
	//echo $datestr ;
	$calcD = dateDifference($datestr, '2014-12-31 23:59:00','%a');
	$calcH = dateDifference($datestr, '2014-12-31 23:59:00','%a')*24;
	$calcM = dateDifference($datestr, '2014-12-31 23:59:00','%a')*24*60;
	$calcS = dateDifference($datestr, '2014-12-31 23:59:00','%a')*24*3600;
	
	$HH = dateDifference($datestr, '2014-12-31 23:59:00','%h');
	$MM = dateDifference($datestr, '2014-12-31 23:59:00','%i');
	$SS = dateDifference($datestr, '2014-12-31 23:59:00','%s');
	
	echo ('Hours until new year : '.$calcH)."<br>";
	echo 'Hours until new year : '.$calcM."<br>";
	echo 'Hours until new year : '.$calcS."<br>";
	echo 'Days:Hours:Minutes:Seconds : '.$calcD.':'.$HH.':'.$MM.':'.$SS."<br>";
	
?>