<?php 
	namespace App\Controllers;
	use CodeIgniter\Controller;
	/**
	 * end session controller
	 */
	class Logout extends BaseController
	{
		 public function index()
	    {
	        $session = session();
	        $session->destroy();
	        return redirect()->to('./public/login');
	    }
		
	}