@extends('admin.master')

@section('judul')
Data Satuan
@endsection

@section('content')

<div class="pt-4">

    <button id="tambahModal" type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#modaltambahSatuan">
        <span><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
    </button>

</div>

<div class="table-responsive-lg">
    <table id="example2" class="table table-striped  table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Kd Satuan</th>
                <th>Nama Satuan</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
</div>

<div class="modal fade" id="modaltambahSatuan">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Satuan</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="" method="POST" id="formSimpanSatuan" class="formSatuan">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="alert alert-danger" style="display:none"></div>
                    <div class="alert alert-success" style="display:none"></div>
                    <input type="hidden" name="txtKdSatuanOld" id="txtKdSatuanOld">
                    <div class="form-group">
                        <label id="labelKdSatuan">Kode Satuan</label>
                        <input type="text" class="form-control" placeholder="Kode Satuan" id="txtKdSatuan" name="txtKdSatuan">
                    </div>

                    <div class="form-group">
                        <label id="labelNamaSatuan">Nama Satuan</label>
                        <input type="text" class="form-control" placeholder="Nama" id="txtNamaSatuan" name="txtNamaSatuan">
                    </div>


                    <div class="text-right">
                        <button id="btnSimpan" class="btn btn-primary"></button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/css/autotext.css')}}">
<link rel="stylesheet" href="{{ asset('/css/dataTables.bootstrap4.min.css')}}">
@endsection

@section('script')
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTablesBootstrap4.js') }}"></script>
<script src="{{ asset('js/tampilan/fileinput.js') }}"></script>
<script src="{{ asset('js/Master/satuan.js') }}"></script>

@endsection
