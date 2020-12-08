<!DOCTYPE html>
<html>
<head>
	<title>chatroom</title>
	<link rel="stylesheet" type="text/css" href="chatroom.css">
</head>
<body>
<div id="room">
	<?php
$db=mysqli_connect("localhost","root","password","dbname") or die("could not connect");

$sql = "SELECT * FROM chats";
$results = mysqli_query($db, $sql);

while ($row = mysqli_fetch_array($results)) {
    echo "<p>".$row['username']."</p>";
    echo "<p>".$row['text']."</p>";
    echo "<p>".$row['date']."</p>";

}

	?>
</div>
</body>
</html>
