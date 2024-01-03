<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;
use App\Libraries\Template;

class Tentang extends BaseController
{
    public function index()
    {
        return Template::tampil_user('user/tentang_kami');
    }
}
