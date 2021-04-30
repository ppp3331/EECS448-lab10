<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "beckylin", "yee7iTuh", "beckylin");
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
echo"<style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    }
    th, td {
    padding: 5;
    }
    </style>";
echo "<table>";
echo "<tr><th>Usernames</th></tr>";
$query = "SELECT user_id FROM Users;";
if ($result = $mysqli->query($query))
{
    while ($row = $result->fetch_assoc())
    {
        echo "<tr><td>" . $row["user_id"] . "</td></tr>";
    }
$result->free();
}
echo"</table>";
$mysqli->close();
?>