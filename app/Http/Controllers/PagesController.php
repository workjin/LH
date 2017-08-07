<?php

namespace App\Http\Controllers;

class PagesController extends Controller{

	public function getIndex(){
		return view('pages/welcome');
	}

	public function getContact(){
    	return view('pages/contact');
	}

	public function getAbout(){
		$first = 'work';
		$last = 'jin';

		$full = $first . ' ' . $last;
		$email = 'workjin1@gmail.com';

		$data['email'] = $email;
		$data['fullname'] = $full;

		//PASS USING ARRAY
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