<?php
 $conn = mysqli_connect("localhost","root","","teenyweeny");
session_start();

if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($conn, $username);
	$_SESSION['username'] = $username;
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
    $query = "SELECT * FROM `costumers` WHERE username='$username' and password='".hash('sha256', $password)."'";
	$result = mysqli_query($conn,$query) ;
	
	
		// vérifier si l'utilisateur est un administrateur ou un utilisateur
		if ($user['type'] == 'admin') {
			header('location: admin/dashboard.php');		  
		}else{
			header('location:');
		}
	}else{
		$message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
	}

?>


?>