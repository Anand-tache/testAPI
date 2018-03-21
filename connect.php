<?php
	
	$conn = mysql_connect("localhost","root","");
	if (!$conn) {
    die("Connection failed");
	}//else {echo "connected" ;}

	$db = mysql_select_db("tache_task",$conn);
	if (!$db) {
    die("Selecting database failed ");
	}
	//else {echo "selected";} 
?>