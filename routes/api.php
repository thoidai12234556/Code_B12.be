<?php

use App\Http\Controllers\BanController;
use App\Http\Controllers\ChucVuController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\KhuVucController;
use App\Http\Controllers\NguyenLieuController;
use App\Http\Controllers\NhanVienController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Chia các nhóm ra như sau
// Nhân Viên
Route::group(['prefix'  =>  '/admin'], function() {
    // Những gì của danh mục thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/danh-muc'], function() {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [DanhMucController::class, 'getData']);
    });

    // Những gì của nhân viên thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/nhan-vien'], function() {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [NhanVienController::class, 'getData']);
    });

    // Những gì của chức vụ thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/chuc-vu'], function() {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [ChucVuController::class, 'getData']);
    });

    // Những gì của chức vụ thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/ban'], function() {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [BanController::class, 'getData']);
    });

    // Những gì của chức vụ thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/khu-vuc'], function() {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [KhuVucController::class, 'getData']);
    });

    // Những gì của chức vụ thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/nguyen-lieu'], function() {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [NguyenLieuController::class, 'getData']);
    });
});

