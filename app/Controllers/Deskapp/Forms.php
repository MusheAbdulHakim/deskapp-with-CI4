<?php 
	namespace App\Controllers\Deskapp;
	use App\Controllers\BaseController;
	/**
	 * forms controller
	 */
	class Forms extends BaseController
	{
		
		public function index() {
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/forms/form-basic',$data);
		}
		public function basic() {
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/forms/form-basic',$data);
		}
		public function advance() {
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/forms/advanced-components',$data);
		}
		public function pickers() {
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/forms/form-pickers',$data);
		}
		public function wizard() {
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/forms/form-wizard',$data);
		}
		public function html5Editor() {
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/forms/html5-editor',$data);
		}
		public function imageCropper() {
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/forms/image-cropper',$data);
		}
		public function imageDropZone() {
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/forms/image-dropzone',$data);
		}
	}