<?php

namespace App\Http\Controllers;

use App\Models\DanhMuc;
use Illuminate\Http\Request;

class DanhMucController extends Controller
{
    public function index()
    {
        return view('danh_muc');
    }

    public function getData()
    {
        $data   = DanhMuc::select('id', 'ten_danh_muc', 'slug_danh_muc', 'tinh_trang', 'id_danh_muc_cha')
                         ->get(); // get là ra 1 danh sách

        return response()->json([
            'danh_muc'  =>  $data,
        ]);
    }

    public function searchDanhMuc(Request $request)
    {
        $key = "%" . $request->abc . "%";

        $data   = DanhMuc::select('id', 'ten_danh_muc', 'slug_danh_muc', 'tinh_trang', 'id_danh_muc_cha')
                            ->where('ten_danh_muc', 'like', $key)
                            ->get();

        return response()->json([
            'danh_muc'  =>  $data,
        ]);
    }
}
