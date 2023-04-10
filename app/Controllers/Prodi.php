<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Prodi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Program Studi',
            'page' => 'kampus/v_prodi',
            'menu' => 'master-data',
            'submenu' => 'prodi'
        ];
        return view('v_template', $data);
    }
}
