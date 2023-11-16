<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//login
$routes->get('/', 'Auth::index');
$routes->post('/auth/login', 'Auth::checkLogin');
$routes->get('/auth/logout', 'Auth::logout', ['as' => 'logout']);


//dashboard
$routes->get('/dashboard', 'Dashboard::index',);


//barang
$routes->get('/barang', 'Barang::index');
$routes->get('/barang/form_tambah', 'Barang::formTambahBarang');
$routes->post('/barang/tambah_barang', 'Barang::tambahBarang');
$routes->post('/barang/kategori', 'Barang::kategori');
$routes->delete('/barang/(:num)', 'Barang::hapusBarang/$1');
$routes->get('/barang/edit/(:num)', 'Barang::editBarang/$1');
$routes->post('/barang/update/(:num)', 'Barang::updateBarang/$1');
$routes->get('/barang/detail/(:any)', 'Barang::detailBarang/$1');
$routes->get('/barang/habis', 'Barang::barangHabis');


//kategori
$routes->get('/kategori', 'Kategori::index');
$routes->get('/kategori/tambah', 'Kategori::formTambahKategori');
$routes->delete('/kategori/(:num)', 'Kategori::hapusKategori/$1');
$routes->post('/kategori/simpan', 'Kategori::tambahKategori');
$routes->get('/kategori/edit/(:num)', 'Kategori::editKategori/$1');
$routes->post('/kategori/update/(:num)', 'Kategori::updateKategori/$1');


//barang_masuk
$routes->get('/barang_masuk', "BarangMasuk::index");

//barang_keluar
$routes->get('/barang_keluar', 'BarangKeluar::index');

//supplier
$routes->get('/supplier', 'Supplier::index');
$routes->get('/supplier/tambah', 'Supplier::formTambahSupplier');


//transaksi
$routes->get('/transaksi', 'Transaksi::index');


//user
$routes->get('/user', 'User::index');
$routes->get('/user/tambah_user', 'User::tambahUser');
$routes->post('/user/simpan_user', 'User::addUser');
