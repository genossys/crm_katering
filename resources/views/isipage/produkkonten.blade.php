


@if (count($snack) > 0)
    <section class="produkkami" style="min-height: 700px">
    SNACK KAMI
    <br>
    <div class="row" id="div_snack">
        @foreach ($snack as $item)
        <div class="col-md-3 mb-4">
            <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                <img src="{{asset ('/foto/'.$item->urlFoto)}}" alt="{{asset ('/foto/'.$item->urlFoto)}}">
                <h3 class="text-left namaproduk"> {{$item->namaProduct}} </h3>
                @if ($item->diskon > 0)
                    Disc {{$item->diskon}}% <strike> {{formatRupiah($item->hargaJual)}} </strike>
                @endif
                <div class="tombolpesankecil text-left">
                    {{ hargaafterdiskon($item->diskon, $item->hargaJual)}}
                </div>
                <div class="tombolpesankecil text-right">
                    <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    </section>
@else
    SNACK KAMI
    <br>
    <div>
        <h4 class="text-center" style="color: rgba(100, 100, 100, 0.5);margin-top: 100px">Produk yang anda cari tidak ada. </h4>
    </div>
@endif
    

@if (count($paket) > 0)
    <section class="paketkami" style="min-height: 700px">
        PAKET KAMI
        <br>
        <div class="row" id="div_snack">
            @foreach ($paket as $item)
            <div class="col-md-3 mb-4">
                <div class="kartuproduk" style="background-color: rgba(255, 215, 0, 0.8);">
                    <img src="{{asset ('/foto/'.$item->urlFoto)}}" alt="{{asset ('/foto/'.$item->urlFoto)}}">
                    <h3 class="text-left namaproduk"> {{$item->namaProduct}} </h3>
                    @if ($item->diskon > 0)
                        Disc {{$item->diskon}}% <strike> {{formatRupiah($item->hargaJual)}} </strike>
                    @endif
                    <div class="tombolpesankecil text-left">
                        {{ hargaafterdiskon($item->diskon, $item->hargaJual)}}
                    </div>
                    <div class="tombolpesankecil text-right">
                        <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@else
    PAKET KAMI
    <br>
    <div>
        <h4 class="text-center" style="color: rgba(100, 100, 100, 0.5);margin-top: 100px">Produk yang anda cari tidak ada. </h4>
    </div>
@endif
        


