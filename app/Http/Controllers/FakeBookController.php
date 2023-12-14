<?php

namespace App\Http\Controllers;

use App\Models\FakeBook;
use Illuminate\Http\Request;

class FakeBookController extends Controller
{
    public function index()
    {
        return view('fake_book');
    }

    public function getData()
    {
        $data   = FakeBook::get(); // get là ra 1 danh sách

        return response()->json([
            'fake_book'  =>  $data,
        ]);
    }

    public function createFakeBook(Request $request)
    {
        FakeBook::create([
            'id_user'      => $request->id_user,
            'content_stt'  => $request->content_stt,
            'image'        => $request->image,
        ]);

        return response()->json([
            'status'            =>   true,
            'message'           =>   'Đã tạo mới thành công!',
        ]);
    }
}
