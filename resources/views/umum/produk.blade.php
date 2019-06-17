@extends('umum.master')
@section('content')
<section class="newproduk ">
    <div class="container">
        <h3 class="text-left mb-5"> Promo</h3>
    </div>
    <div id="demo" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner container">
            <div class="carousel-item active">
                <div class="newprodukkon">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <img class="gambarnew img-fluid" src="{{asset ('/assets/gambar/tigerrollcake.png')}}" alt="{{asset ('/assets/gambar/tigerrollcake.png')}}">
                        </div>
                        <div class="col-sm-7">
                            <h3> (Baru) Tiger Roll Cake </h3>
                            <p class="mt-5">Cake kali ini sedikit beda dengan tampilan cake yang lain, agar tampilan lebih menarik dan unik cake ini dibuat motif dengan sentuhan aksen seperti warna macan tutul. Untuk memberi aksen motif seperti ini memang cukup membutuhkan keahlian dan ketelatenan.</p>
                            <h3 style="color: black"> Rp. 50.000</h3>
                            <div class="tombolpesan text-right">
                                <button class="btn btn-lg btn-primary btn-detail">Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">

            </div>
            <div class="carousel-item">

            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>

</section>


<section class="produkkami">
    <div class="container">

        <h3 class="text-left mb-5"> Snack Kami</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="kartuproduk">
                    <img src="{{asset ('/assets/gambar/arem.jpg')}}" alt="" data-toggle="modal" data-target="#myModal">
                    <h3 class="text-left" data-toggle="modal" data-target="#myModal"> Arem-arem </h3>

                    <div class="tombolpesankecil text-left">
                        <h4> Rp 2.000</h4>
                    </div>
                    <div class="tombolpesankecil text-right">

                        <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<section class="paketkami">
    <div class="container">
        <h3 class="text-left mb-5"> Paket Kami</h3>
        <div class="row">
            <div class="col-md-3">
                <div class="kartupaket">
                    <img src="{{asset ('/assets/gambar/paket1.jpg')}}" alt="">

                    <h3 class="namapaket"> Paket 1 </h3>

                    <p class="isipaket">Nasi uduk</p>
                    <p class="isipaket">Sop Matahari</p>
                    <p class="isipaket">Es Buah</p>

                    <div class="tombolpesanpaket">
                        <h4> Rp 2.000</h4>
                    </div>

                    <div class="tombolpesanpaket text-right">
                        <button class="input-plus btn btn-primary">Pesan Sekarang</button>
                    </div>
                </div>
            </div>

        </div>


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
                                <img class="gambarmodal img-fluid" src="{{asset ('/assets/gambar/arem.jpg')}}" alt="{{asset ('/assets/gambar/arem.jpg')}}">
                            </div>
                            <div class="col-sm-7">
                                <h3 style="color: gold"> Arem arem </h3>
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

                                    <button class="btn btn-primary">Tabah Ke Keranjang</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
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
