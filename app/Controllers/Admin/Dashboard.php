<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Template;

class Dashboard extends BaseController
{
    public function index()
    {
        return Template::tampil_Admin('admin/dashboard', []);
    }
}
