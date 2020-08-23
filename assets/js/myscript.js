const gagal         = $('.gagal').data('gagal');
const peringatan    = $('.peringatan').data('peringatan');
const sukses        = $('.sukses').data('sukses');
const error         = $('.error').data('error');
const salah         = $('.salah').data('salah');
const info          = $('.info').data('info');

if( info ) {
    Swal.fire({
        title: 'Info',
        text: info,
        icon: 'info'
    });
}

if( gagal ) {
    Swal.fire({
        title: 'Gagal Masuk',
        text: gagal,
        icon: 'error'
    });
}

if( salah ) {
    Swal.fire({
        title: salah,
        text: '',
        icon: 'error'
    });
}

if( error ) {
    Swal.fire({
        title: 'Error',
        text: error,
        icon: 'error'
    });
}

if( peringatan ) {
    Swal.fire({
        title: 'Peringatan',
        text: peringatan,
        icon: 'warning'
    });
}

if( sukses ) {
    Swal.fire({
        title: 'Sukses',
        text: sukses,
        icon: 'success'
    });
}

$('.bs-btn-hapus').on('click', function (event) {
    event.preventDefault();
    const objek = $(this).attr('href'); 

    Swal.fire({
        title: 'Apakah Anda Yakin..??',
        text: "Data Akan Di Hapus!!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus Data!'
    }).then((result) => {
        if (result.value) {
            document.location.href = objek;
        }
    });

});