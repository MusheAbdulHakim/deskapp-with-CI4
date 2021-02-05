<?php 
	namespace App\Controllers;
	use CodeIgniter\Controller;
	/**
	 * charts controller
	 */
	class Charts extends BaseController
	{
		
		public function apexcharts()
		{
			return view('deskapp/chart/apexcharts');
		}
		public function highchart()
		{					
			return view('deskapp/chart/highchart');
		}
		public function jvectormap()
		{
			return view('deskapp/chart/jvectormap');	
		}
		public function knobchart()
		{
			return view('deskapp/chart/knob-chart');
		}
	}