<?php
$servername = "localhost";
$username = "id15433928_samuel";
$password = "Mz~9j\qJ%J5TR6*z";
$dbname = "id15433928_test";

// Connect MySQL server
$conn = new mysqli($servername, $username, $password, $dbname);


// set up char set
if (!$conn->set_charset("utf8")) {
	printf("Error loading character set utf8: %s\n", $conn->error);
	exit();
}

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
else{
    
//echo ("Connection established");
}


?>
