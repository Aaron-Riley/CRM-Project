<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['view'] = 'welcome/ViewAll';
$route['create'] = 'welcome/CreateContact';
$route['edit'] = 'welcome/EditContact';
$route['delete'] = 'welcome/DeleteContact';
$route['search'] = 'welcome/SearchContact';
