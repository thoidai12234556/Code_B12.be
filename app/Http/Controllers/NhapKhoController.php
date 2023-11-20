<?php

namespace App\Http\Controllers;

use App\Models\NhapKho;
use Illuminate\Http\Request;

class NhapKhoController extends Controller
{
    public function index()
    {
        return view('nhap_kho');
    }

    public function getData()
    {
        $data   = NhapKho::join('nguyen_lieus', 'id_nguyen_lieu', 'nguyen_lieus.id')
                         ->select('nhap_khos.*', 'nguyen_lieus.ten_nguyen_lieu')
                         ->get(); // get là ra 1 danh sách
        return response()->json([
            'nhap_kho'  =>  $data,
        ]);
    }
}
