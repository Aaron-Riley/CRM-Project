<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['view'] = 'ViewAll/index';
$route['create'] = 'CreateContact/index';
$route['edit'] = 'EditContact/index';
$route['delete'] = 'DeleteContact/index';
$route['search'] = 'SearchContact/index';

// Using routing tests to understand how I can get to the specific users for each of the below routes

$route['view/(:num)'] = 'ViewAll/view/$1';
$route['edit/(:num)'] = 'EditContact/edit/$1';
$route['delete/(:num)'] = 'DeleteContact/delete/$1';


$route['contacts'] = 'Frontend/ContactController/index';
$route['contacts/create'] = 'Frontend/ContactController/create';
$route['contacts/store'] = 'Frontend/ContactController/store';
