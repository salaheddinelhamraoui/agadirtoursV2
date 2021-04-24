<?php
if(session_status() == PHP_SESSION_NONE){
	session_start();
}
// $servername = "localhost";
// $username = "id1691992_edic_admin";
// $password = "r@bat2017";
// $dbname = "id1691992_edic";


setlocale (LC_TIME, 'fr_FR.utf8','fra'); 
// echo (strftime("%A %d %B")); lundi 08 Juillet
 
// $servername = "80.208.224.15";
// $username = "les3_les3";
// $password = "Rabat2013";
// $dbname = "les3_3DS";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_tour";

 
// Create connection
$conn = new mysqli($servername, $username, $password ,$dbname);

$con = $conn;

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// echo "Connected successfully <br>";

mysqli_set_charset($conn,"utf8");
$Role =$name = $email = $phone   = null;
$USERconnecte = false;
if(isset($_SESSION['email'])){
	$Role = $_SESSION['role'];
	$name =$_SESSION['name'];
	$email =$_SESSION['email'];
	$phone = $_SESSION['phone'];
	
$USERconnecte = true;
}



?>