<?php 
	namespace App\Controllers\Deskapp;
	use App\Controllers\BaseController;
	/**
	 * additional pages controller
	 */
	class Additionalpages extends BaseController
	{
		
		public function videoplayer()
		{
			$session = session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/additional-pages/video-player',$data);
		}
		public function login()
		{
			$session = session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/additional-pages/login',$data);
		}
		public function register()
		{
			$session = session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/additional-pages/register',$data);
		}
		public function reset_password()
		{
			$session = session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/additional-pages/reset-password',$data);
		}
		public function forgot_password()
		{	
			$session = session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/additional-pages/forgot-password',$data);
		}
	}