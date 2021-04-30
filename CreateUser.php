<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "beckylin", "yee7iTuh", "beckylin");
$username = $_POST["username"];
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
$user = "INSERT INTO Users (user_id) VALUES (\"$username\");";
if ($mysqli->query($user)== TRUE)
{
    echo "Username added successfully";
}
else
{
    echo "Error<br>";
}

$mysqli->close();
?>