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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'home';
$route['404_override'] = 'Custom404';
$route['translate_uri_dashes'] = FALSE;

$route['admin'] = 'auth_admin/login';
$route['projects/process'] = 'projects/process';
$route['projects/review/(:num)'] = 'review/preview';
$route['project/delete/(:num)'] = 'projects/delete';    
$route['project/(:any)/(:num)'] = 'projects/project';
$route['discovery'] = 'projects/discovery';
$route['discovery/(:any)'] = 'projects/category';
$route['projects/(:any)/detail'] = 'projects/detail';
$route['projects/delBasicImage'] = 'projects/delBasicImage';
$route['projects/del_basic_video'] = 'projects/del_basic_video';
$route['projects/upload_image'] = 'projects/upload_image';
$route['projects/upload_video'] = 'projects/upload_video';
$route['projects/verification'] = 'projects/verification';
$route['projects/result/(:num)'] = 'projects/result';
$route['projects/done'] = 'projects/done';
$route['projects/verification/process/(:num)'] = 'review/process';
$route['projects/(:any)/pledge'] = 'projects/pledge';
$route['projects/method/(:num)'] = 'projects/method';
$route['project/(:any)/(:num)/edit/basic'] = 'start/basic';
$route['project/(:any)/(:num)/review'] = 'review/userPreview';
$route['project/(:any)/(:num)/edit/reward'] = 'start/reward';
$route['project/(:any)/(:num)/edit/story'] = 'start/story';
$route['project/(:any)/(:num)/edit/people'] = 'start/people';
$route['project/(:any)/(:num)/edit/payment'] = 'start/payment';
$route['project/(:any)/(:num)/launch'] = 'start/launch';
$route['project/(:any)/(:num)/backer'] = 'start/backer';
$route['profile/projects'] = 'profile/projects';
$route['profile/account'] = 'profile/account';
$route['profile/update'] = 'profile/update';
$route['profile/backed'] = 'profile/backed';
$route['profile/saveSetting'] = 'profile/saveSetting';
$route['profile/detail/(:any)'] = 'profile/details';
$route['profile/(:any)'] = 'profile/profile';
$route['transaksi'] = 'transaction/transaksi';
$route['review/submit/(:num)'] = 'review/submit';
$route['snap/donate/withoutReward'] = 'snap/pureDonate';
$route['snap/donate/(:any)'] = 'snap/specDonate';


