<?php
require_once('Connection.php');

$connection = new Connection();
// $conn = mysqli_connect($host, $user, $pass);

if ($connection->checkConnect()) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected to MySQL successfully! \n";

$sql = 'Select * from `news`.`posts`';

$result = $connection->getConnection()->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "title: " . $row["post_title"] . " - Body: " . $row["post_body"] . "<br>";
    }
} else {
    echo "thất bại: " . mysqli_error($connection);
}

$connection->disconnect();
