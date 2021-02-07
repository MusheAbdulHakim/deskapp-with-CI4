<?php 
    namespace App\Controllers\Deskapp;
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
                'confirm_password'  => 'matches[password]',
                'fullname'=> 'required|min_length[5]|max_length[100]',
                'gender'=> 'required|max_length[20]',
                'phone'=> 'required|min_length[10]|max_length[20]',
                
            ];
            if($this->validate($rules)){
                $model = new UserModel();
                // $avatar = $this->request->getFile('avatar');
                // $avatar = new \CodeIgniter\Files\File(true);
                $data = [
                    'user_name'=>$this->request->getpost('username'),
                    'user_email'=>$this->request->getpost('email'),
                    'FullName'=>$this->request->getPost('fullname'),
                    'Gender'=>$this->request->getPost('gender'),
                    'Telephone'=>$this->request->getPost('phone'),
                    'user_password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),

                ];
                $model->save($data);
                return redirect()->to('/deskapp/login');
            }else{
                $data['validation'] = $this->validator;
                echo view('deskapp/auth/register',$data);
            }
        }
    }
    

?>    