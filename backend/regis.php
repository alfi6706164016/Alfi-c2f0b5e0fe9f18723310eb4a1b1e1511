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
	$check    = 'INSERT INTO user_login (username, password) VALUES ("'.$username.'","'.$password.'")';
	if (mysqli_query($conn, $check)) {
		echo 'ok';
	}
	else{
		echo "salah";
		$_SESSION['login']['usn'] = $username;
		$_SESSION['login']['pwd'] = $password;
		
	}
}
?>