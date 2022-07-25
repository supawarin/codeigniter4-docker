<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}


	# http://example.com/news/latest/10
	# http://example.com/[controller-class]/[controller-method]/[arguments]
	//--------------------------------------------------------------------

}
