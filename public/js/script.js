//console.log("terbaik boboiboy");
$(function(){

	$('.tombolTambahData').on('click', function(){
		$('#formModalLabel').html('Tambah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Tambah Data');
	});

	$('.tampilModalUbah').on('click', function(){
		$('#formModalLabel').html('Ubah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Ubah Data');

		const id = $(this).data('id');//console.log(id);
		$.ajax({
			url: 'http://jpmuar07-pc/projek-github/orang_punya/mvc-indo/v00/mahasiswa/getubah',
			data: { id:id },
			method: 'POST',
			//dataType: 'json',
			success: function(data) {
				console.log(data);
			}
		});
	});

});