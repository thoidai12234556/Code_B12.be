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
        $data   = Ban::join('khu_vucs', 'khu_vucs.id', 'bans.id_khu_vuc')
                     ->select('bans.*', 'khu_vucs.ten_khu')
                     ->get(); // get là ra 1 danh sách

        return response()->json([
            'ban'  =>  $data,
        ]);
    }

    public function searchBan(Request $request)
    {
        $key = "%" . $request->abc . "%";

        $data   = Ban::join('khu_vucs', 'khu_vucs.id', 'bans.id_khu_vuc')
                      ->where('bans.ten_ban', 'like', $key)
                      ->select('bans.*', 'khu_vucs.ten_khu')
                      ->get(); // get là ra 1 danh sách

        return response()->json([
            'ban'  =>  $data,
        ]);
    }
}
