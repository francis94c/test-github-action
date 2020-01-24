<?php

$servername = "localhost";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "SHOW DATABASES";
$result = $conn->query($sql);
if ($result === false) {
    throw new Exception("Could not execute query: " . $conn->error);
}

$db_names = array();
while($row = $result->fetch_array(MYSQLI_NUM)) { // for each row of the resultset
    $db_names[] = $row[0]; // Add db name to $db_names array
}

echo "Database names: " . PHP_EOL . print_r($db_names, TRUE);
?> 
