<?php
defined('BASEPATH') or exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
 */
$route['default_controller'] = 'Welcome';
// $route['404_override'] = '';

// $route['spbe'] = 'spbe/login/login/index';
// $route['spbe/kuisumum'] = 'spbe/spbe/kuisUmum';
// $route['spbe/nomenklatur'] = 'spbe/spbe/index';
// $route['spbe/dashboard'] = 'spbe/spbe/dashboard';
// $route['spbe/datauser'] = 'spbe/spbe/dataUser';


//$route['pertanyaan'] = 'spbe/admin/Pertanyaan/index';

// $route['jawaban'] = 'spbe/admin/jawaban/index';
// $route['spbe/dashboard2'] = 'spbe/spbe/dashboard2';
// $route['listjawaban'] = 'spbe/admin/Pertanyaan/getListJawaban';

// $route['tes'] = 'tes/tescontroller/index';
// $route['tes/halaman2'] = 'tes/halaman2/index';
// $route['tes/halaman3'] = 'tes/pertanyaanController';
// $route['tes/tambah'] = 'tes/pertanyaanController/add';
// $route['coba'] = 'tes/jenis/index';
// $route['coba/new_form'] = 'tes/jenis/new_form';
// $route['coba/tambahdata'] = 'tes/jenis/add';
// $route['coba/pertanyaan'] = 'tes/pertanyaan/index';
// $route['coba/newFormPertanyaan'] = 'tes/pertanyaan/Form';
// $route['coba/pertanyaantambah'] = 'tes/pertanyaan/add';
// $route['coba/user'] = 'tes/user';
// $route['coba/form'] = 'tes/user/form';
// $route['coba/tambah'] = 'tes/user/add';

//Fix VVVV ====

//frontend$route['menu/form'] = 'form/index';
$route['menu/hal1/(:num)'] = 'spbe/user/hal1/getByumum/$1';
$route['menu/hal1/store'] = 'spbe/user/hal1/store';
$route['menu/hal2'] = 'spbe/user/hal2/index';
$route['menu/hal2/(:num)'] = 'spbe/user/hal2/getById/$1';
$route['menu/hal2/isi/(:num)'] = 'spbe/user/hal2/getByIdnomen/$1';
$route['menu/form'] = 'spbe/user/form/index';
$route['menu/dashboard'] = 'spbe/user/dashboard/index';
$route['menu/laporan'] = 'spbe/user/laporan/index';
$route['menu/laporan/(:num)'] = 'spbe/user/laporan/getReport/$1';

//Fix VVVVV
// $route['login'] = 'spbe/login/login/index';

///// ini authnya
$route['login'] = 'spbe/admin/Auth/login';
$route['logout'] = 'spbe/admin/Auth/logout';
$route['login/register'] = 'spbe/admin/Auth/check_register';

$route['sistem/admin/dashboard'] = 'spbe/admin/admindashboard/index';
$route['sistem/admin/nomenklatur'] = 'spbe/admin/nomenklaturkontroller/index';
$route['sistem/admin/kuisonerumum'] = 'spbe/admin/kuisonerumum/index';
$route['sistem/admin/nomenklatur'] = 'spbe/admin/nomenklaturkontroller/index';
$route['sistem/admin/User'] = 'spbe/admin/admindashboard/index';

$route['sistem/admin/datanomenklatur'] = 'spbe/admin/datanomenklatur/index';
$route['sistem/admin/datanomenklatur/store'] = 'spbe/admin/datanomenklatur/store';
$route['sistem/admin/datanomenklatur/edit/(:num)'] = 'spbe/admin/datanomenklatur/edit/$1';
$route['sistem/admin/datanomenklatur/delete/(:num)'] = 'spbe/admin/datanomenklatur/delete/$1';

$route['sistem/admin/datapertanyaanumum'] = 'spbe/admin/datapertanyaanumum/index';
$route['sistem/admin/datapertanyaanumum/store'] = 'spbe/admin/datapertanyaanumum/store';
$route['sistem/admin/datapertanyaanumum/delete/(:num)'] = 'spbe/admin/datapertanyaanumum/delete/$1';
$route['sistem/admin/datapertanyaanumum/edit/(:num)'] = 'spbe/admin/datapertanyaanumum/edit/$1';

$route['sistem/admin/datauser'] = 'spbe/admin/userkontroller/index';
$route['sistem/admin/datauser/store'] = 'spbe/admin/userkontroller/store';
$route['sistem/admin/datauser/destroy/(:num)'] = 'spbe/admin/userkontroller/destroy/$1';
$route['sistem/admin/datauser/report/(:num)'] = 'spbe/admin/userkontroller/report/$1';

$route['sistem/admin/nomenklatur/(:num)'] = 'spbe/admin/nomenklaturkontroller/getById/$1';
$route['sistem/admin/isinm/store'] = 'spbe/admin/isipertanyaannomenklatur/store';
$route['sistem/admin/nomenklatur/isi/(:num)'] = 'spbe/admin/nomenklaturkontroller/getByIdnomen/$1';

$route['sistem/admin/datanomenklatur/(:num)'] = 'spbe/admin/isipertanyaannomenklatur/edit/$1';

$route['sistem/admin/kuisonerumum/(:num)'] = 'spbe/admin/kuisonerumum/getById/$1';

$route['translate_uri_dashes'] = false;