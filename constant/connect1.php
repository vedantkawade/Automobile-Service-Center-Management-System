<?php
/* Local Database*/

$servername = "localhost";
$username = "admin_garage";
$password = "vedantSipna0225";
$dbname = "admin_garagedb";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



?> 