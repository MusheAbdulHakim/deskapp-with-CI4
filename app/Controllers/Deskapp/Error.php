<?php 
	namespace App\Controllers\Deskapp;
	use App\Controllers\BaseController;
	/**
	 * error pages controller
	 */
	class Error extends BaseController
	{
		
		public function error_400(){
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/error-pages/400',$data);
		}
		public function error_403(){
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/error-pages/403',$data);
		}
		public function error_404(){
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/error-pages/400',$data);
		}
		public function error_500(){
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/error-pages/500',$data);
		}
		public function error_503(){
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/error-pages/400',$data);
		}
	}