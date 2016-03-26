<?php
/**
 * Created by PhpStorm.
 * User: PC-Axel
 * Date: 23/03/2016
 * Time: 14:25
 */

function getHeader($startSession, $title){
    if ($startSession)
        session_start();
    echo "
	<!doctype html>
	<html>
	<head>
	  <meta charset='utf-8'>
	  <title>" . $title . "</title>
	    <link rel='stylesheet' href='./../css/bootstrap.min.css'>
	</head>
	<body>";
}
function getFooter(){
    echo "</body></html>";
}