<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| EMAIL CONFING
| -------------------------------------------------------------------
| Configuration of outgoing mail server.
| */

$config['protocol'] = 'smtp'; //mail, sendmail, or smtp

$config['smtp_host'] = 'ssl://smtp.googlemail.com'; // SMTP Server Address.
$config['smtp_user'] = 'prospteam@gmail.com'; //SMTP Username.
$config['smtp_pass'] = 'proweaver@2016!'; //SMTP Password.
$config['smtp_port'] = '465'; //SMTP Port.
$config['smtp_timeout'] = '30'; //SMTP Timeout (in seconds).

$config['charset'] = 'utf-8'; //Character set (utf-8, iso-8859-1, etc.).
$config['mailtype'] = 'html'; //Type of mail. If you send HTML email you must send it as a complete web page. Make sure you don’t have any relative links or relative image paths otherwise they will not work.
$config['wordwrap'] = TRUE; //Enable word-wrap.
$config['newline'] = "\r\n"; //Newline character. (Use “\r\n” to comply with RFC 822).
