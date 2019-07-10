@extends('umum.master')

@section('content')
<section class="filterpencarian pt-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <h3 class="text-danger"> Promo</h3>
            </div>
            <div class="col-sm-3" style="font-size: 12Px">
                <div class="form-group">
                    <label> Cari Barang</label>
                    <input class="form-control" type="text" id="schpromo" name="schpromo" placeholder="Cari..." onkeyup="enterSearchPromo(event)" />
                    </select>
                </div>
            </div>

            <div class="col-sm-3 " style="font-size: 12Px">
                <div class="form-group">
                    <label> Harga Maksimal</label>
                    <input class="form-control" type="number" id="hrgpromo" name="hrgpromo" placeholder="Kisaran harga" onkeyup="enterSearchPromo(event)"/>
                    </select>
                </div>
            </div>
            <div class="col-sm-3" style="font-size: 12Px">
                <div class="form-group">
                    <label> Urutkan</label>
                    <select class="form-control" id="orderpromo" name="orderpromo">
                        <option value="asc">Termurah</option>
                        <option value="desc">Terlaris</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-1" style="font-size: 12Px">
                <div class="form-group">
                    <label> <br></label>
                    <button class="form-control btn btn-info" onclick="searchPromo()"><span><i class="fa fa-search" aria-hidden="true"></i></span></button>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="promokami">

</div>

<!-- SEARCH SNACK -->
<section class="filterpencarian-w pt-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <br>
                <h3 class="text-danger"> Pencarian :</h3>
            </div>

            <div class="col-sm-3" style="font-size: 12Px">
                <div class="form-group">
                    <label> Cari Barang</label>
                    <input class="form-control" type="text" id="schproduk" name="schproduk" placeholder="Cari..." onkeyup="enterSearchProduct(event)"/>
                    </select>
                </div>
            </div>

            <div class="col-sm-3 " style="font-size: 12Px">
                <div class="form-group">
                    <label> Harga Maksimal</label>
                    <input class="form-control" type="number" id="hrgproduk" name="hrgproduk" placeholder="Kisaran Harga" onkeyup="enterSearchProduct(event)" />
                    </select>
                </div>
            </div>
            <div class="col-sm-3" style="font-size: 12Px">
                <div class="form-group">
                    <label> Urutkan</label>
                    <select class="form-control" id="orderproduk" name="orderproduk">
                        <option value="asc">Termurah</option>
                        <option value="desc">Termahal</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-1" style="font-size: 12Px">
                <div class="form-group">
                    <label> <br></label>
                    <button id="btn-carisnack" class="form-control btn btn-info" onclick="searchProduct()"><span><i class="fa fa-search" aria-hidden="true"></i></span></button>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- SEARCH PAKET -->


<!-- COROUSEL PAKET -->
<div class="produkkami">
<div class="container" id="produkkami"></div>
</div>


<!-- Modal Detail Produk -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content modalprodukdialog">

            <!-- Modal body -->
            <div class="modal-body modalprodukbody">
                <button style="padding-right: 10px" type="button" class="close" data-dismiss="modal">&times;</button>
                <div class="jumbotron  modalproduk">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <img class="gambarmodal img-fluid" id ="gambarnew" src="" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h3 class="font-weight-bold" id="namaproduct"></h3>
                            <p class="mt-5" id="deskripsi">Cake kali ini sedikit beda dengan tampilan cake yang lain, agar tampilan lebih menarik dan unik cake ini dibuat motif dengan sentuhan aksen seperti warna macan tutul. Untuk memberi aksen motif seperti ini memang cukup membutuhkan keahlian dan ketelatenan.</p>
                            <input type="hidden" id="diskon">
                            <h3 style="color: black" id="hargaJual"></h3>

                            <div class="tombolpesan">
                                <p>
                                </p>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-danger btn-number input-plus" data-type="minus" data-field="quant[2]">
                                            <span>-</span>
                                        </button>
                                    </span>
                                    <input type="text" id="qty" name="quant[2]" class="input-number text-center" value="1" min="1" max="100" style="width: 50px">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-success btn-number input-min" data-type="plus" data-field="quant[2]">
                                            <span>+</span>
                                        </button>
                                    </span>
                                </div>
                                <p></p>

                                @if (auth()->check())
                                        <button class="btn btn-primary" id="btnSimpan">Tambah Ke Keranjang</button>
                                    @else
                                        <button class="btn btn-primary" onclick="javascript:alert('Anda Harus Login Dulu!')">Tambah Ke Keranjang</button>
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
<script src="{{ asset('/js/tampilan/inputnumber.js')}}"></script>
<script>
    
    $(document).ready(function () {
        searchProduct();
        searchPromo();

    });

    function searchProduct() {
        var schproduk = $("#schproduk").val();
        var hrgproduk = $("#hrgproduk").val();
        var orderproduk = $("#orderproduk").val();
        $.ajax({
            type: 'GET',
            url: '/product/pencarianproduct',
            data: {
                orderproduk: orderproduk,
                hrgproduk: hrgproduk,
                schproduk: schproduk,
            },
            success: function(response) {
                $("#produkkami").html(response.html);
            },
             error: function (response) {
            console.log(response);
            alert('gagal \n' + response.responseText);
            }
        });
    }

    function searchPromo() {
        var schpromo = $("#schpromo").val();
        var hrgpromo = $("#hrgpromo").val();
        var orderpromo = $("#orderpromo").val();

        $.ajax({
            type: 'GET',
            url: '/product/pencarianpromo',
            data: {
                orderpromo: orderpromo,
                hrgpromo: hrgpromo,
                schpromo: schpromo,
            },
            success: function(response) {
                $("#promokami").html(response.html);
            },
             error: function (response) {
            console.log(response);
            alert('gagal \n' + response.responseText);
            }
        });
    }

    function enterSearchProduct(event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            searchProduct();
        }
    }

    function enterSearchPromo(event) {
        if (event.keyCode === 13) {
            event.preventDefault();
            searchPromo();
        }
    }
</script>
<script src="{{ asset('/js/Transaksi/product.js') }}"></script>
@endsection
