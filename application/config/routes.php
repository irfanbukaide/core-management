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
$route['default_controller'] = 'HostsCtrl/index';

$route['setup'] = 'SetupCtrl/step1';
$route['setup/step1'] = 'SetupCtrl/step1';
$route['setup/step1/do'] = 'SetupCtrl/step1/do';
$route['setup/step2'] = 'SetupCtrl/step2';
$route['setup/step2/do'] = 'SetupCtrl/step2/do';

$route['login'] = 'AuthCtrl/login';
$route['login/do'] = 'AuthCtrl/login/do';
$route['logout'] = 'AuthCtrl/logout';

$route['vlan'] = 'VlansCtrl/index';
$route['vlan/save'] = 'VlansCtrl/save';
$route['vlan/edit/(:any)'] = 'VlansCtrl/edit/$1';
$route['vlan/delete/(:any)'] = 'VlansCtrl/delete/$1';

$route['device'] = 'DevicesCtrl/index';
$route['device/save'] = 'DevicesCtrl/save';
$route['device/edit/(:any)'] = 'DevicesCtrl/edit/$1';
$route['device/delete/(:any)'] = 'DevicesCtrl/delete/$1';

$route['master/vendor'] = 'VendorsCtrl/index';
$route['master/vendor/save'] = 'VendorsCtrl/save';
$route['master/vendor/edit/(:any)'] = 'VendorsCtrl/edit/$1';
$route['master/vendor/delete/(:any)'] = 'VendorsCtrl/delete/$1';

$route['master/brand'] = 'BrandsCtrl/index';
$route['master/brand/save'] = 'BrandsCtrl/save';
$route['master/brand/edit/(:any)'] = 'BrandsCtrl/edit/$1';
$route['master/brand/delete/(:any)'] = 'BrandsCtrl/delete/$1';

$route['master/type'] = 'TypesCtrl/index';
$route['master/type/save'] = 'TypesCtrl/save';
$route['master/type/edit/(:any)'] = 'TypesCtrl/edit/$1';
$route['master/type/delete/(:any)'] = 'TypesCtrl/delete/$1';

$route['master/location'] = 'LocationsCtrl/index';
$route['master/location/save'] = 'LocationsCtrl/save';
$route['master/location/edit/(:any)'] = 'LocationsCtrl/edit/$1';
$route['master/location/delete/(:any)'] = 'LocationsCtrl/delete/$1';

$route['master/tag'] = 'TagsCtrl/index';
$route['master/tag/save'] = 'TagsCtrl/save';
$route['master/tag/edit/(:any)'] = 'TagsCtrl/edit/$1';
$route['master/tag/delete/(:any)'] = 'TagsCtrl/delete/$1';

$route['master/user'] = 'UsersCtrl/index';
$route['master/user/save'] = 'UsersCtrl/save';
$route['master/user/edit/(:any)'] = 'UsersCtrl/edit/$1';
$route['master/user/delete/(:any)'] = 'UsersCtrl/delete/$1';

$route['hosts'] = 'HostsCtrl/index';
$route['hosts/host_up'] = 'HostsCtrl/host_up';
$route['hosts/host_down'] = 'HostsCtrl/host_down';
$route['hosts/host_log'] = 'HostsCtrl/host_log';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
