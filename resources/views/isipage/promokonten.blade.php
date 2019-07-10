@if (count($promo) > 0)
    <section class="newproduk ">
    <div id="carouspromo" class="carousel slide" data-ride="carousel" data-interval="5000">
        <div class="carousel-inner container">
            @foreach($promo as $item)
            @if($loop->first)
            <div class="carousel-item active">
                @else
                <div class="carousel-item">
                    @endif
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <img id="thumbnailpromo" class="gambarnew img-fluid img-thumbnail" src="{{asset ('/foto/'.$item->urlFoto)}}" alt="{{asset ('/foto/'.$item->urlFoto)}}">
                        </div>
                        <div class="col-sm-7 text-dark">
                            <h3> {{$item->namaProduct}}</h3>
                            <p class="mt-4 text-dark">{{$item->deskripsi}}</p>
                            <h3 class="text-dark" style="font-weight: 700"> {{formatRupiah($item->hargaJual)}}</h3>
                            <div class="tombolpesan text-right">
                                @if (auth()->check())
                                <button class="btn btn-lg btn-primary" onclick="showModalPromo('{{$item->kdProduct}}','{{auth()->user()->username}}')">Detail</button>
                                @else
                                <button class="btn btn-lg btn-primary" onclick="showModalPromo('{{$item->kdProduct}}','')">Detail</button>
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
@else
    <div>
        <h4 class="text-center" style="color: rgba(100, 100, 100, 0.5);margin-top: 100px">Produk yang anda cari tidak ada. </h4>
    </div>
@endif