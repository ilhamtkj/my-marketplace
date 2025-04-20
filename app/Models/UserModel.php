<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    
    protected $useTimestamps = true;
    protected $createdField = 'created_at';

    protected $allowedFields = ['email', 'password', 'role'];
    protected $returnType = 'array';

    public function getUserByEmail($email)
    {
        return $this->where('email', $email)->first();
    }
}