<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'Welcome/index';
//$route['inicio'] = 'C_dash/index';







//NUEVOS ROUTERS MASTERPAGE 2
$route['inicio'] = 'Welcome/index';

//load clientes
$route['administrar/clientes'] = 'controllers_views/C_clientes/index';
$route['add/client'] = 'controllers_views/C_clientes/add_client';
$route['notificar/client'] = 'controllers_views/C_clientes/notificar_client';
$route['afiliado/client'] = 'controllers_views/C_clientes/afiliado_client';
$route['client/group'] = 'controllers_views/C_clientes/client_group';

//load soporte
$route['add/ticket'] = 'controllers_views/C_tickets/add_ticket';
$route['list/tickets'] = 'controllers_views/C_tickets/index';
$route['chat'] = 'controllers_views/C_chat/index';
$route['knowledgebase'] = 'controllers_views/C_base_conoc/index';

//load facturas
$route['facturas'] = 'controllers_views/C_facturacion/index';
//$route['add/ticket'] = 'controllers_views/C_tickets/index'; para imprimir las facturas

//load ordenes
$route['ordenes/activas'] = 'controllers_views/C_ordenes/index';
$route['ordenes/pendientes'] = 'controllers_views/C_ordenes/ordenes_pendientes';
$route['ordenes/fraudulentas'] = 'controllers_views/C_ordenes/ordenes_fraudulentas';
$route['ordenes/add'] = 'controllers_views/C_ordenes/add_orden';



//load cuentas
$route['cuentas/activas'] = 'controllers_views/C_cuentas/index';
$route['cuentas/suspendidas'] = 'controllers_views/C_cuentas/cuentas_suspendidas';
$route['cuentas/pendientes'] = 'controllers_views/C_cuentas/cuentas_pendientes';


//load configuracion
$route['settings/general'] = 'controllers_views/C_configuracion/index'; //load configuracion general
$route['settings/dns'] = 'controllers_views/C_configuracion/dns_domains';
$route['settings/seguridad'] = 'controllers_views/C_configuracion/conf_seguridad';
$route['settings/lenguaje'] = 'controllers_views/C_configuracion/conf_lenguaje';
$route['settings/connections'] = 'controllers_views/C_configuracion/app_connections';

// load addons
$route['add_ons'] = 'controllers_views/C_add_ons/index';
$route['add_ons/detail'] = 'controllers_views/C_add_ons/addon_detail';
$route['store'] = 'controllers_views/C_add_ons/store';
$route['product/detail'] = 'controllers_views/C_add_ons/product_detail';
$route['product/checkout'] = 'controllers_views/C_add_ons/product_chekout';
//extras
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
