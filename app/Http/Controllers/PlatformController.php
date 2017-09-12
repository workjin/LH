<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;
use App\Http\helpers;

class PlatformController extends Controller
{
// select issue_num, issue_date
// from lottery_results
// order by issue_date desc 
// limit 1;
    public function create($id_platform)
    {
    	// $id = helpers::platform_to_id($id_platform);
    	$result = DB::table('lottery_results')
    				->orderby('issue_date', 'desc')
    				->first();

    	$issue_num = $result->issue_num + 1;

        return view('posts.create')->withIssuenum($issue_num)->withPlatform($id_platform);
    }

    public function index($id_platform)
    {
        $platform = helpers::id_to_platform($id_platform);
        $posts = DB::table('posts')
        				->where('platform', $id_platform)
        				->orderby('id', 'DESC')
        				->paginate(5);
        return view('posts.index')->withPosts($posts)->withPlatform($platform)->withId($id_platform);
    }
}
