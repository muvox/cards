<?php
function connect_db() {
 $servername = "localhost";
 $username = "a1704471";
 $password = "tiDI1P83z";
 $dbname = "a1704471";
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 } else {
 }
 return $conn;
}
?>
