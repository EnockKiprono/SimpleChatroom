<?php
$db=mysqli_connect("localhost","root","password","dbname") or die("could not connect");

if (isset($_POST['send'])) {
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$text = mysqli_real_escape_string($db, $_POST['text']);
}

$sql = "INSERT INTO chats (username, text, date) VALUES ('$username', '$text', NOW())";
mysqli_query($db, $sql);
header('location: index.php');

mysqli_close($db);


?>
