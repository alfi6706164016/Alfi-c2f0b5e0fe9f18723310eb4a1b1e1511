<?php
session_start();
//koneksi ke database
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "data";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 $date = date('Y-m-d H:i:s');
if(isset($_POST['var_usn']) AND isset($_POST['var_pwd'])){
	$username = addslashes($_POST['var_usn']);
	$password = addslashes($_POST['var_pwd']);
	$check    = mysqli_query($conn,'select * from user_login where username="'.$username.'" AND password="'.$password.'" ');
	if(mysqli_num_rows($check)==0){
		echo 'Username atau Password Salah !';
	}
	else{
		$update = 'UPDATE user_login SET login_date="'.$date.'", status_login="Active" WHERE username="'.$username.'"';
		if (mysqli_query($conn, $update)) {
			} 
			else {
				
			}
		$_SESSION['login']['usn'] = $username;
		$_SESSION['login']['pwd'] = $password;
		echo 'ok';
		
	}
}
?>