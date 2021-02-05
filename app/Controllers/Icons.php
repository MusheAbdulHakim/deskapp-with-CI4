<?php 
	namespace App\Controllers;
	use CodeIgniter\Controller;
	/**
	 * icons controller
	 */
	class Icons extends BaseController
	{
		
		public function index($value='')
		{
			return view('deskapp/icons/custom-icon');
		}
		public function custom(){
			return view('deskapp/icons/custom-icon');
		}
		public function fontawesome($value='')
		{
			return view('deskapp/icons/font-awesome');
		}
		public function foundation($value='')
		{
			return view('deskapp/icons/foundation');
		}
		public function ionicons($value='')
		{
			return view('deskapp/icons/ionicons');
		}
		public function themify($value='')
		{
			return view('deskapp/icons/themify');
		}
	}