<?php
	require_once('../simplesamlphp/lib/_autoload.php');
	include('settings.php');
	$as = new SimpleSAML_Auth_Simple('default-sp');
	$as->requireAuth();
	$attributes = $as->getAttributes();
	// Check if user is in the database and add if not.
	$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "websites";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO users (uid, class)
VALUES ('".$attributes['uid'][0]."', '".$attributes['class'][0]."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} 
?>