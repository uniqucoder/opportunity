<?php
	
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="oppo";

	$conn= mysqli_connect($servername,$username,$password,$dbname);

	if(!$conn)
	{
		echo "Not Connected";
	}

?>