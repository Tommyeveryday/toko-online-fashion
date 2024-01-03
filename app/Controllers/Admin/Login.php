<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Template;

class Login extends BaseController
{
    public function index()
    {
        return view('admin/login', []);
    }
}
