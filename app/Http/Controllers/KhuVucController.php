<?php

namespace App\Http\Controllers;

use App\Models\KhuVuc;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

    //B24
    public function deleteKhuVuc($id)
    {
        try {
            KhuVuc::where('id', $id)->delete();

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
