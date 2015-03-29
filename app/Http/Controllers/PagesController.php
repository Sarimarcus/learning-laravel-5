<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about()
	{
		$people = [
			'Maria Suarez', 'Yvain Jury', 'Bob Marley'
		];
		return view('pages.about', compact('people'));
	}

	public function contact()
	{
		return view('pages.contact');
	}

}
