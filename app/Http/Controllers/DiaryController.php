<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Diary;

class DiaryController extends Controller
{
    function index() {
        // モデルを経由してDBからデータを取得する
        $diaries = Diary::all()->toArray();
        // SELECT * FROM diaries WHERE 1
        // dd($diaries); // dump and die
        return view('diaries.index', ['diaries' => $diaries]);
    }
    
    function showCreateForm() {
        return view('diaries.create');
    }

    function store(Request $request) { // $requestは$_POSTと同じ
        $diary = new Diary();

        $diary->title = $request->title;
        $diary->body = $request->body;
        $diary->save();
        // INSERT INTO diaries SET 'title'=$request->title

        return redirect()->route('diary.index');
    }
}













