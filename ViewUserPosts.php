<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "beckylin", "yee7iTuh", "beckylin");
$user = $_POST["user"];
echo "<h1>".$user . "'s Posts</h1>";
echo"<style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    }
    th, td {
    padding: 5;
    }
    </style>";
$query = "SELECT * FROM Posts WHERE author_id = '$user';";
if ($result = $mysqli->query($query)) {
	echo "<table>";
    echo"<th>Post ID</th><th>Content</th>";
	while ($row = $result->fetch_assoc())
	{
	echo "<tr><td>" . $row["post_id"] . "</td><td>" . $row["content"] . "</td>";
    }
    echo "</table>";
	$result->free();
}
    else {
	echo "Error";
}

$mysqli->close();
?>