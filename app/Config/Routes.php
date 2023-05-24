<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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

$route['404_override'] = 'errors/error404';
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
// $routes->get('/', 'Home::index');
$routes->group("user", function($routes){
    $routes->get('memorandum', 'UserController::memorandum', ['as' => 'user.memorandum']);
    $routes->get('announcement', 'UserController::announcement', ['as' => 'user.announcement']);
    $routes->get('registration', 'UserController::registration', ['as' => 'user.registration']);
    $routes->get('lgmed', 'UserController::lgmed', ['as' => 'user.lgmed']);
    $routes->get('lgcdd', 'UserController::lgcdd', ['as' => 'user.lgcdd']);
    $routes->get('monitor', 'UserController::monitor', ['as' => 'user.monitor']);
    $routes->get('home', 'FileController::fileShow');
$routes->get('home', 'AnnouncementCont::fileShow');
    
    // Accessing home route only for regular users
    $routes->get('home', 'UserController::index', ['as' => 'user.home']);
});

$routes->get('/', 'SignupController::index');
$routes->get('/signup', 'SignupController::index');
$routes->match(['get', 'post'], 'SignupController/store', 'SignupController::store');
$routes->match(['get', 'post'], 'SigninController/loginAuth', 'SigninController::loginAuth');
$routes->get('/signin', 'SigninController::index');
$routes->get('/profile', 'ProfileController::index', ['filter' => 'authGuard']);
$routes->get('/logout', 'SigninController::logout');
$routes->post('/file/upload', 'Main::upload');
$routes->get('file-submission', 'FileController::index');
$routes->post('submit-file', 'FileController::submitFile');
$routes->get('files/(:segment)', 'FileController::getFile/$1');

$routes->get('file-submission', 'AnnouncementCont::index');
$routes->post('file-submit', 'AnnouncementCont::submitFile');
$routes->get('files/(:segment)', 'AnnouncementCont::getFile/$1');

// displaying files for admin
$routes->get('admin/dashboard', 'FileController::showFiles');
$routes->get('admin/dashboard', 'AnnouncementCont::showFiles');


$routes->group("admin", function($routes){
    $routes->get('dashboard', 'UserController::index', ['as' => 'admin.dashboard']); 
    $routes->get('dashboard', 'AdminDashboardController::index');
    $routes->get('memorandum', 'UserController::memorandum', ['as' => 'admin.memorandum']);
    $routes->get('announcement', 'UserController::announcement', ['as' => 'admin.announcement']);
    $routes->get('lgmed_admin', 'UserController::lgmedAdmin', ['as' => 'admin.lgmed_admin']);
    $routes->get('lgcdd_admin', 'UserController::lgcddAdmin', ['as' => 'admin.lgcdd_admin']);
    $routes->get('monitor', 'UserController::monitor', ['as' => 'admin.monitor']);
    $routes->get('status', 'DilgController::status', ['as' => 'admin.status']);
});


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
