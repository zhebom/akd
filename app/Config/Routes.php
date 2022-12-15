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
$routes->setDefaultController('Home');
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
$routes->get('/', 'Home::index', ['filter' => 'auth']);
$routes->get('/login', 'Auth::login', ['filter' => 'authTamu']);
$routes->get('/pendidikan/rekognisi', 'Pendidikan::rekognisi');
$routes->get('/pendidikan/rekognisiPendidikanDosen', 'Pendidikan::listRekognisiPendidikan');
$routes->get('/penelitian/rekognisi', 'Penelitian::rekognisi');
$routes->get('/penelitian/reportPenelitian', 'Penelitian::reportPenelitian');
$routes->get('/penelitian/reportJurnal', 'Penelitian::reportJurnal');
$routes->get('/penelitian/rekognisiPenelitianDosen', 'Penelitian::listRekognisiPenelitian');
$routes->get('/penelitian/listPenelitianDosen', 'Penelitian::listPenelitianDosen');
$routes->get('/penelitian/listJurnalDosen', 'Penelitian::listJurnalDosen');

$routes->get('/pengabdian/rekognisi', 'Pengabdian::rekognisi');
$routes->get('/pengabdian/reportPengabdian', 'Pengabdian::reportPengabdian');
$routes->get('/pengabdian/reportJurnalPengabdian', 'Pengabdian::reportJurnal');

$routes->get('/pengabdian/rekognisiPengabdianDosen', 'Pengabdian::rekognisiPengabdianDosen');
$routes->get('/pengabdian/listPengabdianDosen', 'Pengabdian::listPengabdianDosen');
$routes->get('/pengabdian/listJurnalPengabdian', 'Pengabdian::listJurnalPengabdian');

$routes->get('/gs/reportSitasi', 'Sitasi::index');
$routes->get('/login', 'Auth::login');
$routes->get('/register', 'Auth::register');
$routes->post('/addDosen', 'Auth::addDosen');
$routes->post('/ceklogin', 'Auth::ceklogin');
$routes->get('/logout', 'Auth::logout');
$routes->get('/dosen/riwayatPendidikanDosen', 'Dosen::pendidikan');
$routes->get('/dosen/riwayatJafaDosen', 'Dosen::jafa');
$routes->get('/dosen/riwayatProfesiDosen', 'Dosen::profesi');
$routes->get('/dosen/riwayatBnspDosen', 'Dosen::bnsp');
$routes->get('/dosen/listBnspDosen', 'Dosen::listBnsp');
$routes->get('/dosen/listProfesiDosen', 'Dosen::listProfesi');
$routes->get('/dosen/listJafaDosen', 'Dosen::listJafa');
$routes->get('/dosen/listPendidikanDosen', 'Dosen::listPendidikan');


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
