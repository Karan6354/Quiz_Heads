<?php
session_start();
include "db_conn.php";
if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$uname = validate($_POST['username']);
	$pass = validate($_POST['password']);

	$sql = "SELECT * FROM user_master WHERE u_username='$uname' AND u_password='$pass'";
	// echo $sql;die();
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) === 1) {
		$row = mysqli_fetch_assoc($result);
		if ($row['u_username'] === $uname && $row['u_password'] === $pass) {
			$_SESSION['uname'] = $row['u_username'];
			// $_SESSION['name'] = $row['name'];
			if(isset($_POST["hf_username"])){
				$_SESSION["hf_username"] = $_POST["hf_username"];
			}
			if(isset($_POST["hf_quiz"])){
				$_SESSION["hf_quiz"] = $_POST["hf_quiz"];
			}
			if(isset($_POST["hf_marks"])){
				$_SESSION["hf_marks"] = $_POST["hf_marks"];
			}
			$_SESSION['id'] = $row['u_ID'];
			echo($_GET["pdf"]);
			if(isset($_GET["pdf"])){
				header("Location: ../fpdf184/New_certificate.php");
			}
			else{
				header("Location: ../user/index.php");
			}
			exit();
		}
		else{
			if(isset($_GET["pdf"])){
				header("Location: temp.php?error=Incorect User name or password&pdf=true");
			}
			else{
				header("Location: temp.php?error=Incorect User name or password");

			}
			exit();	
		}
	} else {
		if(isset($_GET["pdf"])){
			
			header("Location: temp.php?error=Incorect User name or password&pdf=true");
		}
		else{
			header("Location: temp.php?error=Incorect User name or password");

		}
		exit();	
	}
} else {
	header("Location:  temp.php");
	exit();
}
