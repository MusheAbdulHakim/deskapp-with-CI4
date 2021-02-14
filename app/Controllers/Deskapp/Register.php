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
                'username'=> 'required|min_length[3]|max_length[20]',
                'email'=> 'required|min_length[6]|max_length[50]|valid_email|is_unique[users.email]',
                'password'=> 'required|min_length[6]|max_length[200]',
                'confirm_password'=> 'matches[password]',
                'firstname'=> 'required|min_length[5]|max_length[100]',
                'lastname'=> 'required|min_length[5]|max_length[100]',
                
                'phone'=> 'required|min_length[10]|max_length[20]',

            ];
            if($this->request->getMethod()== 'post' && $this->validate($rules)){
               $model = new UserModel();
                $file = $this->request->getFile('avatar');
                $newName = $file->getRandomName();

                if (! $file->isValid())
                {
                    throw new RuntimeException($file->getErrorString().'('.$file->getError().')');
                }
               
                $data = [
                    'username'=>$this->request->getpost('username'),
                    'firstname'=>$this->request->getpost('firstname'),
                    'lastname'=>$this->request->getPost('lastname'),
                    'email'=>$this->request->getPost('email'),
                    'phone'=>$this->request->getPost('phone'),
                    'avatar'=>$newName,
                    'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),

                ];
                if ($file->isValid() && ! $file->hasMoved())
                {
                    $file->move(WRITEPATH.'uploads/avatars',$newName);
                }
                $model->save($data);
                return redirect()->to('/deskapp/login');
            }else{
                $data['validation'] = $this->validator;
                echo view('deskapp/auth/register',$data);
            }
        }
    }
    

?>    