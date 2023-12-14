<?php

use App\Http\Controllers\BanController;
use App\Http\Controllers\ChucVuController;
use App\Http\Controllers\DangNhapController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\DanhSachTaiKhoanController;
use App\Http\Controllers\DanNhapController;
use App\Http\Controllers\FakeBookController;
use App\Http\Controllers\KhuVucController;
use App\Http\Controllers\MonAnController;
use App\Http\Controllers\NguyenLieuController;
use App\Http\Controllers\NhaCungCapController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\NhapKhoController;
use App\Http\Controllers\TestController;
use App\Models\DanhSachTaiKhoan;
use Illuminate\Support\Facades\Route;

Route::get('/', [TestController::class, 'index']);
Route::get('/admin/nhan-vien', [NhanVienController::class, 'index']);
Route::get('/admin/chuc-vu', [ChucVuController::class, 'index']);
Route::get('/admin/danh-muc', [DanhMucController::class, 'index']);
Route::get('/admin/ban', [BanController::class, 'index']);
Route::get('/admin/khu-vuc', [KhuVucController::class, 'index']);
Route::get('/admin/nguyen-lieu', [NguyenLieuController::class, 'index']);
Route::get('/admin/nhap-kho', [NhapKhoController::class, 'index']);

Route::get('/admin/mon-an', [MonAnController::class, 'index']);
Route::get('/admin/dang-nhap', [DangNhapController::class, 'index']);
Route::get('/admin/nha-cung-cap', [NhaCungCapController::class, 'index']);

//B26
Route::get('/admin/danh-sach-tai-khoan', [DanhSachTaiKhoanController::class, 'index']);
Route::get('/admin/fake-book', [FakeBookController::class, 'index']);


