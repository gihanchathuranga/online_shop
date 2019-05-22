<?php
/**********************************************\
* Copyright (c) 2013 Manolis Agkopian          *
* See the file LICENCE for copying permission. *
\**********************************************/

session_start();
define('INCLUDED',true);
require 'includes/core_func.php';
require 'includes/validation_func.php';
//
if (user_logged_in()) {
	header('../user_index.php');
       // header('../admin_index.php');
	die();
}


header('Location: user_index.php');

//header('Location: admin_index.php');
?>