// action kirim kontak

$('#kirim').click(function(){
    var nama = $('#nama').val()
    var email = $('#email').val()
    var pesan = $('#summernote').summernote('code');
    console.log(nama, email, pesan);
    $.ajax({
        url: 'controller/simpan.php',
        type: 'POST',
        dataType: 'JSON',
        data: {
            nama: nama,
            email: email,
            pesan: pesan
        },
        success: function(res){
            if(res){
                alert("Pesan Terkirim")
                window.location.reload()
            }else{
                alert("Terjadi Kesalahan")
            }
        }
    })
})