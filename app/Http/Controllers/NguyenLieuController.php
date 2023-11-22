<?php

namespace App\Http\Controllers;

use App\Models\NguyenLieu;
use Illuminate\Http\Request;

class NguyenLieuController extends Controller
{
    public function index()
    {
        return view('nguyen_lieu');
    }

    public function getData()
    {
        $data   = NguyenLieu::select('id',  'ten_nguyen_lieu', 'slug_nguyen_lieu', 'so_luong', 'gia', 'dvt', 'tinh_trang')
                            ->get(); // get là ra 1 danh sách

        return response()->json([
            'nguyen_lieu'  =>  $data,
        ]);
    }

    public function searchNguyenLieu(Request $request)
    {
        $key = '%' . $request->abc . '%';

        $data   = NguyenLieu::where('ten_nguyen_lieu', 'like', $key)
                            ->get(); // get là ra 1 danh sách

        return response()->json([
            'nguyen_lieu'  =>  $data,
        ]);
    }

    public function createNguyenLieu(Request $request)
    {
        NguyenLieu::create([
            'ten_nguyen_lieu'       => $request->ten_nguyen_lieu,
            'slug_nguyen_lieu'      => $request->slug_nguyen_lieu,
            'so_luong'              => $request->so_luong,
            'gia'                   => $request->gia,
            'dvt'                   => $request->dvt,
            'tinh_trang'            => $request->tinh_trang,
        ]);

        return response()->json([
            'status'            =>   true,
            'message'           =>   'Đã tạo mới danh mục thành công!',
        ]);
    }
}
