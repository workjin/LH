<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Lottery_result;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //中奖结果

    
    //加入换成各个板块



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $lot_result = Lottery_result::orderBy('issue_num', 'desc')->get();
        //对应色彩放在js
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages.welcome')->withPosts($posts)->withResults($lot_result);
    }

    //如未登录 转接到登录
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
}
