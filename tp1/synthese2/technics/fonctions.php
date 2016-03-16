<?php
class calc{
	public function getHeader($startSession, $title){
		if ($startSession)
			session_start();
		echo "
	<!doctype html>
	<html>
	<head>
	  <meta charset='utf-8'>
	  <title>" . $title . "</title>
	    <link rel='stylesheet' href='css/style.css'>
	  	<script type='text/javascript' src='js/script.js'></script>
	</head>
	<body>";
	}
	public function getButton($value){
		echo "<td class=\"calc_td_btn\">
                	<input type=\"button\" class=\"calc_btn\" value=\"{$value}\">
                </td>";
	}
	public function getFooter(){
		echo "</body></html>";
	}

	public function getButtons(){
		$buttons=["NL","CE","←","%","+","EL",
			"NL","7","8","9","-","EL",
			"NL","4","5","6","x","EL",
			"NL","1","2","3","÷","EL",
			"NL","0","±",",","=","EL"];
		foreach($buttons as $bt){
			switch ($bt){
				case "NL":
					echo "<tr>";
					break;
				case "EL":
					echo "</tr>";
					break;
				default:
					$this->getButton($bt);
			}
		}
	}
}
