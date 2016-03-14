<?php
function getHeader($startSession,$title){
	if($startSession)
		session_start();
	echo "
	<!doctype html>
	<html>
	<head>
	  <meta charset='utf-8'>
	  <title>".$title."</title>
	    <link rel='stylesheet' href='style/style.css'>
	  	<script type='text/javascript' src='js/script.js'></script>
	</head>
	<body>";
}
function getFooter(){
	echo "</body></html>";
}
