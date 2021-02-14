<?php 
	namespace App\Controllers\Deskapp;
	use App\Controllers\BaseController;
	/**
	 * documentation controller
	 */
	class Docs extends BaseController
	{
		
		public function index()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/documentation/introduction',$data);
		}
		public function introduction()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/documentation/introduction',$data);
		}
		public function getting_started()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/documentation/getting-started',$data);
		}
		public function color_settings()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/documentation/color-settings',$data);
		}
		public function third_party_plugins()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/documentation/third-party-plugins',$data);
		}
	}