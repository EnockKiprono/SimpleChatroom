<!DOCTYPE html>
<html>
<head>
	<title>chatroom</title>
	<link rel="stylesheet" type="text/css" href="chatroom.css">
</head>
<body>
<div id="top">
	<p style="float: left;">welcome: <?php echo $_POST['username']; ?></p><br>
	<p style="float: right;"><a href="">exit</a></p><br>
</div><br>

<div>

<iframe style="float: top;" src="room.php" id="room" height="900" width="300"></iframe>
</div><br>

<div id="textarea">
	<form action="POST.php" method="post">
		<label for="username"><em><b>Enter Username</b></em></label>
		<input type="text" name="username"><br>
	<label for="text"><em><b>Enter Text</b></em></label><br>
	<textarea rows="5" cols="50" name="text" placeholder="enter text"></textarea><br>
	<input type="submit" name="send" value="send"><br>
	</form>
</div><br>

</body>
</html>
