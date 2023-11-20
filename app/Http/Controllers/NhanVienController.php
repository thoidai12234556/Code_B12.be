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

    public function createNhanVien(Request $request)
    {
        NhanVien::create([
            'ho_va_ten'         => $request->ho_va_ten,
            'email'             => $request->email,
            'password'          => $request->password,
            'so_dien_thoai'     => $request->so_dien_thoai,
            'dia_chi'           => $request->dia_chi,
            'id_chuc_vu'        => $request->id_chuc_vu,
            'tinh_trang'        => $request->tinh_trang,
        ]);

        return response()->json([
            'status'            =>   true,
            'message'           =>   'Đã tạo mới nhân viên thành công!',
        ]);
    }
}
