@extends('admin.master')

@section('judul')
Data Snack
@endsection

@section('content')


<!-- Button to Open the Modal -->
<div>
    <button style="margin-bottom: 10px; margin-top: 20px" type="button" class="btn btn-primary box-tools pull-right" data-toggle="modal" data-target="#modaltambahSnack">
        Tambah Data Snack
    </button>

</div>

<div class="table-responsive-lg">
    <table id="example2" class="table table-striped  table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>#</th>
                <th>ID Snack</th>
                <th>Nama Snack</th>
                <th>Harga</th>
                <th>Dekripsi</th>
                <th>promo</th>
                <th>gambar</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
</div>

{{--modal tambah--}}
<div class="modal fade" id="modaltambahSnack">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data snack</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="" method="POST" id="formSimpanSnack">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="alert alert-danger" style="display:none"></div>
                    <div class="alert alert-success" style="display:none"></div>
                    <div class="form-group">
                        <label>ID Snack</label>
                        <input type="text" class="form-control" placeholder="ID" id="txtIdSnack" name="txtIdSnack">
                    </div>

                    <div class="form-group">
                        <label>Nama Snack</label>
                        <input type="text" class="form-control" placeholder="Nama" id="txtIdLelang" name="txtIdLelang">
                    </div>

                    <div class="form-group">
                        <label>Harga Snack</label>
                        <input type="number" class="form-control" placeholder="Harga" id="txtIdLelang" name="txtIdLelang">
                    </div>

                    <div class="form-group">
                        <label>Ket. Snack</label>
                        <textarea class="form-control" rows="3" id="txtKetSnack" name="txtKetSnack"></textarea>
                    </div>

                    <hr>

                    <div class="text-right">
                        <button id="btnSimpan" class="btn btn-primary">Simpan</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modaleditSnack">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Form Edit Data snack</h4>
                </div>
                <form action="" method="POST" id="formEditSnack">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="alert alert-danger" style="display:none"></div>
                        <div class="alert alert-success" style="display:none"></div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ID Snack</label>
                                    <input type="text" class="form-control" placeholder="ID snack" id="txtIdSnack" name="txtIdSnack">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>ID Lelang</label>
                                    <input type="text" class="form-control autocomplete" placeholder="ID snack" id="txtIdLelang" name="txtIdLelang">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Snack Pra-Kualifikasi</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control float-right datepicker" name="dateSnackPraQ" id="dateSnackPraQ">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Batas Upload</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="fa fa-calendar"></i>
                                            </span>
                                        </div>
                                        <input type="text" class="form-control float-right datepicker" name="dateBatasUp" id="dateBatasUp">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Ket. Snack</label>
                                    <textarea class="form-control" rows="3" id="txtKetSnack" name="txtKetSnack"></textarea>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="text-right">
                            <button id="btnSimpan" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



    @endsection

    @section('css')
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/autotext.css')}}">
    @endsection


    @section('script')
    <script src="{{ asset('/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('/js/tampilan/autotextidlelang.js') }}"></script>
    <script type="text/javascript">
        $(function() {
            $(".datepicker").datepicker({
                format: 'yyyy-mm-dd',
                autoclose: true,
                todayHighlight: true,
            });
        });
    </script>

    @endsection
