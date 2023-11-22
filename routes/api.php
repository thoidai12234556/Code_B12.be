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
        Route::post('/tim-danh-muc', [DanhMucController::class, 'searchDanhMuc']);
        Route::post('/tao-danh-muc', [DanhMucController::class, 'createDanhMuc']);

    });

    // Những gì của nhân viên thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/nhan-vien'], function() {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [NhanVienController::class, 'getData']);
        Route::post('/tim-nhan-vien', [NhanVienController::class, 'searchNhanVien']);
        Route::post('/tao-nhan-vien', [NhanVienController::class, 'createNhanVien']);
    });

    // Những gì của chức vụ thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/chuc-vu'], function() {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [ChucVuController::class, 'getData']);
        Route::post('/tim-chuc-vu', [ChucVuController::class, 'searchChucVu']);
        Route::post('/tao-chuc-vu', [ChucVuController::class, 'createChucVu']);
    });

    // Những gì của chức vụ thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/ban'], function() {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [BanController::class, 'getData']);
        Route::post('/tim-ban', [BanController::class, 'searchBan']);
        Route::post('/tao-ban', [BanController::class, 'createBan']);
    });

    // Những gì của chức vụ thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/khu-vuc'], function() {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [KhuVucController::class, 'getData']);
        Route::post('/tim-khu-vuc', [KhuVucController::class, 'searchKhuVuc']);
        Route::post('/tao-khu-vuc', [KhuVucController::class, 'createKhuVuc']);
    });

    // Những gì của chức vụ thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/nguyen-lieu'], function() {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [NguyenLieuController::class, 'getData']);
        Route::post('/tim-nguyen-lieu', [NguyenLieuController::class, 'searchNguyenLieu']);
        Route::post('/tao-nguyen-lieu', [NguyenLieuController::class, 'createNguyenLieu']);
    });

    Route::group(['prefix'  =>  '/nhap-kho'], function() {
        Route::get('/lay-du-lieu', [NhapKhoController::class, 'getData']);
    });
});

