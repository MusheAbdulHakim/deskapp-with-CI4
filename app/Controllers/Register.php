<?php 
    namespace App\Controllers;
    use App\Controllers\BaseController;
    use App\Models\UserModel;
    /**
     * 
     */
    class Register extends BaseController
    {
        
       
        public function index(){
        helper(['form']);
        $data = [];
        return view('deskapp/auth/register',$data);
    }
    public function save(){
        // include the helper form
        helper(['form']);
        
        $rules = [
            'username'          => 'required|min_length[3]|max_length[20]',
            'email'         => 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.user_email]',
            'password'      => 'required|min_length[6]|max_length[200]',
            'confirm_password'  => 'matches[password]'
        ];
        if($this->validate($rules)){
            $model = new UserModel();
            $data = [
                'user_name'=>$this->request->getpost('username'),
                'user_email'=>$this->request->getpost('email'),
                'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)

            ];
            $model->save($data);
            return redirect()->to('deskapp/auth/login');
        }else{
            $data['validation'] = $this->validator;
            echo view('deskapp/auth/register',$data);
        }
    }
    }
    

?>    