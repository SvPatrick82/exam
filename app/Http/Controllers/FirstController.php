<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
	public function index()
	{
		$title = 'Title';
		return view('main.index',compact('title'));
	}

	public function contacts()
	{
		return view('main.contacts');
	}

}
