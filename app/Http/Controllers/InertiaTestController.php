<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\InertiaTest;

class InertiaTestController extends Controller
{
    public function index(){
        return Inertia::render('Inertia/Index');
    }

    public function create(){
        return Inertia::render('Inertia/Create');
    }

    public function show($id){
        return Inertia::render('Inertia/Show', ['id' => $id]);
    }

    public function store(Request $request){
        // 0910 Laravel側でのみバリデーション objectで戻される
        $request->validate([
            'title' => ['required', 'max:8'],
            'content' => ['required'],
        ]);
        

        $inertiaTest = new InertiaTest; //インスタンス化
        $inertiaTest->title = $request->title;
        $inertiaTest->content = $request->content;
        $inertiaTest->save();

        //リダイレクト Laravel:9から
        return to_route('inertia.index')
        ->with([
            'message' => '登録しました'
        ]);
    }
}
