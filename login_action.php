<?php 


	$servername = "localhost";
	$username = "root";
	$db_password = "";
	$dbname = "mohammad";

	$e = $_POST['email'];
	$p = $_POST['password'];

	$conn = new mysqli($servername, $username, $db_password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	else{

		$sql = "SELECT * FROM ali WHERE email='$e' AND password='$p'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {

			header("location: sothik.php");
		}
		else{  // jodi 0 hoy
			// header("location: login_form.php");
			echo "<script>alert('Vul korechen! Abar den.')</script>";
		}



	}








?>