<?php 
$username = 'root';
$pass = '';
$host = 'localhost';
$db = 'khelombm';
$conn = new mysqli($host, $username, $pass,$db);

// Check connection
if ($conn->connect_error) {
    echo "<h1 ><strong>Website Under Maintenance , Please Wait for Update | Thanks for Read Meaasge | </strong></h1> ";
}

$sql = "SELECT * FROM user";

$chkusr = mysqli_fetch_assoc(mysqli_query($conn, $sql));

?>