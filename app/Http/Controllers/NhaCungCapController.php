<?php

namespace App\Http\Controllers;

use App\Models\NhaCungCap;
use Illuminate\Http\Request;

class NhaCungCapController extends Controller
{
    public function index()
    {
        return view('nha_cung_cap');
    }

    public function getData()
    {
        $data   = NhaCungCap::get();

        return response()->json([
            'nha_cung_cap'  =>  $data,
        ]);
    }
}
