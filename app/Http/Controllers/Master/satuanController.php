<?php

namespace App\Http\Controllers\Master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Master\satuanModel;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Validator;

class satuanController extends Controller
{
    //
    public function index(){
        return view('/admin/master/datasatuan');
    }

    public function getDataSatuan(){
        $satuan = satuanModel::query()
        ->select('kdSatuan','namaSatuan')
        ->get();

        return DataTables::of($satuan)
            ->addIndexColumn()
            ->addColumn('action', function ($pendaftar) {
                return '<a class="btn-sm btn-warning" id="btn-edit" href="#" onclick="" ><i class="fa fa-edit"></i></a>
                            <a class="btn-sm btn-danger" id="btn-delete" href="#" onclick="" ><i class="fa fa-trash"></i></a>
                        ';
            })
            ->rawColumns(['action'])
            ->make(true);
    }


    public function isValid(Request $r){
        $messages = [
            'required'  => 'Field :attribute Tidak Boleh Kosong',
            'max'       => 'Field :attribute Maksimal :max',
        ];

        $rules = [
            'txtKdSatuan' => 'required|max:25',
            'txtNamaSatuan' => 'required|max:191',
        ];

        return Validator::make($r->all(), $rules, $messages);
    }

    public function insert(Request $r){
        if ($this->isValid($r)->fails()) {
            return response()->json([
                'valid' => false,
                'errors' => $this->isValid($r)->errors()->all(),
            ]);
        } else {
            // try {
            //     $satuan = new satuanModel;
            //     $satuan->kdSatuan = $r->txtKdSatuan;
            //     $satuan->namaSatuan = $r->txtNamaSatuan;
            //     $satuan->save();
            //     return response()->json([
            //         'valid' => true,
            //         'sqlResponse' => true,
            //         'data' => $satuan,
            //     ]);
            // } catch (\Exception $th) {
            //     //throw $th;
            //     $exData = explode('(', $th->getMessage());
            //     return response()->json([
            //         'valid' => true,
            //         'sqlResponse' => false,
            //         'data' => $exData[0],
            //     ]);
            // }
        }
    }

    public function update(Request $r){
        if ($this->isValid($r)->fails()) {
            return response()->json([
                'valid' => false,
                'errors' => $this->isValid($r)->errors()->all(),
            ]);
        } else {
            try {
                $oldkdsatuan = $r->txtKdSatuanOld;
                $data = [
                    'kdSatuan' => $r->txtKdSatuan,
                    'namaSatuan' => $r->txtNamaSatuan,
                ];
                satuanModel::query()
                ->where('kdSatuan','=',$oldkdsatuan)
                ->update($data);
                return response()->json([
                    'valid' => true,
                    'sqlResponse' => true,
                    'data' => $data,
                    'key' => $oldkdsatuan
                ]);
            } catch (\Exception $th) {
                //throw $th;
                $exData = explode('(', $th->getMessage());
                return response()->json([
                    'valid' => true,
                    'sqlResponse' => false,
                    'data' => $exData[0],
                ]);
            }
        }
    }

    public function delete(Request $r){
        try {
            //code...
            $kdSatuan = $r->input('kdSatuan');
            satuanModel::query()
            ->where('kdSatuan','=',$kdSatuan)
            ->delete();
            return response()->json([
                'sqlResponse' => true,
                'data' => $kdSatuan,
            ]);
        } catch (\Exception $th) {
            //throw $th;
            $exData = explode('(', $th->getMessage());
            return response()->json([
                'sqlResponse' => false,
                'data' => $exData[0],
            ]);
        }
    }
}
