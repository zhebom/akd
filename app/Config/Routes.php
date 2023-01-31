<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Beranda');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/dashboard', 'Home::index', ['filter' => 'auth']);

$routes->get('/admin/dashboard', 'Admin::index',['filter' => 'auth','admin']);
$routes->get('/admin/dosen/', 'Admin::listDosen',['filter' => 'auth','admin']);
$routes->get('/admin/dosen/(:num)', 'Admin::profil/$1',['filter' => 'auth','admin']);
//$routes->get('/admin/dosen/register', 'Auth::register');
$routes->get('/admin/dosen/register', 'Auth::register',['filter' => 'auth','admin']);
$routes->get('/admin/dosen/ubahpass/(:num)', 'Dosen::resPass/$1',['filter' => 'auth','admin']);

$routes->get('/admin/dashboard', 'Admin::index', ['filter' => 'auth','admin']);
$routes->get('/admin/dosen/', 'Admin::listDosen', ['filter' => 'auth', 'admin']);
$routes->get('/admin/dosen/(:num)', 'Admin::profil/$1', ['filter' => 'auth','admin']);
// $routes->get('/admin/dosen/register', 'Auth::register');
$routes->get('/admin/dosen/register', 'Auth::register',['filter' => 'auth','admin']);
$routes->get('/admin/dosen/luaran', 'Admin::listLuaran',['filter' => 'auth','admin']);
$routes->delete('/admin/dosen/luaran/del/(:num)', 'Admin::delLuaran/$1',['filter' => 'auth','admin']);
$routes->get('/admin/dosen/ubahpass/(:num)', 'Dosen::resPass/$1',['filter' => 'auth','admin']);
$routes->get('/admin/dosen/addluaran', 'Admin::viewaddLuaran',['filter' => 'auth','admin']);
$routes->post('/admin/dosen/saveluaran', 'Admin::addDataLuaran',['filter' => 'auth','admin']);

//$routes->get('/home', 'Beranda::index');
$routes->get('/', 'Beranda::index',['filter' => 'auth']);
$routes->get('/dosen/profil/(:num)', 'Beranda::profil/$1',['filter' => 'auth']);
$routes->get('/dosen', 'Dosen::profilDosen',['filter' => 'auth']);
$routes->post('/dosen/ubah', 'Dosen::editDosen',['filter' => 'auth']);
$routes->get('/json_label', 'Home::json_label', ['filter' => 'auth']);
$routes->get('/json_count', 'Home::json_count', ['filter' => 'auth']);
$routes->get('/login', 'Auth::login', ['filter' => 'authTamu']);
$routes->get('/pendidikan/rekognisi', 'Pendidikan::rekognisi', ['filter' => 'auth']);
$routes->get('/pendidikan/rekognisiPendidikanDosen', 'Pendidikan::listRekognisiPendidikan', ['filter' => 'auth']);
$routes->post('/rekognisi/addRekognisiDosen', 'Pendidikan::addRekognisiDosen', ['filter' => 'auth']);
$routes->delete('/rekognisi/deleteRekognisi/(:any)', 'Pendidikan::delRekognisiDosen/$1', ['filter' => 'auth']);
$routes->delete('/deleteLaporan/(:any)', 'Penelitian::delLaporanDosen/$1', ['filter' => 'auth']);
$routes->delete('/deleteLuaran/(:any)', 'Penelitian::delLuaranDosen/$1', ['filter' => 'auth']);

$routes->get('/pendidikan/rekognisi', 'Pendidikan::rekognisi', ['filter' => 'auth']);
$routes->get('/pendidikan/rekognisiPendidikanDosen', 'Pendidikan::listRekognisiPendidikan', ['filter' => 'auth']);
$routes->get('/penelitian/rekognisi', 'Penelitian::rekognisi', ['filter' => 'auth']);
$routes->get('/penelitian/reportPenelitian', 'Penelitian::reportPenelitian', ['filter' => 'auth']);
$routes->get('/penelitian/reportJurnal', 'Penelitian::reportJurnal', ['filter' => 'auth']);
$routes->get('/penelitian/rekognisiPenelitianDosen', 'Penelitian::listRekognisiPenelitian', ['filter' => 'auth']);
$routes->get('/penelitian/listPenelitianDosen', 'Penelitian::listPenelitianDosen', ['filter' => 'auth']);
$routes->get('/penelitian/listJurnalDosen', 'Penelitian::listJurnalDosen', ['filter' => 'auth']);
$routes->post('/addLaporan', 'Penelitian::addLaporanDosen', ['filter' => 'auth']);
$routes->post('/addLuaran', 'Penelitian::addLuaranDosen', ['filter' => 'auth']);


$routes->get('/pengabdian/rekognisi', 'Pengabdian::rekognisi', ['filter' => 'auth']);
$routes->get('/pengabdian/reportPengabdian', 'Pengabdian::reportPengabdian', ['filter' => 'auth']);
$routes->get('/pengabdian/reportJurnalPengabdian', 'Pengabdian::reportJurnal', ['filter' => 'auth']);

$routes->get('/pengabdian/rekognisiPengabdianDosen', 'Pengabdian::rekognisiPengabdianDosen', ['filter' => 'auth']);
$routes->get('/pengabdian/listPengabdianDosen', 'Pengabdian::listPengabdianDosen', ['filter' => 'auth']);
$routes->get('/pengabdian/listJurnalPengabdian', 'Pengabdian::listJurnalPengabdian', ['filter' => 'auth']);

$routes->get('/gs/reportSitasi', 'Sitasi::index', ['filter' => 'auth']);
$routes->get('/gs/addGS/(:any)', 'Sitasi::addGS/$1', ['filter' => 'auth']);


// $routes->post('/addDosen', 'Auth::addDosen');
$routes->post('/addDosen', 'Auth::addDosen', ['filter' => 'auth']);
$routes->post('/ceklogin', 'Auth::ceklogin');
$routes->get('/logout', 'Auth::logout', ['filter' => 'auth']);
$routes->get('/dosen/riwayatPendidikanDosen', 'Dosen::pendidikan', ['filter' => 'auth']);
$routes->get('/dosen/riwayatJafaDosen', 'Dosen::jafa', ['filter' => 'auth']);
$routes->get('/dosen/riwayatProfesiDosen', 'Dosen::profesi', ['filter' => 'auth']);
$routes->get('/dosen/riwayatBnspDosen', 'Dosen::bnsp', ['filter' => 'auth']);
$routes->get('/dosen/listBnspDosen', 'Dosen::listBnsp', ['filter' => 'auth']);
$routes->get('/dosen/listProfesiDosen', 'Dosen::listProfesi', ['filter' => 'auth']);
$routes->get('/dosen/listJafaDosen', 'Dosen::listJafa', ['filter' => 'auth']);
$routes->get('/dosen/listPendidikanDosen', 'Dosen::listPendidikan', ['filter' => 'auth']);
$routes->post('/dosen/addPendidikanDosen', 'Dosen::addPendidikanDosen', ['filter' => 'auth']);
$routes->post('/dosen/addJafaDosen', 'Dosen::addJafaDosen', ['filter' => 'auth']);
$routes->post('/dosen/addProfesiDosen', 'Dosen::addProfesiDosen', ['filter' => 'auth']);
$routes->delete('/dosen/delete/(:num)/', 'Dosen::delPendidikanDosen/$1', ['filter' => 'auth']);
$routes->delete('/dosen/deleteJafa/(:num)', 'Dosen::delJafaDosen/$1', ['filter' => 'auth']);
$routes->delete('/dosen/deleteProfesi/(:num)', 'Dosen::delProfesiDosen/$1', ['filter' => 'auth']);

$routes->delete('/admin/delDosen/(:num)', 'Dosen::delDosen/$1', ['filter' => 'auth']);

$routes->delete('/deleteLaporan/(:any)', 'Penelitian::delLaporanDosen/$1', ['filter' => 'auth']);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
