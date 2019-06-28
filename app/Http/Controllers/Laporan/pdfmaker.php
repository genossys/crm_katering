<?php

namespace App\Http\Controllers\Laporan;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PDF;
use DB;
use App\Master\productModel;

class pdfmaker extends Controller
{
    //
    public function cetakLaporanSnack(Request $request)
    {

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->dataLaproanSnack($request));
        return $pdf->stream();

    }

    public function dataLaproanSnack(Request $request)
    {
        $kategori = $request->ktg;
        $namaSnack = $request->nama;

        $snack = productModel::query()
        ->select('kdProduct', 'namaProduct', 'kdKategori', 'kdSatuan', 'hargaJual', 'diskon', 'deskripsi', 'promo', 'urlFoto')
        ->where([
            ['kdKategori', 'like', '%' . $kategori . '%'],
            ['namaProduct', 'like', '%' . $namaSnack . '%']
        ])
        ->get();
        return view('admin.laporan.pdfsnack')->with('snack', $snack);

    }
}
