<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Master\productModel;
use App\Master\kategoriModel;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Arr;

class productController extends Controller
{
    //


    public function index()
    {
        return view('umum.produk');
    }

    public function showFormProduct()
    {
        return view('admin.master.datasnack');
    }

    public function showLapoanProduct()
    {
        $kategori = kategoriModel::query()
            ->select('kdKategori', 'namaKategori')
            ->get();

        return view('admin.laporan.laporansnack')->with('kategori', $kategori);
    }

    public function getDataproduct()
    {

        $product = productModel::query()
            ->join('tb_kategori', 'tb_product.kdKategori', '=', 'tb_kategori.kdKategori')
            ->join('tb_satuan', 'tb_product.kdSatuan', '=', 'tb_satuan.kdSatuan')
            ->select(
                'tb_product.kdProduct as kdProduct',
                'tb_product.namaProduct as namaProduct',
                'tb_product.kdKategori as kdKategori',
                'tb_kategori.namaKategori as namaKategori',
                'tb_product.kdSatuan as kdSatuan',
                'tb_satuan.namaSatuan as namaSatuan',
                'tb_product.hargaJual as hargaJual',
                'tb_product.diskon as diskon',
                'tb_product.deskripsi as deskripsi',
                'tb_product.promo as promo',
                'tb_product.urlFoto as urlFoto'
            )
            ->get();

        return DataTables::of($product)
            ->addIndexColumn()
            ->addColumn('action', function ($product) {
                return '<a class="btn-sm btn-warning" id="btn-edit" href="#" onclick="showEditProduct(\'' . $product->kdProduct . '\',
                 \'' . $product->namaProduct . '\', \'' . $product->kdKategori . '\', \'' . $product->kdSatuan . '\', \'' . $product->hargaJual . '\',
                  \'' . $product->diskon . '\', \'' . $product->deskripsi . '\', \'' . $product->promo . '\', event)" ><i class="fa fa-edit"></i></a>
                            <a class="btn-sm btn-danger" id="btn-delete" href="#" onclick="hapus(\'' . $product->kdProduct . '\',event)" ><i class="fa fa-trash"></i></a>
                            <a class="btn-sm btn-info details-control" id="btn-detail" href="#"><i class="fa fa-folder-open"></i></a>
                        ';
            })
            ->addColumn('hargaJual', function ($product) {
                return formatuang($product->hargaJual);
            })
            ->addColumn('diskon', function ($product) {
                return formatuang($product->diskon);
            })
            ->addColumn('promo', function ($product) {
                if ($product->promo == 'Y') {
                    return '<a href="#" onclick="showPromo(\'' . $product->kdProduct . '\', event)">Ya</a>';
                } else {
                    return '<a href="#" onclick="showPromo(\'' . $product->kdProduct . '\', event)">Tidak</a>';
                }
            })
            ->rawColumns(['action', 'hargaJual', 'diskon', 'promo'])
            ->make(true);
    }

    private function isValid(Request $r)
    {
        $messages = [
            'required'  => 'Field :attribute Tidak Boleh Kosong',
            'max'       => 'Field :attribute Maksimal :max',
            'image'       => 'Field :attribute Harus File Gambar',
        ];

        $rules = [
            'kdProduct' => 'required|max:25',
            'namaProduct' => 'required|max:191',
            'hargaJual' => 'required|numeric',
            'diskon' => 'required|numeric',
            'deskripsi' => 'required',
        ];

        return Validator::make($r->all(), $rules, $messages);
    }

    public function insert(Request $r)
    {
        if ($this->isValid($r)->fails()) {
            return response()->json([
                'valid' => false,
                'errors' => $this->isValid($r)->errors()->all(),
            ]);
        } else {

            if ($r->hasFile('urlFoto')) {
                $upFoto = $r->file('urlFoto');
                $namaFoto = $r->kdProduct . '.' . $upFoto->getClientOriginalExtension();
                $r->urlFoto->move(public_path('foto'), $namaFoto);
            } else {
                $namaFoto = '';
            }

            try {
                $product = new productModel;
                $product->kdProduct = $r->kdProduct;
                $product->namaProduct = $r->namaProduct;
                $product->kdKategori = $r->kdKategori;
                $product->kdSatuan = $r->kdSatuan;
                $product->hargaJual = $r->hargaJual;
                $product->diskon = $r->diskon;
                $product->deskripsi = $r->deskripsi;
                $product->promo = $r->promo;
                $product->urlFoto = $namaFoto;
                $product->save();
                return response()->json([
                    'valid' => true,
                    'sqlResponse' => true,
                    'data' => $product,
                ]);
            } catch (\Exception  $e) {
                $exData = explode('(', $e->getMessage());
                return response()->json([
                    'valid' => true,
                    'sqlResponse' => false,
                    'data' => $exData[0],
                ]);
            }
        }
    }

    public function edit(Request $r)
    {
        if ($this->isValid($r)->fails()) {
            return response()->json([
                'valid' => false,
                'errors' => $this->isValid($r)->errors()->all()
            ]);
        } else {
            try {
                $id = $r->oldkdProduk;
                $data = [
                    'kdProduct' => $r->kdProduct,
                    'namaProduct' => $r->namaProduct,
                    'kdKategori' => $r->kdKategori,
                    'kdSatuan' => $r->kdSatuan,
                    'hargaJual' => $r->hargaJual,
                    'diskon' => $r->diskon,
                    'deskripsi' => $r->deskripsi,
                    'promo' => $r->promo,
                ];

                if ($r->hasFile('urlFoto')) {
                    $upFoto = $r->file('urlFoto');
                    $namaFoto = $r->kdProduct . '.' . $upFoto->getClientOriginalExtension();
                    $r->urlFoto->move(public_path('foto'), $namaFoto);
                    $data = array_add($data, 'urlFoto', $namaFoto);
                }

                productModel::query()
                    ->where('kdProduct', '=', $id)
                    ->update($data);
                return response()
                    ->json([
                        'sqlResponse' => true,
                        'sukses' => $data,
                        'valid' => true,
                    ]);
            } catch (\Throwable $th) {
                return response()->json([
                    'sqlResponse' => false,
                    'data' => $th,
                    'valid' => true,
                ]);
            }
        }
    }

    public function delete(Request $r)
    {
        $id = $r->input('id');
        productModel::query()
            ->where('kdProduct', '=', $id)
            ->delete();;
        return response()->json([
            'sukses' => 'Berhasil Di hapus' . $id,
            'data' => 'tahapan/dataTahapan',
            'sqlResponse' => true,
        ]);
    }

    public function editpromo(Request $r)
    {
        try {
            $id = $r->idpromo;
            $data = [
                'promo' => $r->promoedit,
            ];

            productModel::query()
                ->where('kdProduct', '=', $id)
                ->update($data);
            return response()
                ->json([
                    'sqlResponse' => true,
                    'sukses' => $data,
                    'valid' => true,
                ]);
        } catch (\Throwable $th) {
            return response()->json([
                'sqlResponse' => false,
                'data' => $th,
                'valid' => true,
            ]);
        }
    }

    public function pencarianProduct(Request $request)
    {
        $searchbyname = [['namaProduct', 'LIKE', '%' . $request->schproduk . '%']];
        $searchbydeskripsi = [['deskripsi', 'LIKE', '%' . $request->schproduk . '%']];
        $searchbyharga = [['hargaJual', '>', 0]];
        if ($request->hrgproduk != '') {
            $searchbyharga = [['hargaJual', '<=', $request->hrgproduk]];
        }

        $data = productModel::query()
            ->select('kdProduct', 'namaProduct', 'kdKategori', 'kdSatuan', 'hargaJual', 'diskon', 'deskripsi', 'promo', 'urlFoto')
            ->where('promo', '=', 'T')
            ->where(function($q) use ( $searchbyname, $searchbydeskripsi){
                $q->where($searchbyname)
                ->orWhere($searchbydeskripsi);
                })
            ->where($searchbyharga)
            ->orderby('hargaJual', $request->orderproduk)
            ->get();

        if (!$data->isEmpty()) {
            $snack = $data->where('kdKategori', 'SNK');
            $paket = $data->where('kdKategori', 'PKT');
            $returnHTML = view('isipage.produkkonten')->with(['snack' => $snack->all(), 'paket' => $paket->all()])->render();
        } else {
            $returnHTML = view('isipage.produkkosong')->render();
        }
        return response()->json(array('success' => true, 'html' => $returnHTML));
    }

    public function pencarianpromo(Request $request)
    {
        $searchbyname = [['namaProduct', 'LIKE', '%' . $request->schpromo . '%']];
        $searchbydeskripsi = [['deskripsi', 'LIKE', '%' . $request->schpromo . '%']];
        $searchbyharga = [['hargaJual', '>', 0]];
        if ($request->hrgpromo != '') {
            $searchbyharga = [['hargaJual', '<=', $request->hrgpromo]];
        }

        $data = productModel::query()
            ->select('kdProduct', 'namaProduct', 'kdKategori', 'kdSatuan', 'hargaJual', 'diskon', 'deskripsi', 'promo', 'urlFoto')
            ->where('promo', '=', 'Y')
            ->where(function($q) use ( $searchbyname, $searchbydeskripsi){
                $q->where($searchbyname)
                ->orWhere($searchbydeskripsi);
                })
            ->where($searchbyharga)
            ->orderby('hargaJual', $request->orderpromo)
            ->get();

        if (!$data->isEmpty()) {
            $returnHTML = view('isipage.promokonten')->with(['promo' => $data->all()])->render();
        } else {
            $returnHTML = view('isipage.produkkosong')->render();
        }
        return response()->json(array('success' => true, 'html' => $returnHTML));
    }


}
