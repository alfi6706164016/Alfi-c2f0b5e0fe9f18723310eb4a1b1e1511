function check_login()
{
	//Ubah alamat url berikut, sesuaikan dengan alamat script pada komputer anda
	var url_view_button	 = 'http://localhost/tutorial/view_button.php';
	var url_admin	 = 'http://localhost/tutorial/admin.php';
	
	
	//Gunakan jquery AJAX
	$.ajax({
		url		: url_admin,
		//Method pengiriman
		type	: 'POST',
		//Data yang akan diambil dari script pemroses
		dataType: 'html',
		//Respon jika data berhasil dikirim
		success	: function(pesan){
			if(pesan=='ok'){
				//Arahkan ke halaman admin jika script pemroses mencetak kata ok
				window.location = url_view_button;
			}
			else{
				//Cetak peringatan untuk username & password salah
				alert(pesan);
				$('#btnLogin').attr('value','Coba lagi ...');
			}
		},
	});
}