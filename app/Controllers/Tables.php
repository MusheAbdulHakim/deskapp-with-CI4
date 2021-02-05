<?php 
	namespace App\Controllers;
	use CodeIgniter\Controller;
	/**
	 * tables controller
	 */
	class Tables extends BaseController
	{
		
		public function index()
		{
			return view('deskapp/tables/basic-table');
		}
		public function basic($value='')
		{
			return view('deskapp/tables/basic-table');
		}
		public function datatable($value='')
		{
			return view('deskapp/tables/datatable');
		}
	}