<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductModel extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $useTimestamps = true;
    protected $createdField = 'created_at';

    protected $allowedFields = ['name', 'price', 'description', 'image_path', 'is_active'];
    protected $returnType = 'array';

    /**
     * untuk mengambil semua baris dari tabel products yang aktif
     * @return array id, name, price, image_path, city
     */
    public function getAllProduct()
    {
        return $this->select('products.id, products.name, products.price, products.image_name, producers.city')
            ->join('producers', 'producers.id = products.producer_id')
            ->where('products.is_active', true)
            ->findAll();
    }

    public function getProductDetail($id)
    {
        // kode
    }
}
