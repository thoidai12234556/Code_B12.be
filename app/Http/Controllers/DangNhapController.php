<?php

namespace App\Http\Controllers;

use App\Models\DanNhap;
use Illuminate\Http\Request;

class DangNhapController extends Controller
{
    public function index()
    {
        return view('dang_nhap');
    }
}
