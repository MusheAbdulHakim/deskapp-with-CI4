<?php 
	namespace App\Controllers\Deskapp;
	use App\Controllers\BaseController;
	/**
	 * forgot password controller
	 */
	class Forgotpassword extends BaseController
	{
		
		public function index()
		{
			return view('deskapp/auth/forgot-password');
		}
	}