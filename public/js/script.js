//console.log("terbaik boboiboy");
$(function(){

	$('.tombolTambahData').on('click', function(){
		$('#formModalLabel').html('Tambah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Tambah Data');
	});

	$('.tampilModalUbah').on('click', function(){
		$('#formModalLabel').html('Ubah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Ubah Data');
		$('.modal-content').attr('action', 'http://jpmuar07-pc/projek-github/orang_punya/mvc-indo/v00/mahasiswa/ubah');

		const id = $(this).data('id');//console.log(id);
		$.ajax({
			url: 'http://jpmuar07-pc/projek-github/orang_punya/mvc-indo/v00/mahasiswa/getubah',
			data: {id : id},
			method: 'POST',
			dataType: 'json',
			success: function(data2) {
				$('#kodInputNama').val(data2.nama);
				$('#kodInputNoKP').val(data2.nokp);
				$('#kodInputEmail').val(data2.email);
				$('#kodInputJurusan').val(data2.jurusan);
				$('#id').val(data2.id);
			}
		});
	});

});