@extends('admin.master')

@section('judul')
Data Snack
@endsection

@section('content')


<!-- Button to Open the Modal -->
<div class="pt-4">
    <form action="{{route ('cetakLapProduk')}}" method="get">
        <div class="row">

            <div class="offset-4"></div>
            <div class="col-sm-3 pr-1 pl-2">

                <div class="form-group">
                    <label> Kategori</label>
                    <select class="form-control" name="ktg" id="ktg">
                        <option value="" selected>Semua</option>
                        @foreach($kategori as $ktg)
                        <option value="{{$ktg -> kdKategori}}">{{$ktg -> namaKategori}}</option>
                        @endforeach

                    </select>
                </div>
            </div>
            <div class="col-sm-3 pr-1 pl-2">
                <div class="form-group">
                    <label>Nama Produk</label>
                    <input type="text" class="form-control" placeholder="Nama Produk" id="nama" name="nama">
                </div>
            </div>
            <div class="col-sm-1 pr-1 pl-2">
                <div class="form-group">
                    <label><br></label>
                    <a class="btn btn-info form-control"><i class="fa fa-search" aria-hidden="true"></i></a>
                </div>
            </div>



            <div class="col-sm-1 pl-0">
                <div class="form-group">
                    <label><br></label>
                    <button id="cetakSnack" class="btn btn-warning form-control"><i class="fa fa-print" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
    </form>

</div>
<hr>

<div class="table-responsive-lg">
    <table id="example2" class="table table-striped  table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Satuan</th>
                <th>Diskon</th>
                <th>Harga</th>
                <th>Promo</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>
</div>


@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/css/dataTables.bootstrap4.min.css')}}">
@endsection


@section('script')
<script src="{{ asset('/js/tampilan/fileinput.js') }}"></script>
<script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTablesBootstrap4.js') }}"></script>
<script src="{{ asset('js/handlebars.js') }}"></script>
<script id="details-template" type="text/x-handlebars-templatel">
    @verbatim
    <div class="row">
        <div id="foto" class="col-sm-2 text-center">
                        <img src="/foto/{{ 'urlFoto' }}" height="100" width="100">
            </div>
            <div id="detail" class="col-sm-10">
            <table class="table table-light">
                <tbody>
                    <tr>
                        <td>Kategori</td>
                        <td>:</td>

                        <td>{{ 'namaKategori' }}</td>

                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td>:</td>
                        <td>{{ 'deskripsi' }}</td>
                    </tr>
                </tbody>
            </table>
            </div>

    </div>

    @endverbatim
        </script>
<script src="{{ asset('/js/Master/product.js') }}"></script>

@endsection
