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
        $data   = NhanVien::select( 'id', 'ho_va_ten', 'email', 'password', 'so_dien_thoai', 'dia_chi', 'id_chuc_vu', 'tinh_trang',)
            ->get(); // get là ra 1 danh sách
        return response()->json([
            'nhan_vien'  =>  $data,
        ]);
    }
}
