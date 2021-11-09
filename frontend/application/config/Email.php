<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// chec gmail setting by clicking this link //
/*
https://accounts.google.com/UnlockCaptcha
 */
$config = array(
   /* 'protocol' => 'smtp',
    'smtp_host' => 'smtp-mail.outlook.com',
    'smtp_port' => 25,
    'smtp_user' => 'propertyforyou9999@outlook.com',
    'smtp_pass' => 'A#123456a',
    'smtp_crypto' => 'ssl',
    'charset'=>'utf-8',
    'mailtype' => 'html',
    'smtp_timeout' => '4',
    'wordwrap' => TRUE*/
    'protocol' => 'smtp',
    'smtp_host' => 'smtp.gmail.com',
    'smtp_port' => 465,
    'smtp_user' => 'propertyforyou9999@gmail.com',
    'smtp_pass' => 'A@123456a',
    'smtp_crypto' => 'ssl',
    'charset'=>'utf-8',
    'mailtype' => 'html',
    'smtp_timeout' => '4',
    'wordwrap' => TRUE
);
?>