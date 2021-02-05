<?php 
	namespace App\Controllers;
	use CodeIgniter\Controller;
	/**
	 * invoice page controller
	 */
	class Invoice extends BaseController
	{
		
		public function index()
		{
			return view('deskapp/invoice/invoice');
		}
	}