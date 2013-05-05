<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$route['projects/content/piano/pitches/(:any)'] = "fileserv/Flash_Piano/$1";

$route['blog'] = "pages/blog/0";
$route['blog/(:year)/(:month)/(:day)/(:name)'] = "pages/blog_post/$1/$2/$3/$4";
$route['blog/(:any)'] = "pages/blog/$1";


$route['projects'] = "pages/projects/";
//TODO: move to singular controller
$route['projects/(:any)'] = "pages/projects/$1";

$route['photography'] = "pages/photography/";
$route['default_controller'] = "pages";
$route['404_override'] = '';


/* End of file routes.php */
/* Location: ./application/config/routes.php */
