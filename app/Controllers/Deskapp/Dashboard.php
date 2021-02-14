<?php
 namespace App\Controllers\Deskapp;
 use App\Controllers\BaseController;
 use App\Models\UserModel;
 /**
  * 
  */
 class Dashboard extends BaseController
 {
 	
 	public function index()
 	{
 		$db = \Config\Database::connect();
 		$model = new UserModel();
 		$session = session();
 		$data['username'] = $session->get('user_name');
 		$data['session'] = \Config\Services::session();
 		echo view('deskapp/dashboard/index',$data);
 	}
 	public function one()
 	{
 		$session = session();
 		$data['session'] = \Config\Services::session();
 		$data['username'] = $session->get('user_name');
 		echo view('deskapp/dashboard/index',$data);
 	}

 	public function two()
 	{
 		$session = session();
 		$data['session'] = \Config\Services::session();
 		$data['username'] = $session->get('user_name');
 		echo view('deskapp/dashboard/index2',$data);
 	}
 	public function three()
 	{
 		$session = session();
 		$data['session'] = \Config\Services::session();
 		$data['username'] = $session->get('user_name');
 		echo view('deskapp/dashboard/index3',$data);
 	}
 	
 }