<?php
/*
 * jQuery File Upload Plugin PHP Example
 * https://github.com/blueimp/jQuery-File-Upload
 *
 * Copyright 2010, Sebastian Tschan
 * https://blueimp.net
 *
 * Licensed under the MIT license:
 * https://opensource.org/licenses/MIT
 */

//error_reporting(E_ALL | E_STRICT);
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: *");
//ini_set( "display_errors", 1 );
require('UploadHandler.php');
//require('UploadHandlerSpecPath.php');

$options = array("the_folder" => $_GET['job_no'] + "");

if(!isset($_GET['job_no']))
	$upload_handler = new UploadHandler();
else
	$upload_handler = new UploadHandler($_GET['job_no']);
