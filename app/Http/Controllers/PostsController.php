<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// ↑DB::を使ってデータの取得をするための追記項目

class PostsController extends Controller
{
    //
    public function index(){

        $list = DB::table('posts')->get();
        // ↑データベースからデータを取りに行く記述
        return view('posts.index',['list=>$list']);
    }
}
