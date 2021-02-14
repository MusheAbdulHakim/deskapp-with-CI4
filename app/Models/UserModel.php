<?php 
    namespace App\Models;
    use CodeIgniter\Model;
    class UserModel extends Model{
        protected $table = 'users';
		protected $allowedFields = ['username','firstname','lastname','email','phone','avatar','password'];
		public function getuser()
		{
			return $this->findAll();
		}
    }