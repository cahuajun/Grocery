
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$servername = "awseb-e-2icxsfiprr-stack-awsebrdsdatabase-mxaxcehu2eu2.cr66cmq2cf2r.us-east-1.rds.amazonaws.com";
$username = "cahua";
$password = "11223344q";
$db = "Bunny_Grocery";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// echo "Connected successfully";

?>

