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
                    <input class="form-control" type="text" id="namasnack" name="namasnack" placeholder="Nama Barang" />
                    </select>
                </div>
            </div>

            <div class="col-sm-3 " style="font-size: 12Px">
                <div class="form-group">
                    <label> Harga Maksimal</label>
                    <input class="form-control" type="number" id="hargamax" name="hargamax" placeholder="Harga Maksimal" />
                    </select>
                </div>
            </div>
            <div class="col-sm-3" style="font-size: 12Px">
                <div class="form-group">
                    <label> Urutkan</label>
                    <select class="form-control">
                        <option value="termurah">Termurah</option>
                        <option value="termahal">Terlaris</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-1" style="font-size: 12Px">
                <div class="form-group">
                    <label> <br></label>
                    <button class="form-control btn btn-info"><span><i class="fa fa-search" aria-hidden="true"></i></span></button>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="newproduk ">

    <div id="carouspromo" class="carousel slide" data-ride="carousel" data-interval="5000">

        <div class="carousel-inner container">
            @foreach($productPromo as $pp)
            @if($loop->first)
            <div class="carousel-item active">
                @else
                <div class="carousel-item">
                    @endif
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <img id="thumbnailpromo" class="gambarnew img-fluid img-thumbnail" src="{{asset ('/foto/'.$pp->urlFoto)}}" alt="{{asset ('/foto/'.$pp->urlFoto)}}">
                        </div>
                        <div class="col-sm-7 text-dark">
                            <h3> {{$pp->namaProduct}}</h3>
                            <p class="mt-4 text-dark">{{$pp->deskripsi}}</p>
                            <h3 class="text-dark" style="font-weight: 700"> {{formatRupiah($pp->hargaJual)}}</h3>
                            <div class="tombolpesan text-right">
                                @if (auth()->check())
                                <button class="btn btn-lg btn-primary" onclick="showModalPromo('{{$pp->kdProduct}}','{{$pp->namaProduct}}', '{{$pp->deskripsi}}', '{{$pp->diskon}}','{{$pp->hargaJual}}','{{asset ('/foto/'.$pp->urlFoto)}}','{{auth()->user()->username}}')">Detail</button>
                                @else
                                <button class="btn btn-lg btn-primary" onclick="showModalPromo('{{$pp->kdProduct}}','{{$pp->namaProduct}}', '{{$pp->deskripsi}}', '{{$pp->diskon}}','{{$pp->hargaJual}}','{{asset ('/foto/'.$pp->urlFoto)}}','')">Detail</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Left and right controls -->
            <a class="carousel-control-prev tombolcarousel" href="#carouspromo" data-slide="prev">
                <span><i class="fa fa-arrow-left" aria-hidden="true" style="color: white"></i></span>
            </a>
            <a class="carousel-control-next tombolcarousel" href="#carouspromo" data-slide="next">
                <span><i class="fa fa-arrow-right" aria-hidden="true" style="color: white"></i></span>
            </a>
        </div>

</section>

<!-- SEARCH SNACK -->
<section class="filterpencarian-w pt-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <h3 class="text-danger"> Snack</h3>
            </div>

            <div class="col-sm-3" style="font-size: 12Px">
                <div class="form-group">
                    <label> Cari Barang</label>
                    <input class="form-control" type="text" id="nmsnack" name="nmsnack" placeholder="Nama Barang" />
                    </select>
                </div>
            </div>

            <div class="col-sm-3 " style="font-size: 12Px">
                <div class="form-group">
                    <label> Harga Maksimal</label>
                    <input class="form-control" type="number" id="hargamaxsnack" name="hargamaxsnack" placeholder="Harga Maksimal" />
                    </select>
                </div>
            </div>
            <div class="col-sm-3" style="font-size: 12Px">
                <div class="form-group">
                    <label> Urutkan</label>
                    <select class="form-control" id="orderhargasnack">
                        <option value="asc">Termurah</option>
                        <option value="desc">Termahal</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-1" style="font-size: 12Px">
                <div class="form-group">
                    <label> <br></label>
                    <button id="btn-carisnack" class="form-control btn btn-info"><span><i class="fa fa-search" aria-hidden="true"></i></span></button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- COROUSEL SNACK -->
<section class="produkkami" style="min-height: 700px">
    <div class="container" id="snackkami">
        <div class="row">
            @foreach($snack as $sn)
            <div class="col-md-3 mb-4">
                <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                    <img src="{{asset ('/foto/'.$sn->urlFoto)}}" alt="{{asset ('/foto/'.$sn->urlFoto)}}">
                    <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> {{$sn->namaProduct}} </h3>

                    <div class="tombolpesankecil text-left">
                        <h4> {{formatRupiah($sn->hargaJual)}}</h4>
                    </div>
                    <div class="tombolpesankecil text-right">
                        <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- SEARCH PAKET -->
<section class="filterpencarian pt-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <h3 class="text-danger"> Paket</h3>
            </div>

            <div class="col-sm-3" style="font-size: 12Px">
                <div class="form-group">
                    <label> Cari Paket</label>
                    <input class="form-control" type="text" id="nmpaket" name="nmpaket" placeholder="Nama Paket" />
                    </select>
                </div>
            </div>

            <div class="col-sm-3 " style="font-size: 12Px">
                <div class="form-group">
                    <label> Harga Maksimal</label>
                    <input class="form-control" type="number" id="hargamaxpaket" name="hargamaxpaket" placeholder="Harga Maksimal" />
                    </select>
                </div>
            </div>
            <div class="col-sm-3" style="font-size: 12Px">
                <div class="form-group">
                    <label> Urutkan</label>
                    <select class="form-control" id="orderhargapaket">
                        <option value="asc">Termurah</option>
                        <option value="desc">Termahal</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-1" style="font-size: 12Px">
                <div class="form-group">
                    <label> <br></label>
                    <button id="btn-caripaket" class="form-control btn btn-info"><span><i class="fa fa-search" aria-hidden="true"></i></span></button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- COROUSEL PAKET -->
<section class="paketkami" style="min-height: 700px">
    <div id='paketkami' class="container">
        <div class="row">
            @foreach($paket as $pk)
            <div class="col-md-3">
                <div class="kartuproduk" style="background-color: rgba(255, 255, 255, 0.8);">
                    <img src="{{asset ('/foto/'.$pk->urlFoto)}}" alt="{{asset ('/foto/'.$pk->urlFoto)}}">
                    <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> {{$pk->namaProduct}} </h3>
                    <div class="tombolpesankecil">
                        <h4> {{formatRupiah($pk->hargaJual)}}</h4>
                    </div>
                    <div class="tombolpesankecil text-right">
                        <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>



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
                            <img class="gambarmodal img-fluid" src="{{asset ('/assets/gambar/arem.jpg')}}" alt="{{asset ('/assets/gambar/arem.jpg')}}">
                        </div>
                        <div class="col-sm-7">
                            <h3 class="font-weight-bold"> Arem arem </h3>
                            <p class="mt-5">Cake kali ini sedikit beda dengan tampilan cake yang lain, agar tampilan lebih menarik dan unik cake ini dibuat motif dengan sentuhan aksen seperti warna macan tutul. Untuk memberi aksen motif seperti ini memang cukup membutuhkan keahlian dan ketelatenan.</p>
                            <h3 style="color: black"> Rp. 2.000</h3>

                            <div class="tombolpesan">
                                <p>
                                </p>
                                <div class="input-group">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-danger btn-number input-plus" data-type="minus" data-field="quant[2]">
                                            <span>-</span>
                                        </button>
                                    </span>
                                    <input type="text" name="quant[2]" class="input-number text-center" value="1" min="1" max="100" style="width: 50px">
                                    <span class="input-group-btn">
                                        <button type="button" class="btn btn-success btn-number input-min" data-type="plus" data-field="quant[2]">
                                            <span>+</span>
                                        </button>
                                    </span>
                                </div>
                                <p></p>

                                <button class="btn btn-primary">Tambah Ke Keranjang</button>
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
    $("#btn-carisnack").click(function() {
        var kategori = "SNK";
        var promo = "T";
        var nama = $("#nmsnack").val();
        var batas = $("#hargamaxsnack").val();
        var orderharga = $("#orderhargasnack").val();
        var page = "isipage.snack";

        $.ajax({
            type: 'GET',
            url: '/pencarianproduct',
            data: {
                promo: promo,
                kategori: kategori,
                orderharga: orderharga,
                batas: batas,
                nama: nama,
                page: page
            },
            success: function(data) {
                $("#snackkami").html(data.html);
            }
        });
    });

    $("#btn-caripaket").click(function() {
        var kategori = "PKT";
        var promo = "T";
        var nama = $("#nmpaket").val();
        var batas = $("#hargamaxpaket").val();
        var orderharga = $("#orderhargapaket").val();
        var page = "isipage.paket";

        $.ajax({
            type: 'GET',
            url: '/pencarianproduct',
            data: {
                promo: promo,
                kategori: kategori,
                orderharga: orderharga,
                batas: batas,
                nama: nama,
                page: page
            },
            success: function(data) {
                $("#paketkami").html(data.html);
            }
        });
    });
</script>
@endsection
