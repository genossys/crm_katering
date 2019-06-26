@extends('admin.master')

@section('judul')
data Pesanan
@endsection

@section('content')


<!-- Button to Open the Modal -->
<section class="pencarianlap pt-3">
    <!-- Date and time range -->

    <div class="container">

        <div class="row">
            <div class="col-sm-2 offset-4">
                <div class="form-group">
                    <label class="small">Status Bayar</label>
                    <select class="form-control" name="statusBayar" id="statusBayar">
                        <option value="">Semua</option>
                        <option value="belum">Belum</option>
                        <option value="sudah">Sudah</option>
                    </select>
                </div>
            </div>

            <div class="col-sm-2 ">
                <div class="form-group">
                    <label class="small">Status Pengiriman</label>
                    <select class="form-control" name="statusBayar" id="statusBayar">
                        <option value="">Semua</option>
                        <option value="pending">Pending</option>
                        <option value="proses">Proses</option>
                        <option value="terkirim">Terkirim</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-4 ">
                <div class="form-group">
                    <label class="small">Tanggal</label>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-calendar"></i></span>
                        </div>
                        <input type="text" class="form-control float-right" id="tglLaporan" value="<?php echo  Date('m/d/Y', strtotime("-3 days"));?> - <?php echo date('m/d/Y')?>">
                        <button class="btn btn-success  ml-2"><i class="fa fa-search" aria-hidden="true"></i> Cari</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section>
    <div class="container">
        <div class="table-responsive-lg">
            <table id="example2" class="table table-striped  table-bordered table-hover" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>No Transaksi</th>
                        <th>Customer</th>
                        <th>Tanggal Pesan</th>
                        <th>Diskon</th>
                        <th>Status Bayar</th>
                        <th>Status Pengiriman</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</section>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/adminlte/plugins/daterangepicker/daterangepicker-bs3.css')}}">
@endsection


@section('script')
<!-- date-range-picker -->
<script src="{{asset ('/js/moment-with-locales.js')}}"></script>
<script src="{{asset ('adminlte/plugins/daterangepicker/daterangepicker.js')}}"></script>
<script>
    $(function() {
        //Date range picker
        $('#tglLaporan').daterangepicker()


    });
</script>

@endsection
