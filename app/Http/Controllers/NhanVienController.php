<?php

namespace App\Http\Controllers;

use App\Models\NhanVien;
use Illuminate\Http\Request;

class NhanVienController extends Controller
{
    public function index()
    {
        return view('nhan_vien');
    }

    public function getData()
    {
        $data   = NhanVien::join('chuc_vus', 'chuc_vus.id', 'nhan_viens.id_chuc_vu')
                        ->select('nhan_viens.*', 'chuc_vus.ten_chuc_vu')
                        ->get(); // get là ra 1 danh sách

        return response()->json([
            'nhan_vien'  =>  $data,
        ]);
    }

    public function searchNhanVien(Request $request)
    {
        $key = "%" . $request->abc . "%";

        $data   = NhanVien::join('chuc_vus', 'chuc_vus.id', 'nhan_viens.id_chuc_vu')
                          ->where('nhan_viens.ho_va_ten', 'like', $key)
                          ->select('nhan_viens.*', 'chuc_vus.ten_chuc_vu')
                          ->get();

        return response()->json([
            'nhan_vien'  =>  $data,
        ]);
    }
}
