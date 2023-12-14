<?php

namespace App\Http\Controllers;

use App\Models\DanhSachTaiKhoan;
use Illuminate\Http\Request;

class DanhSachTaiKhoanController extends Controller
{
    public function index()
    {
        return view('danh-sach-tai-khoan');
    }

    public function getData()
    {
        $data   = DanhSachTaiKhoan::get(); // get là ra 1 danh sách

        return response()->json([
            'danh_sach_tai_khoan'   => $data,
        ]);
    }

    public function createTaiKhoan(Request $request)
    {
        DanhSachTaiKhoan::create([
            'ten_dang_nhap'     => $request->ten_dang_nhap,
            'password'          => $request->password,
            'email'             => $request->email,
            'tinh_trang'        => $request->tinh_trang,
        ]);

        return response()->json([
            'status'            =>   true,
            'message'           =>   'Đã tạo mới khu vực thành công!',
        ]);
    }
}
