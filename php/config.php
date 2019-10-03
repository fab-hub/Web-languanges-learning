<?php
	function OpenCon()
	{
		//$dbhost = "localhost";
		$dbhost = "172.17.4.30";
		$dbuser = "fabian1";
		$dbpass = "S0rediIPC!";
		$db = "fabian";
		$conn = new mysqli($dbhost, $dbuser, $dbpass, $db); //or die("Connect failed: %s\n". $conn -> error);
		
		return $conn;
	}
	 
	function CloseCon($conn)
	{
		$conn -> close();
	}
	
?>