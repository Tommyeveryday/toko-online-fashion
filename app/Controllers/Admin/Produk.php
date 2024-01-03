<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Libraries\Template;
use App\Models\mProduct;
use CodeIgniter\HTTP\RequestInterface;

class Produk extends BaseController
{
    protected $request;
    public function __construct()
    {
        $request = \Config\Services::request();
        $this->request = $request;
    }

    public function index()
    {

        $mProduct = new mProduct();
        $product_list = $mProduct->findAll();

        $data = [
            'product_list' => $product_list
        ];

        return Template::tampil_Admin('admin/produk_daftar', $data);
    }

    public function tambah()
    {
        $data = [];
        return Template::tampil_Admin('admin/produk_tambah', $data);
    }

    public function insert()
    {
        $product_name = $this->request->getVar('product_name');
        $prduct_price = $this->request->getVar('product_price');
        $product_description = $this->request->getVar('product_description');

        $data = [
            'product_name' => $product_name,
            'product_price' => $prduct_price,
            'product_description' => $product_description
        ];

        $mProduct = new mProduct();
        $mProduct->insert($data);

        return redirect('admin/produk');
    }

    public function delete($id_product = '1')
    {
        $mProduct = new mProduct();
        $mProduct->where('id_product', $id_product)->delete();

        return redirect('admin/produk');
    }

    public function edit($id_product)
    {
        $mProduct = new mProduct();
        $product_row = $mProduct->where('id_product', $id_product)->first();

        $data = [
            'product_row' => $product_row
        ];
        return Template::tampil_Admin('admin/produk_edit', $data);
    }

    public function update($id_product)
    {
        $product_name = $this->request->getVar('product_name');
        $prduct_price = $this->request->getVar('product_price');
        $product_description = $this->request->getVar('product_description');

        $data = [
            'product_name' => $product_name,
            'product_price' => $prduct_price,
            'product_description' => $product_description
        ];

        $mProduct = new mProduct();
        $mProduct->where('id_product', $id_product)->set($data)->update();

        return redirect('admin/produk');
    }
}
