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
	$check    = mysqli_query($conn,'select login_date from user_login where username="'.$_SESSION['login']['usn'].'"');
	if(mysqli_num_rows($check)!=0){
		echo 'ok';
		$result = mysql_fetch_array($check);
		$_SESSION['button']['result'] = $result;
	}
	else{
		echo "salah";
	}
}
?>