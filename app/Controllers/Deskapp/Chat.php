<?php 
	namespace App\Controllers\Deskapp;
	use App\Controllers\BaseController;
	/**
	 * chat controller
	 */
	class Chat extends BaseController
	{
		
		public function index($value='')
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/chat/chat',$data);
		}
	}