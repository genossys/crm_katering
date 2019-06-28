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
    <table class="table table-striped">

        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Produk</th>
                <th scope="col">Kategori</th>
                <th scope="col">Diskon</th>
                <th scope="col">Harga</th>
                <th scope="col">Stat. Promo</th>
            </tr>
        </thead>

        @php $i=1 @endphp
        @foreach($snack as $sn)
        <tbody>
            <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$sn->namaProduct}}</td>
                <td>{{$sn->kdKategori}}</td>
                <td>{{$sn->diskon}}</td>
                <td>{{$sn->hargaJual}}</td>
                <td>{{$sn->promo}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- JS -->
    <script src="js/app.js"></script>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
</body>

</html>
