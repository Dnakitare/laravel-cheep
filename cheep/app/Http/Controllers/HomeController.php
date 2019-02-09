<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index() {

//		be very careful with the all() as it grabs every row in the table
		$messages = Message::all();


		return view('home', [
			'messages' => $messages
		]);
	}
}
