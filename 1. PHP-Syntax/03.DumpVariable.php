<?php
 $var = 5;
 $type = gettype($var);
 if ($type =='integer' || $type =='double') {
 	echo var_dump($var)."<br />";
 }else{
 	echo gettype($var)."<br />";
 	
 }
 		 		
 $var = 'hello';
 $type = gettype($var);
  
 if ($type =='integer' || $type =='double') {
 	echo var_dump($var)."<br />";
 }else{
 	echo gettype($var)."<br />";
 	
 }
 
 $var = 1.234;
 $type = gettype($var);
 
 if ($type =='integer' || $type =='double') {
 	echo var_dump($var)."<br />";
 }else{
 	echo gettype($var)."<br />";
 }
 
 $var = array(1,2,3);
 $type = gettype($var);
 
 if ($type =='integer' || $type =='double') {
 	echo var_dump($var)."<br />";
 }else{
 	echo gettype($var)."<br />";
 }
 
 $var = (object)[2,34];
 $type = gettype($var);
 
 if ($type =='integer' || $type =='double') {
 	echo var_dump($var)."<br />";
 }else{
 	echo gettype($var)."<br />";
 
 }
?>