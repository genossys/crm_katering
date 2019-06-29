<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CRM Katering</title>
    <!-- Fonts -->

    <!-- Styles -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">


</head>

<body>

    <style>
        footer {
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 0cm;
        }
    </style>
    <h2 class="mb-0 pb-0 ">CRM Katering</h2>
    <h5 class="mb-5 pt-0 mt-0">Laporan Data Produk</h5>

    <table class="table table-sm table-striped">

        <thead>
            <tr>
                <th class="text-center" scope="col">#</th>
                <th class="text-center" scope="col">Nama Produk</th>
                <th class="text-center" scope="col">Kategori</th>
                <th class="text-center" scope="col">Diskon</th>
                <th class="text-center" scope="col">Harga</th>
                <th class="text-center" scope="col">Stat. Promo</th>
            </tr>
        </thead>
        <tbody style="font-size: 12px">
            @php $i=1 @endphp
            @foreach($snack as $sn)
            <tr>
                <th class="text-center" scope="row">{{$i++}}</th>
                <td>{{$sn->namaProduct}}</td>
                <td class="text-center" >{{$sn->kdKategori}}</td>
                <td class="text-right">{{formatuang($sn->diskon)}}</td>
                <td class="text-right">{{formatuang($sn->hargaJual)}}</td>
                @if($sn->promo == 'Y')
                <td class="text-center">Ya</td>
                @else
                <td class="text-center">Tidak</td>
                @endif

            </tr>
            @endforeach
        </tbody>
    </table>

    <footer class="footer">
        @php $date = new DateTime("now", new DateTimeZone('Asia/Bangkok') ); @endphp
        <p class="text-right small mb-0 mt-0 pt-0 pb-0"> di cetak oleh : {{auth()->user()->username}}</p>
        <p class="text-right small mb-0 mt-0 pt-0 pb-0"> tgl: {{ $date->format('d F Y, H:i:s') }} </p>
    </footer>

    <!-- JS -->
    <script src="js/app.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>
