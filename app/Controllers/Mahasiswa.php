<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Mahasiswa',
            'page' => 'kampus/v_mahasiswa',
            'menu' => 'master-data',
            'submenu' => 'mahasiswa'
        ];
        return view('v_template', $data);
    }
}
