@extends('admin.master')

@section('judul')
Data Snack
@endsection

@section('content')

<div class="table-responsive-lg">
    <table id="example2" class="table table-striped  table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Kd Snack</th>
                <th>Nama Snack</th>
                <th>Kategori</th>
                <th>Satuan</th>
                <th>Harga Jual</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
</div>

<!--Srart Modal -->
<div class="modal fade" id="modaltambahSnack">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Rubah Status</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="" method="POST" id="formSimpanSnack" class="formSnack">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="alert alert-danger" style="display:none"></div>
                    <div class="alert alert-success" style="display:none"></div>


                    <!-- select -->
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" id="kategoriSnack">
                            <option value="Snack" default>Snack</option>
                            <option value="Paket">Paket</option>
                        </select>
                    </div>


                    <div class="form-group">
                        <label id="labelIdSnack">ID Snack </label>
                        <input type="text" class="form-control" placeholder="ID" id="txtIdSnack" name="txtIdSnack">
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label id="labelNamaSnack">Nama Snack </label>
                                <input type="text" class="form-control" placeholder="Nama" id="txtNamaSnack" name="txtNamaSnack">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label id="labelHargaSnack">Harga Snack</label>
                                <input type="number" class="form-control" placeholder="Harga" id="txtHargaSnack" name="txtHargaSnack">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label id="labelKetSnack">Ket. Snack </label>
                        <textarea class="form-control" rows="3" id="txtKetSnack" name="txtKetSnack"></textarea>
                    </div>


                    <div class="form-group">
                        <label id="labelGambarSnack">Gambar Snack </label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="fileGambarSnack" name="fileGambarSnack">
                            <label class="custom-file-label" for="customFile">Pilih file</label>
                        </div>

                    </div>

                    <div class="text-right">
                        <button id="btnSimpan" class="btn btn-primary"></button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- EndModal -->

@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/css/bootstrap-datepicker.min.css')}}">
<link rel="stylesheet" href="{{ asset('/css/autotext.css')}}">
@endsection


@section('script')
<script src="{{ asset('js/tampilan/fileinput.js') }}"></script>
<script src="{{ asset('js/tampilan/dataSnack.js') }}"></script>
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
