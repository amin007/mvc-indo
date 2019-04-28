//console.log("terbaik boboiboy");
$(function(){

	$('.tombolTambahData').on('click', function(){
		$('#formModalLabel').html('Tambah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Tambah Data');
		$('#kodInputNama').val('');
		$('#Nama').html('@@');
		$('#kodInputNoKP').val('');
		$('#kodInputEmail').val('');
		$('#kodInputJurusan').val('');
		$('#id').val('');
	});

	$('.tampilModalUbah').on('click', function(){
		$('#formModalLabel').html('Ubah Data Mahasiswa');
		$('.modal-footer button[type=submit]').html('Ubah Data');
		$('.borangdaa').attr('action', '//jpmuar07-pc/projek-github/orang_punya/mvc-indo/v00/mahasiswa/ubah');

		const id = $(this).data('id');//console.log(id);
		$.ajax({
			url: '//jpmuar07-pc/projek-github/orang_punya/mvc-indo/v00/mahasiswa/getubah',
			data: {id : id},
			method: 'POST',
			dataType: 'json',
			success: function(data) {
				$('#kodInputNama').val(data.nama);
				$('#Nama').html(data.nama);
				$('#kodInputNoKP').val(data.nokp);
				$('#NoKP').html(data.nokp);
				$('#kodInputEmail').val(data.email);
				$('#Email').html(data.email);
				$('#kodInputJurusan').val(data.jurusan);
				$('#Jurusan').html(data.jurusan);
				$('#id').val(data.id);
			}
		});
	});

});