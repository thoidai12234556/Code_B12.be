<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonAn extends Model
{
    use HasFactory;

    protected $table = 'mon_ans';

    protected $fillable = [
        'ten_mon_an',
        'slug_mon_an',
        'hinh_anh',
        'gia_ban',
        'id_danh_muc',
        'tinh_trang',
    ];
}
