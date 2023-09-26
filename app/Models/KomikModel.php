<?php

namespace App\Models;

use CodeIgniter\Model;

class KomikModel extends Model
{
    // initialize 
    protected $table      = 'tb_komik';
    protected $primaryKey = 'komik_id';
    protected $useTimestamps = true;
    protected $allowedFields = ['komik_nama', 'komik_slug', 'komik_gambar', 'komik_penerbit', 'penulis'];


    public function getKomik($slug = false)
    {
        // mencari apakah ada parameter yang dikirim 
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['komik_slug' => $slug])->first();
    }
}
