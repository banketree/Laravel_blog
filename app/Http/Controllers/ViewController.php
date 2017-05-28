<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function index()
    {
        $data = [
            'score'=>50,
            'num'=>10,
            'article'=>[
                'news 1',
                'news 2',
                'news 3',
                'news 4',
                'news 5',
            ],
            'news'=>array(),
        ];
        return view('my_laravel',compact('data'));
    }

    public function view()
    {
//        config('app.timezone');

//        测试数据库是否连接成功
//        DB::connection()->getPdo();
//        数据表操作
        DB::table('user')->get();
        DB::table('user')->where('user',1)->get();

        return view('index');
    }

    public function article()
    {
        return view('article');
    }

    public function layouts()
    {
        return view('layouts');
    }
}
