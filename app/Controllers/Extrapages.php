<?php 
	namespace App\Controllers;
	use CodeIgniter\Controller;
	/**
	 * extra pages controller
	 */
	class Extrapages extends BaseController
	{
		public function blank(){
			return view('deskapp/extra-pages/blank');
		}
		public function blog()
		{	
			return view('deskapp/extra-pages/blog');
		}
		public function blog_detail()
		{	
			return view('deskapp/extra-pages/blog-detail');
		}
		public function contact_directory()
		{
			return view('deskapp/extra-pages/contact-directory');
		}
		public function faq()
		{
			return view('deskapp/extra-pages/faq');
		}
		public function gallery()
		{
			return view('deskapp/extra-pages/gallery');
		}
		public function pricing()
		{
			return view('deskapp/extra-pages/pricing-table');
		}
		public function product_detail()
		{
			return view('deskapp/extra-pages/product-detail');
		}
		public function product(){
			return view('deskapp/extra-pages/product');
		}
		public function profile()
		{
			return view('deskapp/extra-pages/profile');
		}
	}