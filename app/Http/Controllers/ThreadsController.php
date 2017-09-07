<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThreadsController extends Controller
{

	public function index()
	{
		return view('layouts.master');
	}

	public function show($id)
	{
		$message = "<h1>" . "This is the Threads " . "<span style='color: red'>" . $id . "</span>" ." view" . "</h1>";
		return $message;

		return view('layouts.show', compact('message'));
	}

	public function create()
	{
		$message = "<h1>" . "This is the Threads create view" . "</h1>";
		return $message;

		return view('layouts.create', compact('message'));
	}
}
