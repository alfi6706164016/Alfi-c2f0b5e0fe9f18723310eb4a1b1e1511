
<style>
	p { display: inline }

</style>
<?php
session_start();
date_default_timezone_set('Asia/Jakarta');
$date = date('h:m:s');


if(isset($_GET['logout']) AND $_GET['logout']=='1'){
	unset($_SESSION['login']);
	session_destroy();
}
if(!isset($_SESSION['login'])){
	header('location: ../frontend/index.php');
}
else{
	echo '<p id="jam"></p> :
		<p id="menit"></p> :
		<p id="detik"></p> <br>';
	echo '<input type="button" class="btn" name="btn" id="btnLogin" onclick="check_button();" value="Login"/>';	
	echo '<h3>SELAMAT DATANG : '.$_SESSION['login']['usn'].'</h3>';
	echo 'Halaman ini kita asumsikan sebagai halaman Administrator, dimana halaman ini hanya bisa diakses ketika Admin sudah login';
	echo '<br/><a href="?logout=1">LOGOUT</a>';
}
?>

<script>
	window.setTimeout("waktu()", 1000);

	function waktu() {
		var waktu = new Date();
		setTimeout("waktu()", 1000);
		document.getElementById("jam").innerHTML = waktu.getHours();
		document.getElementById("menit").innerHTML = waktu.getMinutes();
		document.getElementById("detik").innerHTML = waktu.getSeconds();
	}

</script>

		<script type="text/javascript" src="button.js">//memanggil script ajax</script>