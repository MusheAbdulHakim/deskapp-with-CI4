<?php 
	namespace App\Controllers;
	use CodeIgniter\Controller;
	/**
	 * forms controller
	 */
	class Forms extends BaseController
	{
		
		public function index() {
			return view('deskapp/forms/form-basic');
		}
		public function basic() {
			return view('deskapp/forms/form-basic');
		}
		public function advance() {
			return view('deskapp/forms/advanced-components');
		}
		public function pickers() {
			return view('deskapp/forms/form-pickers');
		}
		public function wizard() {
			return view('deskapp/forms/form-wizard');
		}
		public function html5Editor() {
			return view('deskapp/forms/html5-editor');
		}
		public function imageCropper() {
			return view('deskapp/forms/image-cropper');
		}
		public function imageDropZone() {
			return view('deskapp/forms/image-dropzone');
		}
	}