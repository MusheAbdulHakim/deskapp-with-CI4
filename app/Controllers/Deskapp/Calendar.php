<?php 
	namespace App\Controllers\Deskapp;
	use App\Controllers\BaseController;
	/**
	 * calendar controller
	 */
	class Calendar extends BaseController
	{
		
		public function index() {
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/calendar/calendar',$data);
		}
	}