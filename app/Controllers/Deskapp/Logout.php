<?php 
	namespace App\Controllers\Deskapp;
	use App\Controllers\BaseController;
	/**
	 * end session controller
	 */
	class Logout extends BaseController
	{
		 public function index()
	    {
	        $session = session();
	        $session->destroy();
	        return redirect()->to('./deskapp/login');
	    }
		
	}