<?php 
	namespace App\Controllers\Deskapp;
	use App\Controllers\BaseController;
	/**
	 * icons controller
	 */
	class Icons extends BaseController
	{
		
		public function index()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/icons/custom-icon',$data);
		}
		public function custom(){
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/icons/custom-icon',$data);
		}
		public function fontawesome()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/icons/font-awesome',$data);
		}
		public function foundation()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/icons/foundation',$data);
		}
		public function ionicons()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/icons/ionicons',$data);
		}
		public function themify()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/icons/themify',$data);
		}
	}