<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['index/(:any)'] = "frontend/index/$1";
$route['default_controller'] = 'frontend';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['login']['get'] = "frontend/login_view";
$route['login']['post'] = "frontend/login";
$route['signup']['get'] = "frontend/signup_view";
$route['signup']['post'] = "frontend/signup";
$route['dashboard']['get'] = "backend/index";
$route['logout']['get'] = "backend/logout";