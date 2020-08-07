<?php  

$con = mysqli_connect('localhost:3307', 'root');
if ($con) {
	echo "connection successful";
}
else{
	echo "No connection";

	# code...
}

mysqli_select_db($con,'sdb');


$user = $_POST['user'];
$mail = $_POST['mail'];
$message = $_POST['message'];


$query = "insert into subscribe (user, mail, message) values ('$user', '$mail', '$message' ) ";

mysqli_query($con, $query);
header('location: services.php');

?>