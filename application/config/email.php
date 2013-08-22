<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
 
/*$config['protocol'] = 'sendmail';
$config['mailpath'] = '/usr/sbin/sendmail';
$config['charset'] = 'iso-8859-1';
$config['wordwrap'] = TRUE;
*/
$config['protocol'] = 'smtp';
$config['smtp_host']='ssl://smtp.googlemail.com';
$config['smtp_user']='ojt.amats2013@gmail.com';
$config['smtp_pass']='admin123!';
$config['smtp_port']=465;

/* End of file config.php */
/* Location: ./application/config/config.php */