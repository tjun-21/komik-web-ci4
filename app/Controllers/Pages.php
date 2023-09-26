<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | TJ Website',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        // echo view('layouts/v_header', $data);
        return view('pages/v_home', $data);
        // echo view('layouts/v_footer');
    }

    public function about()
    {
        $data = [
            'title' => 'About | TJ Website'
        ];
        // echo view('layouts/v_header', $data);
        return view('pages/v_about', $data);
        // echo view('layouts/v_footer');
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us | Tj Website',
            'dataa' => [
                [
                    'nama' => 'Tajun Nur',
                    'alamat' => 'Aceh Tamiang',
                    'email' => 'tajun@mail.com'
                ],
                [
                    'nama' => 'Stevan Al',
                    'alamat' => 'Bandung',
                    'email' => 'stev@mail.com'
                ]
            ]
        ];

        return view('pages/v_contact', $data);
    }
}
