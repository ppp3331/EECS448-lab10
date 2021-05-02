<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "beckylin", "yee7iTuh", "beckylin");
$delete = $_POST["postid"];
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
for ($i = 0; $i < count($delete); $i++)
{
	$query = "DELETE FROM Posts WHERE post_id='$delete[$i]'";
	if ($mysqli->query($query))
	{
		echo "Post ". $delete[$i]." deleted<br>";
	}
	else
	{
		echo "Error";
	}
}
$mysqli->close();
?>