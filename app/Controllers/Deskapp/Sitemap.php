<?php 
	namespace App\Controllers\Deskapp;
	use App\Controllers\BaseController;
	/**
	 * sitemap controller
	 */
	class Sitemap extends BaseController
	{
		
		public function index()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/sitemap/sitemap',$data);
		}
	}