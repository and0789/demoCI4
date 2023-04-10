<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dosen extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dosen',
            'page' => 'kampus/v_dosen',
            'menu' => 'master-data',
            'submenu' => 'dosen'
        ];
        return view('v_template', $data);
    }
}
