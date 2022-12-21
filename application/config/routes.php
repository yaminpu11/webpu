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
| When you set this option to TRUE, it will replace ALL dashes with
| underscores in the controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'c_home/index';
$route['home'] = 'c_home/index';
$route['about'] = 'c_home/about';
$route['undergraduated_programs'] = 'c_home/undergraduated_programs';

$route['information'] = 'c_information/index';

$route['news'] = 'c_information/news';
$route['news/category'] = 'c_information/news_category';
$route['news/(:any)'] = 'c_information/news/$1';

$route['marketing_activity'] = 'c_information/marketing_activity';
$route['marketing_activity/(:any)'] = 'c_information/marketing_activity/$1';

$route['announcement'] = 'c_information/announcement';
$route['announcement/(:any)'] = 'c_information/announcement/$1';

$route['world_article'] = 'c_information/world_article';

$route['404_override'] = '';


