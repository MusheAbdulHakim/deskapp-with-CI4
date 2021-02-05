<?php 
	namespace App\Controllers;
	use CodeIgniter\Controller;
	/**
	 * additional pages controller
	 */
	class Additionalpages extends BaseController
	{
		
		public function videoplayer()
		{
			return view('deskapp/additional-pages/video-player');
		}
		public function login()
		{
			return view('deskapp/additional-pages/login');
		}
		public function register()
		{
			return view('deskapp/additional-pages/register');
		}
		public function reset_password()
		{
			return view('deskapp/additional-pages/reset-password');
		}
		public function forgot_password()
		{	
			return view('deskapp/additional-pages/forgot-password');
		}
	}