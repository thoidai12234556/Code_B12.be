<?php

namespace App\Http\Controllers;

use App\Models\NguyenLieu;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

    //B24
    public function deleteNguyenLieu($id)
    {
        try {
            NguyenLieu::where('id', $id)->delete();

            return response()->json([
                'status'            =>   true,
                'message'           =>   'Đã xóa thành công!',
            ]);
        } catch (Exception $e) {
            Log::error("Lỗi xóa Chức Vụ" . $e);
            return response()->json([
                'status'            =>   false,
                'message'           =>   'Không thể xóa!',
            ]);
        }
    }
}
