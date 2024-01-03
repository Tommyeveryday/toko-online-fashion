<?php
namespace App\Libraries;

use App\Models\mProduct;

class Template
{
    public static function tampil_user($nama_view)
    {
        $template = '';

        $header = view('user/menu');
        $body = view($nama_view);
        $footer = view('user/footer');

        $data = array_merge([
            'header' => $header,
            'body' => $body,
            'footer' => $footer,
        ]);
        return view('user/index', $data);
    }

    public static function tampil_Admin($nama_view, $data)
    {
        $template = '';

        $header = view('admin/menu');
        $body = view($nama_view, $data);
        $footer = view('admin/footer');

        $data = array_merge($data, [
            'header' => $header,
            'body' => $body,
            'footer' => $footer,
        ]);

        return view('user/index', $data);
    }
}

