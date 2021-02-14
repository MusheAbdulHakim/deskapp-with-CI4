<?php 
	namespace App\Controllers\Deskapp;
	use App\Controllers\BaseController;
	/**
	 * charts controller
	 */
	class Charts extends BaseController
	{
		
		public function apexcharts()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/chart/apexcharts',$data);
		}
		public function highchart()
		{	
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/chart/highchart',$data);
		}
		public function jvectormap()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/chart/jvectormap',$data);	
		}
		public function knobchart()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/chart/knob-chart',$data);
		}
	}