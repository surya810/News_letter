<?php  

$con = mysqli_connect('localhost:3307', 'root');
if ($con) {
	echo "connection successful";
}
else{
	echo "No connection";

	# code...
}

mysqli_select_db($con,'newsdb');

$mail = $_POST['mail'];

$query = "insert into maildata (mail) values ('$mail') ";
echo $query;

mysqli_query($con, $query);


header('location: home.php');

?>