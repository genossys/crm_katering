@extends('umum.master')
@section('content')

<section class="filterpencarian">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 offset-2" style="font-size: 12Px">
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
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <h3 class="text-left mb-5"> Promo</h3>
            </div>
            <div class="col-sm-7 text-right" style="font-size: 20px">
            </div>
        </div>
    </div>
    <div id="carouspromo" class="carousel slide" data-ride="carousel" data-interval="5000">

        <!-- The slideshow -->
        <div class="carousel-inner container">
            <div class="carousel-item active">
                <div class="newprodukkon ">
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


<section class="produkkami">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <h3 class="text-left mb-5"> Snack</h3>
            </div>
            <div class="col-sm-7 text-right" style="font-size: 20px">
            </div>
        </div>
    </div>
    <div id="carousproduk" class="carousel slide" data-ride="carousel">


        <!-- The slideshow -->
        <div class="carousel-inner container">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                            <img src="{{asset ('/assets/gambar/arem.jpg')}}" alt="" data-toggle="modal" data-target="#myModal">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Arem-arem </h3>

                            <div class="tombolpesankecil text-left">
                                <h4> Rp 2.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                            <img src="{{asset ('/assets/gambar/arem.jpg')}}" alt="" data-toggle="modal" data-target="#myModal">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Arem-arem </h3>

                            <div class="tombolpesankecil text-left">
                                <h4> Rp 2.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                            <img src="{{asset ('/assets/gambar/arem.jpg')}}" alt="" data-toggle="modal" data-target="#myModal">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Arem-arem </h3>

                            <div class="tombolpesankecil text-left">
                                <h4> Rp 2.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                            <img src="{{asset ('/assets/gambar/arem.jpg')}}" alt="" data-toggle="modal" data-target="#myModal">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Arem-arem </h3>

                            <div class="tombolpesankecil text-left">
                                <h4> Rp 2.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                            <img src="{{asset ('/assets/gambar/arem.jpg')}}" alt="" data-toggle="modal" data-target="#myModal">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Arem-arem </h3>

                            <div class="tombolpesankecil text-left">
                                <h4> Rp 2.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                            <img src="{{asset ('/assets/gambar/arem.jpg')}}" alt="" data-toggle="modal" data-target="#myModal">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Arem-arem </h3>

                            <div class="tombolpesankecil text-left">
                                <h4> Rp 2.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                            <img src="{{asset ('/assets/gambar/arem.jpg')}}" alt="" data-toggle="modal" data-target="#myModal">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Arem-arem </h3>

                            <div class="tombolpesankecil text-left">
                                <h4> Rp 2.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                            <img src="{{asset ('/assets/gambar/arem.jpg')}}" alt="" data-toggle="modal" data-target="#myModal">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Arem-arem </h3>

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
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                            <img src="{{asset ('/assets/gambar/arem.jpg')}}" alt="" data-toggle="modal" data-target="#myModal">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Arem-arem </h3>

                            <div class="tombolpesankecil text-left">
                                <h4> Rp 2.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                            <img src="{{asset ('/assets/gambar/arem.jpg')}}" alt="" data-toggle="modal" data-target="#myModal">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Arem-arem </h3>

                            <div class="tombolpesankecil text-left">
                                <h4> Rp 2.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                            <img src="{{asset ('/assets/gambar/arem.jpg')}}" alt="" data-toggle="modal" data-target="#myModal">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Arem-arem </h3>

                            <div class="tombolpesankecil text-left">
                                <h4> Rp 2.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                            <img src="{{asset ('/assets/gambar/arem.jpg')}}" alt="" data-toggle="modal" data-target="#myModal">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Arem-arem </h3>

                            <div class="tombolpesankecil text-left">
                                <h4> Rp 2.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                            <img src="{{asset ('/assets/gambar/arem.jpg')}}" alt="" data-toggle="modal" data-target="#myModal">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Arem-arem </h3>

                            <div class="tombolpesankecil text-left">
                                <h4> Rp 2.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                            <img src="{{asset ('/assets/gambar/arem.jpg')}}" alt="" data-toggle="modal" data-target="#myModal">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Arem-arem </h3>

                            <div class="tombolpesankecil text-left">
                                <h4> Rp 2.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                            <img src="{{asset ('/assets/gambar/arem.jpg')}}" alt="" data-toggle="modal" data-target="#myModal">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Arem-arem </h3>

                            <div class="tombolpesankecil text-left">
                                <h4> Rp 2.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                            <img src="{{asset ('/assets/gambar/arem.jpg')}}" alt="" data-toggle="modal" data-target="#myModal">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Arem-arem </h3>

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

            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-3 mb-4">
                        <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                            <img src="{{asset ('/assets/gambar/arem.jpg')}}" alt="" data-toggle="modal" data-target="#myModal">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Arem-arem </h3>

                            <div class="tombolpesankecil text-left">
                                <h4> Rp 2.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                            <img src="{{asset ('/assets/gambar/arem.jpg')}}" alt="" data-toggle="modal" data-target="#myModal">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Arem-arem </h3>

                            <div class="tombolpesankecil text-left">
                                <h4> Rp 2.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                            <img src="{{asset ('/assets/gambar/arem.jpg')}}" alt="" data-toggle="modal" data-target="#myModal">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Arem-arem </h3>

                            <div class="tombolpesankecil text-left">
                                <h4> Rp 2.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                            <img src="{{asset ('/assets/gambar/arem.jpg')}}" alt="" data-toggle="modal" data-target="#myModal">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Arem-arem </h3>

                            <div class="tombolpesankecil text-left">
                                <h4> Rp 2.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                            <img src="{{asset ('/assets/gambar/arem.jpg')}}" alt="" data-toggle="modal" data-target="#myModal">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Arem-arem </h3>

                            <div class="tombolpesankecil text-left">
                                <h4> Rp 2.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                            <img src="{{asset ('/assets/gambar/arem.jpg')}}" alt="" data-toggle="modal" data-target="#myModal">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Arem-arem </h3>

                            <div class="tombolpesankecil text-left">
                                <h4> Rp 2.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                            <img src="{{asset ('/assets/gambar/arem.jpg')}}" alt="" data-toggle="modal" data-target="#myModal">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Arem-arem </h3>

                            <div class="tombolpesankecil text-left">
                                <h4> Rp 2.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                            <img src="{{asset ('/assets/gambar/arem.jpg')}}" alt="" data-toggle="modal" data-target="#myModal">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Arem-arem </h3>

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

        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev tombolcarousel" href="#carousproduk" data-slide="prev">
            <span><i class="fa fa-arrow-left" aria-hidden="true" style="color: black"></i></span>
        </a>
        <a class="carousel-control-next tombolcarousel" href="#carousproduk" data-slide="next">
            <span><i class="fa fa-arrow-right" aria-hidden="true" style="color: black"></i></span>
        </a>
    </div>

</section>

<section class="paketkami">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <h3 class="text-left mb-5"> Paket</h3>
            </div>
            <div class="col-sm-7 text-right" style="font-size: 20px">
            </div>
        </div>
    </div>
    <div id="carouspaket" class="carousel slide" data-ride="carousel" >


        <!-- The slideshow -->
        <div class="carousel-inner container">
            <div class="carousel-item active">
                <div class="row">
                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 255, 255, 0.8);">
                            <img src="{{asset ('/assets/gambar/paket1.jpg')}}" alt="">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Paket 1 </h3>
                            <div class="tombolpesankecil">
                                <h4> Rp 15.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 255, 255, 0.8);">
                            <img src="{{asset ('/assets/gambar/paket1.jpg')}}" alt="">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Paket 1 </h3>
                            <div class="tombolpesankecil">
                                <h4> Rp 15.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 255, 255, 0.8);">
                            <img src="{{asset ('/assets/gambar/paket1.jpg')}}" alt="">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Paket 1 </h3>
                            <div class="tombolpesankecil">
                                <h4> Rp 15.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 255, 255, 0.8);">
                            <img src="{{asset ('/assets/gambar/paket1.jpg')}}" alt="">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Paket 1 </h3>
                            <div class="tombolpesankecil">
                                <h4> Rp 15.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 255, 255, 0.8);">
                            <img src="{{asset ('/assets/gambar/paket1.jpg')}}" alt="">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Paket 1 </h3>
                            <div class="tombolpesankecil">
                                <h4> Rp 15.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="row">
                    <div class="col-md-3">
                        <div class="kartuproduk" style="background-color: rgba(255, 255, 255, 0.8);">
                            <img src="{{asset ('/assets/gambar/paket1.jpg')}}" alt="">
                            <h3 class="text-left namaproduk" data-toggle="modal" data-target="#myModal"> Paket 1 </h3>
                            <div class="tombolpesankecil">
                                <h4> Rp 15.000</h4>
                            </div>
                            <div class="tombolpesankecil text-right">
                                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev tombolcarousel" href="#carouspaket" data-slide="prev">
            <span><i class="fa fa-arrow-left" aria-hidden="true" style="color: black"></i></span>
        </a>
        <a class="carousel-control-next tombolcarousel" href="#carouspaket" data-slide="next">
            <span><i class="fa fa-arrow-right" aria-hidden="true" style="color: black"></i></span>
        </a>
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
<script src="{{ asset('/js/tampilan/inputnumber.js')}}">

</script>
@endsection
