<?php

namespace App\Models;

use CodeIgniter\Model;

class ProducerModel extends Model
{
    protected $table = 'producers';
    protected $primaryKey = 'id';

    protected $useTimestamps = true;
    protected $createdField = 'created_at';

    protected $allowedFields = ['user_id', 'company_name', 'province', 'city'];
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
            ->select('producers.id, producers.company_name')
            ->join('producers', 'users.id = producers.user_id')
            ->where('users.id', $userId)
            ->get()
            ->getRowArray();
    }

    /**
     * untuk mengambil semua kolom kecuali FK dan PK di tabel producers
     * @param int $id role_id pada session atau producer id
     * @return array company_name
     */
    public function getProducerByUserId($id)
    {
        $result = $this->select('company_name, province, city')
            ->where('user_id', $id)
            ->first();

        // mengecek apakah province dan city null
        $result['province'] = $result['province'] ?? 'Belum diatur';
        $result['city'] = $result['city'] ?? 'Belum diatur';

        return $result;
    }
}
