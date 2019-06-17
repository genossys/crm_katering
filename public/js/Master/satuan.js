
var alertSukses = $('.alert-success');
var alertDanger = $('.alert-danger');

var table = $('#example2').DataTable({
    lengthMenu: [[5, 10, 15, -1], [5, 10, 15, "All"]],
    autowidth: true,
    serverSide: true,
    processing: false,
    ajax: '/admin/satuan/dataSatuan',
    columns: [
        { data: 'DT_RowIndex', name: 'DT_RowIndex', searchable: false, orderable: false, sortable: false },
        { data: 'kdSatuan', name: 'kdSatuan' },
        { data: 'namaSatuan', name: 'namaSatuan' },
        { data: 'action', name: 'action', searchable: false, orderable: false }
    ]

});

$(document).ready(function () {

    $('#btnSimpan').on('click', function (e) {
        alert('oke');
        e.preventDefault();
        alertSukses.hide();
        alertDanger.hide();
        var formID = $('.formSatuan').attr('id');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        if (formID == 'simpan') {
            simpanData();
        } else if (formID == 'edit') {
            editData();
            alert('oke');
        }


    });

    $("#tambahModal").on("click", function () {
        $("#btnSimpan").text("Simpan");
        $(".formSatuan").attr("id", "simpan");
        alertDanger.hide();
        alertSukses.hide();
    });

});



function simpanData() {
    var formData = new FormData($('#simpan')[0]);
    $.ajax({
        type: 'POST',
        url: '/admin/satuan/simpanSatuan',
        dataType: 'JSON',
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function (response) {
            if (response.valid) {
                if (response.sqlResponse) {
                    clearField();
                    alertSukses.show().html('<p> Satuan ' + response.data.kdSatuan + ' Berhasil Di Tambahkan </p>');
                    table.draw();
                } else {
                    alert(response.data);
                }
            } else {
                alertDanger.hide();
                alertSukses.hide();
                $.each(response.errors, function (key, value) {
                    alertDanger.show().append('<p>' + value + '</p>');
                });
            }
        },
        error: function (response) {
            console.log(response);
            alert('gagal \n' +response.responseText);
        }

    });
}

function editData() {
    var formData = new FormData($('#edit')[0]);
    $.ajax({
        type: 'POST',
        url: '/admin/satuan/editSatuan',
        dataType: 'JSON',
        data: formData,
        contentType: false,
        cache: false,
        processData: false,
        success: function (response) {
            console.log(response);
            if (response.valid) {
                if (response.sqlResponse) {
                    alert('Berhasil Merubah Data!');
                    clearField();
                    $('#modaltambahSatuan').modal('hide');
                    table.draw();
                } else {
                    alert(response.data);
                }
            } else {
                alertDanger.hide();
                alertSukses.hide();
                $.each(response.errors, function (key, value) {
                    alertDanger.show().append('<p>' + value + '</p>');
                });
            }
        },
        error: function (xhr, textStatus, errorThrown) {
            alert(errorThrown + xhr + textStatus);
        }

    });
}

function hapus(kdSatuan, e) {
    e.preventDefault();
    if (confirm('Apakah Anda Yakin Menghapus Data ' + username)) {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: '/admin/satuan/deleteSatuan',
            data: {
                _method: 'DELETE',
                _token: $('input[name=_token]').val(),
                kdSatuan: kdSatuan
            },
            success: function (response) {
                if (response.sqlResponse) {
                    alert('Data Berhasil Di Hapus');
                    table.draw();
                } else {
                    alert(response.sqlResponse);
                }
            },
            error: function (xhr, textStatus, errorThrown) {
                alert(xhr + textStatus + errorThrown);
            }

        });
    }
}

function clearField(){
    $('#txtKdSatuan').val('');
    $('#txtNamaSatuan').val('');
}

