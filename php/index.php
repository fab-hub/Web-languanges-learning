<?php
	//include 'db_connection.php';
	include 'config.php';
	include 'debug_to_console.php';
	
	$conn = OpenCon();
	
	if ($conn->connect_error)
	{
		$log = 'An error occurred while connecting to the database: ' . $conn->connect_error;
		die (debug_to_console($log));
		
	}
	
	debug_to_console('Connected Successfully');
	
	CloseCon($conn);
	debug_to_console('Task failed succesfully!');
?>