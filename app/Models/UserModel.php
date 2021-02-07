<?php 
    namespace App\Models;
    use CodeIgniter\Model;
    class UserModel extends Model{
        protected $table = 'users';
        protected $allowedFields = ['user_name','user_email','FullName','Gender','Avatar','Telephone','user_password','user_created_at'];
    }