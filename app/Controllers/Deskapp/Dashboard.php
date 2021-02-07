<?php
 namespace App\Controllers\Deskapp;
 use App\Controllers\BaseController;
 /**
  * 
  */
 class Dashboard extends BaseController
 {
 	
 	public function index()
 	{
 		$session = session();
 		$data['username'] = $session->get('user_name');
 		echo view('deskapp/dashboard/index',$data);
 	}
 	public function one()
 	{
 		$session = session();
 		$data['username'] = $session->get('user_name');
 		echo view('deskapp/dashboard/index',$data);
 	}

 	public function two()
 	{
 		$session = session();
 		$data['username'] = $session->get('user_name');
 		echo view('deskapp/dashboard/index2',$data);
 	}
 	public function three()
 	{
 		$session = session();
 		$data['username'] = $session->get('user_name');
 		echo view('deskapp/dashboard/index3',$data);
 	}
 	
 }