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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


//SITE URL
$route['login_view'] = 'welcome/login_view';
$route['register_view'] = 'welcome/register_view';
$route['projects'] = 'projects/index';
// $route['display_view'] = 'projects/display_view';
$route['edit/(:num)'] = 'projects/edit_data/$1';
$route['create_new'] = 'projects/create';
$route['delete_item/(:num)'] = 'projects/delete/$1';
// $route['tasks'] = 'tasks/index';
// $route['task_create'] = 'tasks/create/$this->uri->segment(3)';



//FORM SUBMIT
$route['login'] = 'users/login_submit';
$route['register'] = 'users/register_submit';
$route['destroy'] = 'users/logout';
$route['new_projects'] = 'projects/create_new';
$route['update'] = 'projects/update';
$route['search_item'] = 'projects/search';