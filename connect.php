<?php
	$a = new mysqli("localhost","root","");
	//$a=  mysql_connect("localhost","root","");
	$b= $a->select_db("ohms");
	//$b = mysql_select_db("ohms");
	if($a && $b){
	echo("successfully");
	}else{
		echo("failed");
	}
?>	
