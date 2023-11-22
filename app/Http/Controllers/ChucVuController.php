<?php

namespace App\Http\Controllers;

use App\Models\ChucVu;
use Illuminate\Http\Request;

class ChucVuController extends Controller
{
    public function index()
    {
        return view('chuc_vu');
    }

    public function getData()
    {
        $data   = ChucVu::get(); // get là ra 1 danh sách

        return response()->json([
            'chuc_vu'  =>  $data,
        ]);
    }

    public function searchChucVu(Request $request)
    {
        $key = "%" . $request->abc . "%";

        $data   = ChucVu::where('ten_chuc_vu', 'like', $key)
                        ->get(); // get là ra 1 danh sách

        return response()->json([
            'chuc_vu'  =>  $data,
        ]);
    }

    public function createChucVu(Request $request)
    {
        ChucVu::create([
            'ten_chuc_vu'      => $request->ten_chuc_vu,
            'tinh_trang'       => $request->tinh_trang,
        ]);

        return response()->json([
            'status'            =>   true,
            'message'           =>   'Đã tạo mới chức vụ thành công!',
        ]);
    }
}
