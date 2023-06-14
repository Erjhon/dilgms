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
$routes->get('profile', 'UserController::profile', ['as' => 'user.profile']);
    
    // Accessing home route only for regular users
    $routes->get('home', 'UserController::index', ['as' => 'user.home']);
    $routes->get('user_status', 'DilgController::status', ['as' => 'user.status']);
});

$routes->get('/', 'SigninController::index');
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
$routes->post('addAnnouncement', 'AnnouncementCont::addAnnouncement');
$routes->get('files/(:segment)', 'AnnouncementCont::getFile/$1');

// displaying files for admin
$routes->get('admin/dashboard', 'FileController::showFiles');
$routes->get('admin/dashboard', 'AnnouncementCont::showFiles');

	
$routes->get('calendar', 'FullCalendar::calendar');

$routes->group("admin", function($routes){
    $routes->get('dashboard', 'FullCalendar::calendar', ['as' => 'admin.dashboard']); 
    $routes->get('dashboard', 'AdminDashboardController::index');
    $routes->get('memorandum', 'UserController::memorandum', ['as' => 'admin.memorandum']);
    $routes->get('announcement', 'UserController::announcement', ['as' => 'admin.announcement']);
    $routes->get('lgmed_admin', 'UserController::lgmedAdmin', ['as' => 'admin.lgmed_admin']);
    $routes->get('lgcdd_admin', 'UserController::lgcddAdmin', ['as' => 'admin.lgcdd_admin']);
    $routes->get('monitor', 'UserController::monitor', ['as' => 'admin.monitor']);
    $routes->get('status', 'DilgController::index', ['as' => 'admin.status']);
    
});

$routes->post('add-task', 'TaskController::addTask');

$routes->get('dilg', 'DilgController::index');
$routes->get('dilg/create', 'DilgController::create');
$routes->post('dilg', 'DilgController::store');
$routes->get('dilg/edit/(:num)', 'DilgController::edit/$1');
$routes->post('dilg/update/(:num)', 'DilgController::update/$1');
$routes->post('dilg/insert/(:num)', 'DilgController::insert/$1');
$routes->get('dilg/delete/(:num)', 'DilgController::delete/$1');
$routes->post('task/create', 'DilgController::createTask', ['as' => 'task.create']);
$routes->post('dilg/insert', 'TaskController::insert');
$routes->post('dilg/fas', 'TaskController::fas');
$routes->post('dilg/lgmes', 'TaskController::lgmes');

$routes->post('dilg/update/(:num)', 'DilgController@update/$1');





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