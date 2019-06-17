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
</div>
@endsection


@section('footer')
<section>
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
