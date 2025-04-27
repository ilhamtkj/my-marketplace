<?php

namespace App\Models;

use CodeIgniter\Model;

class DistributorModel extends Model
{
    protected $table = 'distributors';
    protected $primaryKey = 'id';
    
    protected $useTimestamps = false;

    protected $allowedFields = ['user_id', 'company_name'];
    protected $returnType = 'array';

    /**
     * untuk mengambil id dan company_name dari table producers
     * berdasarkan id dari tabel users
     * @param int $userId id dari tabel user
     * @return array id dan company_name
     */
    public function getCompanyName($userId)
    {
        return $this->db->table('users')
            ->select('distributors.id, distributors.company_name')
            ->join('distributors', 'users.id = distributors.user_id')
            ->where('users.id', $userId)
            ->get()
            ->getRowArray();
    }

    public function createDistributor($data)
    {
        $this->insert($data);
    }
}
