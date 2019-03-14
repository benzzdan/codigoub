<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$route['404_override'] = '';
$route['default_controller'] = 'pages/index';
$route['translate_uri_dashes'] = FALSE;
// menu routes without lang
$route['admin/proyectos'] = 'admin/proyectos';
$route['firma'] = 'pages/firma'; 
$route['servicios'] = 'pages/servicios'; 
$route['contacto'] = 'pages/contacto';
$route['proyectos'] = 'posts/proyectos';
$route['pages/categoria/(:any)'] = 'posts/proyectos_by_cat/$1';
$route['(:any)/pages/categoria/(:any)'] = 'posts/proyectos_by_cat/$2'; 
$route['proyectos/categoria/(:any)'] = 'posts/proyectos_by_cat/$1';
$route['(:any)/proyectos/categoria/(:any)'] = 'posts/proyectos_by_cat/$2'; 


$route['admin/proyectos/actualizar'] = 'posts/update';
$route['admin'] = 'admin/dashboard';
$route['admin/login'] = 'admin/login';
$route['admin/proyectos/actualizar'] = 'posts/update';
$route['admin'] = 'admin/dashboard';
$route['admin/login'] = 'admin/login';
$route['admin/uploadimgs'] = 'admin/uploadimgs';
$route['admin/crear_record'] = 'posts/create_record';
$route['admin/removeImg'] = 'admin/removeImg';
$route['admin/users'] = 'admin/users';
$route['admin/categorias/crear'] = 'categories/create';
$route['admin/proyectos/crear'] = 'posts/create';
$route['admin/secciones'] = 'admin/secciones';


$route['admin/proyectos/(:any)'] = 'admin/view/$1';
$route['admin/categorias/proyectos/(:any)'] = 'categories/proyectos/$1';
$route['admin/proyectos/editar/(:any)'] = 'posts/edit/$1';
$route['admin/proyectos/editar/(:any)'] = 'posts/edit_with_id/$1';
$route['proyectos/(:any)'] = 'posts/view/$1';
$route['(:any)'] = 'pages/view/$1'; //anything is going to route it to pages/view, by default we have home setup.
$route['(:any)/firma'] = 'pages/firma'; 
$route['(:any)/servicios'] = 'pages/servicios'; 
$route['(:any)/contacto'] = 'pages/contacto'; 
$route['(:any)/categorias'] = 'categories/index';
$route['(:any)/categorias/borrar/(:any)'] = 'categories/borrar/$1';

$route['(:any)/pages/categoria/(:any)'] = 'pages/proyectos_by_cat_limit/$1';
$route['(:any)/proyectos'] = 'posts/proyectos'; 


// $route['en/proyectos/(:any)'] = "posts/view/$1";
$route['(:any)/proyectos/(:any)'] = 'posts/view/$2';


?>
