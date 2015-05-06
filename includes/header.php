<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	spl_autoload_register(function($class) { include_once 'classes/'.$class.'.php'; });
   	$servicesusers = explode("/", $_SERVER["REQUEST_URI"]);
   	array_shift($servicesusers) ;
   	$countOfStreams = count($servicesusers);
   	if($countOfStreams == 1){ $cols = 12; }
   	else if($countOfStreams == 2){ $cols = 6; } // Improve this bit
   	else if($countOfStreams == 3){ $cols = 6; }
   	else if($countOfStreams == 4){ $cols = 6; }
   	else if($countOfStreams == 5){ $cols = 4; }
   	else if($countOfStreams == 6){ $cols = 4; }
   	else if($countOfStreams == 7){ $cols = 3; }
   	else if($countOfStreams == 8){ $cols = 3; }
   	else if($countOfStreams == 9){ $cols = 3; }
   	else { $cols = 4; }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Multistream</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<style>
			.video-wrapper{
				position:relative;
				padding-bottom: 56.25%;
			}
			.video-wrapper iframe, .video-wrapper object{
				position:absolute;
				width:100%;
				height:100%;
				top:0;
				left:0;
			}
		</style>
	</head>
	<body style="background-color:#000000;color:#FFFFFF;">