<?php 
	namespace App\Controllers;
	use CodeIgniter\Controller;
	/**
	 * calendar controller
	 */
	class Calendar extends BaseController
	{
		
		public function index() {
			return view('deskapp/calendar/calendar');
		}
	}