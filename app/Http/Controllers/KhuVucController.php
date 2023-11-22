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
        $data   = KhuVuc::get(); // get là ra 1 danh sách

        return response()->json([
            'khu_vuc'  =>  $data,
        ]);
    }

    public function searchKhuVuc(Request $request)
    {
        $key = "%" . $request->abc . "%";

        $data   = KhuVuc::where('ten_khu', 'like', $key)
                         ->get(); // get là ra 1 danh sách

        return response()->json([
            'khu_vuc'  =>  $data,
        ]);
    }

    public function createKhuVuc(Request $request)
    {
        KhuVuc::create([
            'ten_khu'           => $request->ten_khu,
            'slug_khu'          => $request->slug_khu,
            'tinh_trang'        => $request->tinh_trang,
        ]);

        return response()->json([
            'status'            =>   true,
            'message'           =>   'Đã tạo mới khu vực thành công!',
        ]);
    }
}
