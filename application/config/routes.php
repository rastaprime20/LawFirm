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

$route['default_controller'] = "lawfirm-authentication/login";
$route['404_override'] = '';

$route['login'] = "lawfirm-authentication/login";
$route['tutorial'] = "lawfirm-authentication/tutorial";
$route['login/validate_credentials'] = "lawfirm-authentication/login/validate_credentials";
$route['logout'] = "lawfirm-authentication/login/logout";
$route['saveClientRecord'] = "home/insertClientRecord";
$route['clients'] = "lawfirm-client/client";
$route['user'] = "lawfirm-user/user";
$route['user/create'] = 'lawfirm-user/user/create';
$route['user/edit'] = 'lawfirm-user/user/edit';
$route['user/history'] = 'lawfirm-user/user/history';
$route['user/transfer'] = 'lawfirm-user/user/transfer';
$route['user/transfertTo'] = 'lawfirm-user/user/transferTo';
$route['user/transferToAtty'] = 'lawfirm-user/user/transferToAtty';
$route['template'] = "lawfirm-template/template";
$route['template/create'] = "lawfirm-template/template/create";
$route['archive'] = "lawfirm-archive/archive";
$route['document'] = 'lawfirm-document/document';
$route['case/viewCase'] = 'lawfirm-document/document/documentpercaseview';
$route['document/viewListDocument'] = 'lawfirm-document/document/documentlistdocumentview';
$route['loginforgotpassword/doforget'] = 'lawfirm-authentication/loginforgotpassword/doforget';
$route['loginforgotpassword/forget'] = 'lawfirm-authentication/loginforgotpassword/forget';
$route['email'] = 'lawfirm-authentication/email';
$route['loginforgotpassword'] = 'lawfirm-authentication/loginforgotpassword';
$route['login/validate'] = 'lawfirm-authentication/login/validate';
$route['loginforgotpassword/doforget'] = 'lawfirm-authentication/loginforgotpassword/doforget';
$route['loginforgotpassword/forget'] = 'lawfirm-authentication/loginforgotpassword/forget';
$route['loginforgotpassword'] = 'lawfirm-authentication/loginforgotpassword';
$route['email'] = 'lawfirm-authentication/email';
$route['email/test'] = 'lawfirm-authentication/email/test';
$route['loginforgotpassword/tryko'] = 'lawfirm-authentication/loginforgotpassword/tryko';
$route['loginforgotpassword/reset_password_form/(:any)'] = 'lawfirm-authentication/loginforgotpassword/reset_password_form/$1';
$route['loginforgotpassword/reset_password_form/(:any)/(:any)'] = 'lawfirm-authentication/loginforgotpassword/reset_password_form/$1/$2';
$route['loginforgotpassword/update'] = 'lawfirm-authentication/loginforgotpassword/update';
$route['user/searchparticularuser'] = 'lawfirm-user/user/searchparticularuser';
/* End of file routes.php */
/* Location: ./application/config/routes.php */