<?php

namespace App\Http\Controllers;

use App\Models\NhapKho;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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

    //B24
    public function createNhapKho(Request $request)
    {
        NhapKho::create([
            'id_nguyen_lieu' => $request->id
        ]);

        return response()->json([
            'status'            =>   true,
            'message'           =>   'Đã thêm thành công!!!',
        ]);
    }

    //B24
    public function deleteNhapKho($id)
    {
        try {
            NhapKho::where('id', $id)->delete();

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
