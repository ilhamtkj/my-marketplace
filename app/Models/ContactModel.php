<?php

namespace App\Models;

use CodeIgniter\Model;

class ContactModel extends Model
{
    protected $table = 'contact';
    protected $primaryKey = 'id';

    // tidak ada created_at, updated_at atau deleted_at
    protected $useTimestamps = false;

    protected $allowedFields = ['producer_id', 'contact_type_id', 'contact'];
    protected $returnType = 'array';

    public function getAllContact($role_id)
    {
        return $this->db->table('contacts')
            ->select('contact_types.contact_type, contacts.contact')
            ->join('contact_types', 'contacts.contact_type_id = contact_types.id')
            ->where('contacts.producer_id', $role_id)
            ->get()
            ->getResultArray();
    }
}
