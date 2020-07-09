<?php

namespace App\Http\Controllers\Api;

use App\Model\Kabupaten;
use App\Model\Provinsi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DaerahIndonesiaController extends Controller
{
    public function provinsi()
    {
        try {
            $provinsi = Provinsi::where('status', true)->get();
            return response()->json(['error' => false, 'data' => $provinsi, 'message' => 'Berhasil']);
        } catch (\Exception $e) {
            return response()->json(['error' => true, 'data' => null, 'message' => $e->getMessage()]);
        }
    }

    public function kabupaten(Request $request, $id = false) {
        try{
            if(!$id)
            {
                return response()->json(['error' => true, 'data' => null, 'message' => 'id tidak valid!']);
            }
            $kabupaten = Kabupaten::where('status', true)->where('id_provinsi', $id)->get();
            return response()->json(['error' => false, 'data' => $kabupaten, 'message' => 'Berhasil']);
        } catch (\Exception $e) {
            return response()->json(['error' => true, 'data' => null, 'message' => $e->getMessage()]);
        }
    }
}
