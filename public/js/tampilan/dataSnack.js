$("#kategoriSnack").on("change", function() {
    var kategori = document.getElementById("kategoriSnack").value;
    $("#labelIdSnack").text("Id " + kategori);
    $("#labelNamaSnack").text("Nama " + kategori);
    $("#labelHargaSnack").text("Harga " + kategori);
    $("#labelKetSnack").text("Ket. " + kategori);
    $("#labelGambarSnack").text("Gambar " + kategori);
});

$("#tambahModal").on("click", function() {
    $('#btnSimpan').text('Simpan');
    $('.formSnack').attr('id','simpan');
});

$("#editModal").on("click", function() {
    $('#btnSimpan').text('Update');
    $('.formSnack').attr('id','edit ');
});
