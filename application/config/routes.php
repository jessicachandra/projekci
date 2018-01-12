<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['lihat_pelangi'] = 'controllerPage/lihat_pelangi';
$route['lihat_kereta'] = 'controllerPage/lihat_kereta';
$route['lihat_balon'] = 'controllerPage/lihat_balon';
$route['lihat_kebunku'] = 'controllerPage/lihat_kebunku';
$route['lihat_cicak'] = 'controllerPage/lihat_cicak';
