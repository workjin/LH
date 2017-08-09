<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller{

	public function getIndex(){
		$posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
		return view('pages.welcome')->withPosts($posts);
	}

	public function getContact(){
    	return view('pages/contact');
	}

	public function getAbout(){
		$first = 'jj';
		$last = 'jin';

		$full = $first . ' ' . $last;
		$email = 'jj@gmail.com';

		$data['email'] = $email;
		$data['fullname'] = $full;

		return view('pages/about')->with("data", $data);

		//MULTIPLE INSTANCES
		// return view('pages/hello')->with("fullname", $full)->with("email", $email);
		// return view('pages/hello')->withFullname($full)->withEmail($email);
	}

	public function getHello(){
		$first = 'work';
		$last = 'jin';

		$full = $first . ' ' . $last;
		$email = 'workjin1@gmail.com';

		$data['email'] = $email;
		$data['fullname'] = $full;

		//PASS USING ARRAY
		return view('pages/hello')->with("data", $data);

		//MULTIPLE INSTANCES
		// return view('pages/hello')->with("fullname", $full)->with("email", $email);
		// return view('pages/hello')->withFullname($full)->withEmail($email);
	}
}