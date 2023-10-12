<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index1.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index1.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        
		$sql = "SELECT * FROM chat WHERE user='$uname' AND password='$pass'";

		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user'] === $uname && $row['password'] === $pass) {
            	$_SESSION['user'] = $row['user'];
				$_SESSION['email'] = $row['email'];
            	$_SESSION['id'] = $row['id'];
            	header("Location: chat.php");
		        exit();
            }else{
				header("Location: index1.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			header("Location: index1.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	header("Location: index1.php");
	exit();
}