<?php

namespace App\Http\Controllers;

use App\Models\KhuVuc;
use Illuminate\Http\Request;

class KhuVucController extends Controller
{
    public function index()
    {
        return view('khu_vuc');
    }

    public function getData()
    {
        $data   = KhuVuc::select('id',   'ten_khu', 'slug_khu', 'tinh_trang')
                         ->get(); // get là ra 1 danh sách
        return response()->json([
            'khu_vuc'  =>  $data,
        ]);
    }
}
