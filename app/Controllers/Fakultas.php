<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Fakultas extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Fakultas',
            'page' => 'kampus/v_fakultas',
            'menu' => 'master-data',
            'submenu' => 'fakultas'
        ];
        return view('v_template', $data);
    }
}
