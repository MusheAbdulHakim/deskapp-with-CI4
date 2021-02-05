<?php 
	namespace App\Controllers;
	use CodeIgniter\Controller;
	/**
	 * ui controller
	 */
	class Ui extends BaseController
	{
		public function index($value='')
		{
			return view('deskapp/ui/ui-buttons');
		}
		public function buttons($value='')
		{
			return view('deskapp/ui/ui-buttons');
		}
		public function cardsHover($value='')
		{
			return view('deskapp/ui/ui-cards-hover');
		}
		public function cards($value='')
		{
			return view('deskapp/ui/ui-cards');
		}
		public function carousel($value='')
		{
			return view('deskapp/ui/ui-carousel');
		}
		public function listgroup($value='')
		{
			return view('deskapp/ui/ui-list-group');
		}
		public function modals($value='')
		{
			return view('deskapp/ui/ui-modals');
		}
		public function notification($value='')
		{
			return view('deskapp/ui/ui-notification');
		}
		public function progressBar($value='')
		{
			return view('deskapp/ui/ui-progressbar');
		}
		public function rangeSlider($value='')
		{
			return view('deskapp/ui/ui-range-slider');
		}
		public function sweetAlert($value='')
		{
			return view('deskapp/ui/ui-sweet-alert');
		}
		public function tabs($value='')
		{
			return view('deskapp/ui/ui-tabs');
		}
		public function timeline($value='')
		{
			return view('deskapp/ui/ui-timeline');
		}
		public function tooltip($value='')
		{
			return view('deskapp/ui/ui-tooltip-popover');
		}
		public function typography($value='')
		{
			return view('deskapp/ui/ui-typography');
		}
	}
