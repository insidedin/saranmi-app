<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Admin extends BaseController
{
    public function admin()
    {
        return view('pageadmin/admin');
    }

    public function login()
    {
        return view('pageadmin/login');
    }

    public function tb_berita()
    {
        return view('pageadmin/tb_berita');
    }
}
