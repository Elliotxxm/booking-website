<?php

$servername= "localhost";

$unmae= "root";

$password = "";

$db_name = "booking";

$conn = mysqli_connect($username, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}
?>