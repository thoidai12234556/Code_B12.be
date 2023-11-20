<?php

namespace App\Http\Controllers;

use App\Models\NhapKho;
use Illuminate\Http\Request;

class NhapKhoController extends Controller
{
    public function index()
    {
        return view('nguyen_lieu');
    }

    public function getData()
    {
        $data   = NhapKho::join('nguyen_lieus', 'id_nguyen_lieu', 'nguyen_lieus.id')
                         ->select('nhap_kho.*', 'nguyen_lieus.ten_nguyen_lieu')
                         ->get(); // get là ra 1 danh sách
        return response()->json([
            'nguyen_lieu'  =>  $data,
        ]);
    }
}
