<?php 
	namespace App\Controllers;
	use CodeIgniter\Controller;
	/**
	 * sitemap controller
	 */
	class Sitemap extends BaseController
	{
		
		public function index($value='')
		{
			return view('deskapp/sitemap/sitemap');
		}
	}