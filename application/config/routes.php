<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['index/(:any)'] = "frontend/index/$1";
$route['default_controller'] = 'frontend';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;