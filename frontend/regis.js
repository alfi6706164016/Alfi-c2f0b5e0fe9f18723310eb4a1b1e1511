function check_regis()
{
	//Mengambil value dari input username & Password
	var username = $('#txt_username').val();
	var password = $('#txt_password').val();
	//Ubah alamat url berikut, sesuaikan dengan alamat script pada komputer anda
	var url_regis	 = 'http://localhost/alfi_test_mkm/regis.php';
	var url_index	 = 'http://localhost/alfi_test_mkm/index.php';
	var url_admin	 = 'http://localhost/alfi_test_mkm/backend/admin.php';
	
	//Ubah tulisan pada button saat click login
	$('#btnLogin').attr('value','Silahkan tunggu ...');
	
	//Gunakan jquery AJAX
	$.ajax({
		url		: url_regis,
		//mengirimkan username dan password ke script login.php
		data	: 'var_usn='+username+'&var_pwd='+password, 
		//Method pengiriman
		type	: 'POST',
		//Data yang akan diambil dari script pemroses
		dataType: 'html',
		//Respon jika data berhasil dikirim
		success	: function(pesan){
			if(pesan=='ok'){
				//Arahkan ke halaman admin jika script pemroses mencetak kata ok
				window.location = url_index;
			}
			else{
				//Cetak peringatan untuk username & password salah
				alert(pesan);
				$('#btnLogin').attr('value','Coba lagi ...');
			}
		},
	});
}