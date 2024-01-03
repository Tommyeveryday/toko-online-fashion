<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'User\Beranda::index');
$routes->get('/daftar-produk', 'User\Produk::index');
$routes->get('/tentang-kami', 'User\Tentang::index');
$routes->get('/kontak-kami', 'User\Kontak::index');

$routes->get('/admin/login', 'Admin\Login::index');
$routes->get('/admin/dashboard', 'Admin\Dashboard::index');
$routes->get('/admin/produk', 'Admin\Produk::index');
$routes->get('/admin/produk/tambah', 'Admin\Produk::tambah');
$routes->post('/admin/produk/insert', 'Admin\Produk::insert');
$routes->get('/admin/produk/delete/(:any)', 'Admin\Produk::delete/$1');
$routes->get('/admin/produk/edit/(:any)', 'Admin\Produk::edit/$1');
$routes->post('/admin/produk/update/(:any)', 'Admin\Produk::update/$1');