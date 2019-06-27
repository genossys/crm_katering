<div class="row">
    @foreach($snack as $sn)
    <div class="col-md-3">
        <div class="kartuproduk" style="background-color: rgba(255, 255, 255, 0.8);">
            <img src="{{asset ('/foto/'.$sn->urlFoto)}}" alt="{{asset ('/foto/'.$sn->urlFoto)}}"">
            <h3 class=" text-left namaproduk" data-toggle="modal" data-target="#myModal"> {{$sn->namaProduct}} </h3>
            <div class="tombolpesankecil">
                <h4> {{formatRupiah($sn->hargaJual)}}</h4>
            </div>
            <div class="tombolpesankecil text-right">
                <button class="btn btn-primary btn-detail" data-toggle="modal" data-target="#myModal">Detail</button>
            </div>
        </div>
    </div>
    @endforeach
</div>
