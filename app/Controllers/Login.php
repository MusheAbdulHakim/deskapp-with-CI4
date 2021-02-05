<?php 
	namespace App\Controllers;
	use App\Controllers\BaseController;
    use App\Models\UserModel;

    /**
     * 
     */
    class Login extends BaseController
    {
    	
	    	public function index()
	    {
	        helper(['form']);
	        echo view('deskapp/auth/login');
	    } 

	    public function auth()
	    {
	        $session = session();
	        $model = new UserModel();
	        $username = $this->request->getPost('username');
	        $password = $this->request->getPost('password');
	        $data = $model->where('user_name', $username)->first();
	        if($data){
	            $pass = $data['user_password'];
	            $verify_pass = password_verify($password, $pass);
	            if($verify_pass){
	                $ses_data = [
	                    'user_id'       => $data['user_id'],
	                    'user_name'     => $data['user_name'],
	                    'user_email'    => $data['user_email'],
	                    'logged_in'     => TRUE
	                ];
	                $session->set($ses_data);
	                return redirect()->to('./public/dashboard');
	            }else{
	                $session->setFlashdata('msg', 'Wrong Password');
	                return redirect()->to('./public/login');
	            }
	        }else{
	            $session->setFlashdata('msg', 'Username not Found');
	            return redirect()->to('./public/login');
	        }
	    }

	   
    }