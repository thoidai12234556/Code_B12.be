<?php

use App\Http\Controllers\DanhMucController;
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

    });

    // Những gì của chức vụ thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/chuc-vu'], function() {

    });
});

