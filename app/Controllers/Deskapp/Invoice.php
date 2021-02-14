<?php 
	namespace App\Controllers\Deskapp;
	use App\Controllers\BaseController;
	/**
	 * invoice page controller
	 */
	class Invoice extends BaseController
	{
		
		public function index()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/invoice/invoice',$data);
		}
	}