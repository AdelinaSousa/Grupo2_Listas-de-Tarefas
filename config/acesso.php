<?php 
	include ('bd.php');

	$email= $_POST['email'];
	$senha = $_POST['senha'];
	
	$stmt= $con->query("SELECT * FROM usuario WHERE email = '".$email."' AND senha = '".$senha."'");
	$usuario = $stmt->fetchAll();
	
	
if ($usuario == true) {
	echo "<script>location.href='../index.php';</script>";
} 
else {
	echo"<script>window.alert</script>";
	echo "<script>location.href='../login.php';</script>";
}

?>