<?php

use App\Http\Controllers\BanController;
use App\Http\Controllers\ChucVuController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\KhuVucController;
use App\Http\Controllers\NguyenLieuController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\NhapKhoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Chia các nhóm ra như sau
// Nhân Viên
Route::group(['prefix'  =>  '/admin'], function() {
    // Những gì của danh mục thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/danh-muc'], function() {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [DanhMucController::class, 'getData']);
        Route::get('/tim-danh-muc', [DanhMucController::class, 'searchDanhMuc']);

    });

    // Những gì của nhân viên thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/nhan-vien'], function() {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [NhanVienController::class, 'getData']);
        Route::get('/tim-nhan-vien', [NhanVienController::class, 'searchNhanVien']);

    });

    // Những gì của chức vụ thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/chuc-vu'], function() {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [ChucVuController::class, 'getData']);
        Route::get('/tim-chuc-vu', [ChucVuController::class, 'searchChucVu']);
    });

    // Những gì của chức vụ thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/ban'], function() {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [BanController::class, 'getData']);
        Route::get('/tim-ban', [BanController::class, 'searchBan']);
    });

    // Những gì của chức vụ thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/khu-vuc'], function() {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [KhuVucController::class, 'getData']);
        Route::get('/tim-khu-vuc', [KhuVucController::class, 'searchKhuVuc']);
    });

    // Những gì của chức vụ thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/nguyen-lieu'], function() {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [NguyenLieuController::class, 'getData']);
        Route::get('/tim-nguyen-lieu', [NguyenLieuController::class, 'searchNguyenLieu']);
    });

    Route::group(['prefix'  =>  '/nhap-kho'], function() {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [NhapKhoController::class, 'getData']);
    });
});

