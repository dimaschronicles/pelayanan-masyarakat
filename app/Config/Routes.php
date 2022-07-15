<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
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
$routes->set404Override(function () {
    return view('auth/block');
});
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

$routes->get('/auth', 'Auth::index');
$routes->get('/register', 'Auth::register');
$routes->get('/auth/signup', 'Auth::signUp');
$routes->get('/auth/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');
$routes->get('/block', 'Auth::block');

$routes->get('/dashboard', 'Dashboard::index');

// tambahan
$routes->get('/profil', 'Profil::index');
$routes->get('/changepassword', 'Profil::changePassword');
$routes->get('/savepass', 'Profil::savePassword');

// data user
$routes->get('/user', 'User::index', ['filter' => 'isAdmin']);
$routes->get('/user_add', 'User::addUser', ['filter' => 'isAdmin']);
$routes->get('/user_edit/(:any)', 'User::editUser/$1', ['filter' => 'isAdmin']);
$routes->post('/user', 'User::create', ['filter' => 'isAdmin']);
$routes->put('/user/(:num)', 'User::update/$1', ['filter' => 'isAdmin']);
$routes->get('/user/detailuser/(:num)', 'User::detailUser/$1', ['filter' => 'isAdmin']);
$routes->delete('/user/(:num)', 'User::delete/$1', ['filter' => 'isAdmin']);
$routes->get('/user/aktivasi/(:num)', 'User::aktivasi/$1', ['filter' => 'isAdmin']);

// menu buat surat ktp, kk, dll. untuk user
$routes->get('/surat', 'Surat::index');
$routes->get('/surat_status', 'Surat::status');
$routes->get('/surat_ktp', 'Surat::surat_ktp', ['filter' => 'isAdmin']);
$routes->get('/surat_kk', 'Surat::kk', ['filter' => 'isAdmin']);
$routes->get('/surat_sktm', 'Surat::sktm', ['filter' => 'isAdmin']);
$routes->get('/surat_pindah', 'Surat::pindah', ['filter' => 'isAdmin']);
$routes->get('/surat_nikah', 'Surat::nikah', ['filter' => 'isAdmin']);
$routes->get('/surat_kelahiran', 'Surat::kelahiran', ['filter' => 'isAdmin']);
$routes->get('/surat_kematian', 'Surat::kematian', ['filter' => 'isAdmin']);
$routes->get('/surat_keterangan', 'Surat::keterangan', ['filter' => 'isAdmin']);
$routes->get('/surat_waris', 'Surat::waris', ['filter' => 'isAdmin']);

// ktp
$routes->get('/ktp', 'Ktp::index');
$routes->post('/ktp', 'Ktp::save');
$routes->get('/ktp/cancel_ktp/(:any)', 'Ktp::cancel_ktp/$1');
$routes->get('/ktp/histori_ktp', 'Ktp::histori_ktp');
$routes->get('/ktp/detail_ktp/(:num)', 'Ktp::detail_ktp/$1');
// hanya admin ktp
$routes->delete('/ktp/(:any)', 'Ktp::delete/$1', ['filter' => 'isAdmin']);
$routes->get('/ktp/print_ktp/(:num)', 'Ktp::print_ktp/$1', ['filter' => 'isAdmin']);
$routes->get('/ktp/done_ktp/(:num)', 'Ktp::done_ktp/$1', ['filter' => 'isAdmin']);

// kk
$routes->get('/kk', 'KartuKeluarga::index');
$routes->post('/kk', 'KartuKeluarga::save');
$routes->get('/kk/cancelkk/(:any)', 'KartuKeluarga::cancelKk/$1');
$routes->get('/kk/historikk', 'KartuKeluarga::historiKk');
$routes->get('/kk/detailkk/(:num)', 'KartuKeluarga::detailKk/$1');
// hanya admin kk
$routes->delete('/kk/(:num)', 'KartuKeluarga::delete/$1', ['filter' => 'isAdmin']);
$routes->get('/kk/printkk/(:num)', 'KartuKeluarga::printKk/$1', ['filter' => 'isAdmin']);
$routes->get('/kk/donekk/(:num)', 'KartuKeluarga::doneKk/$1', ['filter' => 'isAdmin']);

// sktm
$routes->get('/sktm', 'Sktm::index');
$routes->post('/sktm', 'Sktm::save');
$routes->get('/sktm/cancelsktm/(:any)', 'Sktm::cancelsktm/$1');
$routes->get('/sktm/historisktm', 'Sktm::historiSktm');
$routes->get('/sktm/detailsktm/(:num)', 'Sktm::detailSktm/$1');
// hanya admin sktm
$routes->delete('/sktm/(:num)', 'Sktm::delete/$1', ['filter' => 'isAdmin']);
$routes->get('/sktm/printsktm/(:num)', 'Sktm::printSktm/$1', ['filter' => 'isAdmin']);
$routes->get('/sktm/donesktm/(:num)', 'Sktm::doneSktm/$1', ['filter' => 'isAdmin']);

// pengantar nikah
$routes->get('/pengantarnikah', 'PengantarNikah::index');
$routes->post('/pengantarnikah', 'PengantarNikah::save');
$routes->get('/pengantarnikah/cancelnikah/(:any)', 'PengantarNikah::cancelNikah/$1');
$routes->get('/pengantarnikah/historinikah', 'PengantarNikah::historiNikah');
$routes->get('/pengantarnikah/detailnikah/(:num)', 'PengantarNikah::detailNikah/$1');
// hanya admin pengantar nikah
$routes->delete('/pengantarnikah/(:num)', 'PengantarNikah::delete/$1', ['filter' => 'isAdmin']);
$routes->get('/pengantarnikah/printnikah/(:num)', 'PengantarNikah::printNikah/$1', ['filter' => 'isAdmin']);
$routes->get('/pengantarnikah/donenikah/(:num)', 'PengantarNikah::doneNikah/$1', ['filter' => 'isAdmin']);

// pengantar pindah
$routes->get('/pengantarpindah', 'PengantarPindah::index');
$routes->post('/pengantarpindah', 'PengantarPindah::save');
$routes->get('/pengantarpindah/cancelpindah/(:any)', 'PengantarPindah::cancelpindah/$1');
$routes->get('/pengantarpindah/historipindah', 'PengantarPindah::historipindah');
$routes->get('/pengantarpindah/detailpindah/(:num)', 'PengantarPindah::detailpindah/$1');
// hanya admin pengantar pindah
$routes->delete('/pengantarpindah/(:num)', 'PengantarPindah::delete/$1', ['filter' => 'isAdmin']);
$routes->get('/pengantarpindah/printpindah/(:num)', 'PengantarPindah::printpindah/$1', ['filter' => 'isAdmin']);
$routes->get('/pengantarpindah/donepindah/(:num)', 'PengantarPindah::donepindah/$1', ['filter' => 'isAdmin']);

// pengantar kelahiran
$routes->get('/kelahiran', 'Kelahiran::index');
$routes->post('/kelahiran', 'Kelahiran::save');
$routes->get('/kelahiran/cancelkelahiran/(:any)', 'Kelahiran::cancelKelahiran/$1');
$routes->get('/kelahiran/historikelahiran', 'Kelahiran::historiKelahiran');
$routes->get('/kelahiran/detailkelahiran/(:num)', 'Kelahiran::detailKelahiran/$1');
// hanya admin pengantar kelahiran
$routes->delete('/kelahiran/(:num)', 'Kelahiran::delete/$1', ['filter' => 'isAdmin']);
$routes->get('/kelahiran/printkelahiran/(:num)', 'Kelahiran::printKelahiran/$1', ['filter' => 'isAdmin']);
$routes->get('/kelahiran/donekelahiran/(:num)', 'Kelahiran::doneKelahiran/$1', ['filter' => 'isAdmin']);

// pengantar kematian
$routes->get('/kematian', 'Kematian::index');
$routes->post('/kematian', 'Kematian::save');
$routes->get('/kematian/cancelkematian/(:any)', 'Kematian::cancelKematian/$1');
$routes->get('/kematian/historikematian', 'Kematian::historiKematian');
$routes->get('/kematian/detailkematian/(:num)', 'Kematian::detailKematian/$1');
// hanya admin pengantar kematian
$routes->delete('/kematian/(:num)', 'Kematian::delete/$1', ['filter' => 'isAdmin']);
$routes->get('/kematian/printkematian/(:num)', 'Kematian::printKematian/$1', ['filter' => 'isAdmin']);
$routes->get('/kematian/donekematian/(:num)', 'Kematian::doneKematian/$1', ['filter' => 'isAdmin']);

// suket
$routes->get('/keterangan', 'Keterangan::index');
$routes->post('/keterangan', 'Keterangan::save');
$routes->get('/keterangan/cancelketerangan/(:any)', 'Keterangan::cancelKeterangan/$1');
$routes->get('/keterangan/historiketerangan', 'Keterangan::historiKeterangan');
$routes->get('/keterangan/detailketerangan/(:num)', 'Keterangan::detailKeterangan/$1');
// hanya admin suket
$routes->delete('/keterangan/(:num)', 'Keterangan::delete/$1', ['filter' => 'isAdmin']);
$routes->get('/keterangan/printketerangan/(:num)', 'Keterangan::printKeterangan/$1', ['filter' => 'isAdmin']);
$routes->get('/keterangan/doneketerangan/(:num)', 'Keterangan::doneKeterangan/$1', ['filter' => 'isAdmin']);

// waris
$routes->get('/waris', 'Waris::index');
$routes->post('/waris', 'Waris::save');
$routes->get('/waris/cancelwaris/(:any)', 'Waris::cancelWaris/$1');
$routes->get('/waris/historiwaris', 'Waris::historiWaris');
$routes->get('/waris/detailwaris/(:num)', 'Waris::detailWaris/$1');
// hanya admin waris
$routes->delete('/waris/(:num)', 'Waris::delete/$1');
$routes->get('/waris/printwaris/(:num)', 'Waris::printWaris/$1', ['filter' => 'isAdmin']);
$routes->get('/waris/donewaris/(:num)', 'Waris::doneWaris/$1', ['filter' => 'isAdmin']);


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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
