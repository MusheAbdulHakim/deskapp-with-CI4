<?php
 namespace App\Controllers;
 use App\Controllers\BaseController;
 /**
  * 
  */
 class Dashboard extends BaseController
 {
 	
 	public function index($value='')
 	{
 		$session = session();
 		$data['username'] = $session->get('user_name');
 		echo view('deskapp/dashboard/index',$data);
 	}
 	public function one($value='')
 	{
 		$session = session();
 		$data['username'] = $session->get('user_name');
 		echo view('deskapp/dashboard/index2',$data);
 	}
 	public function two($value='')
 	{
 		$session = session();
 		$data['username'] = $session->get('user_name');
 		echo view('deskapp/dashboard/index3',$data);
 	}
 	
 }