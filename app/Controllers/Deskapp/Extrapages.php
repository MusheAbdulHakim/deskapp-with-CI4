<?php 
	namespace App\Controllers\Deskapp;
	use App\Controllers\BaseController;
	/**
	 * extra pages controller
	 */
	class Extrapages extends BaseController
	{
		public function blank(){
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/extra-pages/blank',$data);
		}
		public function blog()
		{	
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/extra-pages/blog',$data);
		}
		public function blog_detail()
		{	
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/extra-pages/blog-detail',$data);
		}
		public function contact_directory()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/extra-pages/contact-directory',$data);
		}
		public function faq()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/extra-pages/faq',$data);
		}
		public function gallery()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/extra-pages/gallery',$data);
		}
		public function pricing()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/extra-pages/pricing-table',$data);
		}
		public function product_detail()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/extra-pages/product-detail',$data);
		}
		public function product(){
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/extra-pages/product',$data);
		}
		public function profile()
		{
			$session = session();
			$data['session'] = \Config\Services::session();
 			$data['username'] = $session->get('user_name');
			return view('deskapp/extra-pages/profile',$data);
		}
	}