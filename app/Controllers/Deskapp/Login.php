<?php 
	namespace App\Controllers\Deskapp;
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
	        $data = $model->where('username', $username)->first();
	        if($data){
	            $pass = $data['password'];
	            $verify_pass = password_verify($password, $pass);
	            if($verify_pass){
	                $ses_data = [
	                    'id'       => $data['id'],
	                    'username'     => $data['username'],
	                    'email'    => $data['email'],
	                    'firstname' => $data['firstname'],
	                    'lastname' => $data['lastname'],
	                    'logged_in'     => TRUE
	                ];
	                $session->set($ses_data);
	                return redirect()->to('./deskapp/dashboard');
	            }else{
	                $session->setFlashdata('msg', 'Wrong Password');
	                return redirect()->to('./deskapp/login');
	            }
	        }else{
	            $session->setFlashdata('msg', 'Username not Found');
	            return redirect()->to('./deskapp/login');
	        }
	    }

	   
    }