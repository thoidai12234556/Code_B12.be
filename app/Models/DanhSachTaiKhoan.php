<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhSachTaiKhoan extends Model
{
    use HasFactory;
    protected $table = 'danh_sach_tai_khoans';

    protected $fillable = [
        'ten_dang_nhap',
        'password',
        'email',
        'tinh_trang',
    ];
}
