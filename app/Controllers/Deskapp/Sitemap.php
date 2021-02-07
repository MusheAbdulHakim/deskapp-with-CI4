<?php 
	namespace App\Controllers\Deskapp;
	use App\Controllers\BaseController;
	/**
	 * sitemap controller
	 */
	class Sitemap extends BaseController
	{
		
		public function index($value='')
		{
			$session = session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/sitemap/sitemap',$data);
		}
	}