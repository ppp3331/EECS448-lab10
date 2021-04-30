<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "beckylin", "yee7iTuh", "beckylin");
$username = $_POST["username"];
$post = $_POST["post"];
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
else
{
	$query = "INSERT INTO Posts (content, author_id) VALUES ('$post', (SELECT user_id FROM Users WHERE user_id='$username'))";
	if ($result = $mysqli->query($query)){
		echo "Post saved!";
	}
	else {
		echo "Error.";
	}
}

$mysqli->close();
?>