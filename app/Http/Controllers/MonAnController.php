<?php

namespace App\Http\Controllers;

use App\Models\MonAn;
use Illuminate\Http\Request;

class MonAnController extends Controller
{
    public function index()
    {
        return view('mon_an');
    }

    public function getData()
    {
        $data   = MonAn::join('danh_mucs', 'danh_mucs.id', 'mon_ans.id_danh_muc')
                        ->select('mon_ans.*', 'danh_mucs.ten_danh_muc')
                        ->get(); // get là ra 1 danh sách

        return response()->json([
            'mon_an'  =>  $data,
        ]);
    }
}
