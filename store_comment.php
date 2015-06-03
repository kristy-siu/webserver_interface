<?php 
include("login.php"); 
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "websites";
$user = $attributes['uid'][0];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM comments WHERE author='".$user."' AND owner='".$_POST['owner']."' AND added_on > TIMESTAMPADD(HOUR, -24, CURRENT_TIMESTAMP)";
$rows = $conn->query($sql);
if($rows->num_rows > 0) {
	//header("Location: review.php?success=repeat&user=".$_POST['owner']);
	die();
}



$sql = "INSERT INTO comments (author, owner, comment, style, navigation, layout, content)
VALUES ('".$user."', '".$_POST['owner']."', '".$_POST['comment']."', '".$_POST['style']."', '".$_POST['lay']."', '".$_POST['con']."', '".$_POST['nav']."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
	var_dump($_POST);
	//header("Location: review.php?success=true&user=".$_POST['owner']);
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	//header("Location: review.php?success=false&user=".$_POST['owner']);
}

$conn->close();
?>