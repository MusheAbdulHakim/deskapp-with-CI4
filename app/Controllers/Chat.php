<?php 
	namespace App\Controllers;
	use CodeIgniter\Controller;
	/**
	 * chat controller
	 */
	class Chat extends BaseController
	{
		
		public function index($value='')
		{
			return view('deskapp/chat/chat');
		}
	}