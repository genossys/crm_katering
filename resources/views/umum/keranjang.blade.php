@extends('umum.master')
@section('content')
<div class="tabelkeranjang" style="height: 100%">
    <div class="container pt-3">
        <h3 class="text-left"> Keranjang</h3>
        <div class="table-responsive-lg ">
            <table id="example2" class="table table-striped  table-hover" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Gambar</th>
                        <th>Nama Produk</th>
                        <th>Qty</th>
                        <th>Satuan</th>
                        <th>Harga</th>
                        <th>Sub Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>




    <div class="catatankusus container">
    <hr>
        <div class="form-group">
            <label>Catatan Kusus </label>
            <textarea class="form-control" rows="3" id="txtCatatan" name="txtCatantan"></textarea>
        </div>



        <div class="row">
            <div class="col-sm-2">
                <button class="btn btn-primary btn-lg">Check Out</button>
            </div>

            <div class="col-sm-10 text-right">
                <div class="totalkeranjang ">
                    <a>Total :</a> <a> Rp 50.000 </a> </div>
            </div>
        </div>
        <hr>
    </div>
</div> @endsection @section('footer') <section>
    <footer>
        <div class="footer">
            &copy; Copyright 2019
        </div>
    </footer>
</section>
@endsection


@section('script')
<script src="{{ asset('/js/tampilan/genosstyle.js') }}"></script>
<script src="{{ asset('/js/tampilan/inputnumber.js')}}">

</script>
@endsection
