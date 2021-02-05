<?php 
	namespace App\Controllers;
	use CodeIgniter\Controller;
	/**
	 * error pages controller
	 */
	class Error extends BaseController
	{
		
		public function error_400(){
			return view('deskapp/error-pages/400');
		}
		public function error_403(){
			return view('deskapp/error-pages/403');
		}
		public function error_404(){
			return view('deskapp/error-pages/400');
		}
		public function error_500(){
			return view('deskapp/error-pages/500');
		}
		public function error_503(){
			return view('deskapp/error-pages/400');
		}
	}