<?php
	$arr = ['Gosho','0882-321-423','24','Hadji Dimitar'];
	$arrHeaders = ['Name','Phone number','Age','Address'];
	
	echo ("<head>
			<title>Information table</title>
			<style>
				body{
					font-family: Consolas;
				    margin: 50px ;
				    padding: 0;
				}
				table {
						border-collapse: collapse;
						width: 250px;}
				table,td{
						border: 1px solid;
						padding: 5px;}
				td:nth-child(1){font-weight:  bold;text-align: left;background-color: darkorange; font-size: 12px;}
				td:nth-child(2){text-align: right; font-size: 12px;}
			 </style>
			</head>");
	echo ("<table><tbody>");
	for ($i = 0; $i < sizeof($arr); $i++) {
		echo("<tr><td>$arrHeaders[$i]</td><td>$arr[$i]</td></tr>");
	}		
	echo "</tbody></table><br /><br />";
	
	$arr = ['Pesho','0884-888-888','67','Suhata Reka'];
	echo ("<table><tbody>");
	for ($i = 0; $i < sizeof($arr); $i++) {
		echo("<tr><td>$arrHeaders[$i]</td><td>$arr[$i]</td></tr>");
	}
	echo "</tbody></table>"
	
?>