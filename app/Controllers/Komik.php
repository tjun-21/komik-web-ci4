<?php

namespace App\Controllers;

use App\Models\KomikModel;

class Komik extends BaseController
{
    // membuat komik model supaya dapat diakses semua function 
    protected $komikModel;


    public function __construct()
    {
        // load model 
        $this->komikModel = new KomikModel();
    }
    public function index()
    {
        // ambil semua data komik 
        // $komik = $this->komikModel->findAll();
        $data = [
            'title' => 'Komik Indo',
            'komik' => $this->komikModel->getKomik()
        ];

        return view('komik/v_index', $data);
    }

    public function detail($slug)
    {

        $data = [
            'title' => 'Komik Detail',
            'komik' => $this->komikModel->getKomik($slug)
        ];

        // jika judul komik tidak ditemukan 
        if (empty($data['komik'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Juduk komik ' . $slug . ' tidak ditemukan');
        }

        return view('komik/v_detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data Komik'
        ];

        return view('komik/v_create', $data);
    }

    public function save()
    {
        $slug = url_title($this->request->getVar('judul'), '-', true);
        $this->komikModel->save([
            'komik_nama' => $this->request->getVar('judul'),
            'komik_slug' => $slug,
            'komik_gambar' => $this->request->getVar('sampul'),
            'komik_penerbit' => $this->request->getVar('penerbit'),
            'penulis' => $this->request->getVar('penulis')

        ]);

        session()->setFlashdata('pesan', 'Data Berhasil di Tambahkan.');

        return redirect()->to('/komik');
    }
}
