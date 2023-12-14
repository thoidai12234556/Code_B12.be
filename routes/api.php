<?php

use App\Http\Controllers\BanController;
use App\Http\Controllers\ChucVuController;
use App\Http\Controllers\DanhMucController;
use App\Http\Controllers\DanhSachTaiKhoanController;
use App\Http\Controllers\FakeBookController;
use App\Http\Controllers\KhuVucController;
use App\Http\Controllers\MonAnController;
use App\Http\Controllers\NguyenLieuController;
use App\Http\Controllers\NhaCungCapController;
use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\NhapKhoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Chia các nhóm ra như sau
// Nhân Viên
Route::group(['prefix'  =>  '/admin'], function () {
    // Những gì của danh mục thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/danh-muc'], function () {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [DanhMucController::class, 'getData']);
        Route::post('/tim-danh-muc', [DanhMucController::class, 'searchDanhMuc']);
        Route::post('/tao-danh-muc', [DanhMucController::class, 'createDanhMuc']);
        //methods delete
        Route::delete('/xoa-danh-muc/{id}', [DanhMucController::class, 'deleteDanhMuc']);
    });

    // Những gì của nhân viên thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/nhan-vien'], function () {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [NhanVienController::class, 'getData']);
        Route::post('/tim-nhan-vien', [NhanVienController::class, 'searchNhanVien']);
        Route::post('/tao-nhan-vien', [NhanVienController::class, 'createNhanVien']);
        //methods delete
        Route::delete('/xoa-nhan-vien/{id}', [NhanVienController::class, 'deleteNhanVien']);
    });

    // Những gì của món ăn thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/mon-an'], function () {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [MonAnController::class, 'getData']);
        Route::post('/tao-mon-an', [MonAnController::class, 'createMonAn']);
    });

    // Những gì của nhà cung cấp thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/nha-cung-cap'], function () {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [NhaCungCapController::class, 'getData']);
    });

    // Những gì của chức vụ thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/chuc-vu'], function () {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [ChucVuController::class, 'getData']);
        Route::post('/tim-chuc-vu', [ChucVuController::class, 'searchChucVu']);
        Route::post('/tao-chuc-vu', [ChucVuController::class, 'createChucVu']);
        //methods delete
        Route::delete('/xoa-chuc-vu/{id}', [ChucVuController::class, 'deleteChucVu']);
    });

    // Những gì của chức vụ thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/ban'], function () {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [BanController::class, 'getData']);
        Route::post('/tim-ban', [BanController::class, 'searchBan']);
        Route::post('/tao-ban', [BanController::class, 'createBan']);
        //methods delete
        Route::delete('/xoa-ban/{id}', [BanController::class, 'deleteBan']);
    });

    // Những gì của chức vụ thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/khu-vuc'], function () {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [KhuVucController::class, 'getData']);
        Route::post('/tim-khu-vuc', [KhuVucController::class, 'searchKhuVuc']);
        Route::post('/tao-khu-vuc', [KhuVucController::class, 'createKhuVuc']);
        //methods delete
        Route::delete('/xoa-khu-vuc/{id}', [KhuVucController::class, 'deleteKhuVuc']);
    });

    //B26
    // Những gì của Danh Sách Tài Khoản thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/tai-khoan'], function () {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [DanhSachTaiKhoanController::class, 'getData']);
        Route::post('/tao-tai-khoan', [DanhSachTaiKhoanController::class, 'createTaiKhoan']);
    });

    //B26
    // Những gì của Fakebook thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/fake-book'], function () {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [FakeBookController::class, 'getData']);
        Route::post('/tao-fake-book', [FakeBookController::class, 'createFakeBook']);
    });

    // Những gì của chức vụ thì ta sẽ nhét ở group này
    Route::group(['prefix'  =>  '/nguyen-lieu'], function () {
        // Lấy dữ liệu  -> get
        Route::get('/lay-du-lieu', [NguyenLieuController::class, 'getData']);
        Route::post('/tim-nguyen-lieu', [NguyenLieuController::class, 'searchNguyenLieu']);
        Route::post('/tao-nguyen-lieu', [NguyenLieuController::class, 'createNguyenLieu']);
        //methods delete
        Route::delete('/xoa-nguyen-lieu/{id}', [NguyenLieuController::class, 'deleteNguyenLieu']);
    });

    Route::group(['prefix'  =>  '/nhap-kho'], function () {
        Route::get('/lay-du-lieu', [NhapKhoController::class, 'getData']);
        //B24
        Route::post('/tao-nhap-kho', [NhapKhoController::class, 'createNhapKho']);
        //methods delete
        Route::delete('/xoa-nhap-kho/{id}', [NhapKhoController::class, 'deleteNhapKho']);
    });



});
