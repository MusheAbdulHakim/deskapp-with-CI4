<?php 
	namespace App\Controllers\Deskapp;
	use App\Controllers\BaseController;
	/**
	 * tables controller
	 */
	class Tables extends BaseController
	{
		
		public function index()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/tables/basic-table',$data);
		}
		public function basic()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/tables/basic-table',$data);
		}
		public function datatable()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/tables/datatable',$data);
		}
	}