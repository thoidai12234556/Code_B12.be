<?php

namespace App\Http\Controllers;

use App\Models\Ban;
use Illuminate\Http\Request;

class BanController extends Controller
{
    public function index()
    {
        return view('ban');
    }

    public function getData()
    {
        $data   = Ban::select('id', 'ten_ban', 'slug_ban', 'id_khu_vuc', 'tinh_trang')
                         ->get(); // get là ra 1 danh sách
        return response()->json([
            'ban'  =>  $data,
        ]);
    }
}
