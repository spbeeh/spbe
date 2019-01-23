<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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

$route['spbe'] = 'spbe/login/login/index';
$route['spbe/kuisumum'] = 'spbe/spbe/kuisUmum';
$route['spbe/nomenklatur'] = 'spbe/spbe/index';
$route['spbe/dashboard'] = 'spbe/spbe/dashboard';
$route['spbe/datauser'] = 'spbe/spbe/dataUser';


//$route['pertanyaan'] = 'spbe/admin/Pertanyaan/index';

$route['jawaban'] = 'spbe/admin/jawaban/index';
$route['spbe/dashboard2'] = 'spbe/spbe/dashboard2';
$route['listjawaban']='spbe/admin/Pertanyaan/getListJawaban';

$route['tes'] = 'tes/tescontroller/index';
$route['tes/halaman2'] = 'tes/halaman2/index';
$route['tes/halaman3'] = 'tes/pertanyaanController';
$route['tes/tambah'] = 'tes/pertanyaanController/add';
$route['coba'] = 'tes/jenis/index';
$route['coba/new_form'] = 'tes/jenis/new_form';
$route['coba/tambahdata'] = 'tes/jenis/add';
$route['coba/pertanyaan'] = 'tes/pertanyaan/index';
$route['coba/newFormPertanyaan'] = 'tes/pertanyaan/Form';
$route['coba/pertanyaantambah'] = 'tes/pertanyaan/add';
$route['coba/user'] = 'tes/user';
$route['coba/form'] = 'tes/user/form';
$route['coba/tambah'] = 'tes/user/add';

// HEAD
$route['coba/ubah'] = '';

$route['spbe/admin'] = 'spbe/admin/admindashboard/index';



//Fix VVVV 


//frontend
$route['menu/form']='form/index';
$route['menu/hal1']='hal1/index';
$route['menu/hal2']='hal2/index';
$route['menu/dashboard']='tes/dashboard/index';


//Fix VVVV

$route['sistem/admin/dashboard'] = 'spbe/admin/admindashboard/index';
$route['sistem/admin/nomenklatur'] = 'spbe/admin/nomenklaturkontroller/index';
$route['sistem/admin/User'] = 'spbe/admin/admindashboard/index';
$route['sistem/admin/datanomenklatur'] = 'spbe/admin/datanomenklatur/index';

$route['tes'] = 'tes/tescontroller/index';
$route['sistem/admin/datauser'] = 'spbe/admin/userkontroller/index';

// $route['tes'] = 'tes/tescontroller/index';

// $route['tes/halaman2'] = 'tes/halaman2/index';


$route['translate_uri_dashes'] = FALSE;