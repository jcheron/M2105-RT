<?php
/**
 * Created by PhpStorm.
 * User: heronj
 * Date: 16/03/2016
 * Time: 14:36
 */
function getQuestions(){
    $questions=array();

    $questions[]=["Quel est votre navigateur favori ?",
        ["multiple"=>false,
            "reponses"=>["Chrome"=>1,"Firefox"=>2,"IE"=>3,"Opera"=>4,"Autre"=>10]
        ]
    ];

    $questions[]=["Quels réseaux sociaux utilisez vous fréquemment ?",
        ["multiple"=>true,
            "reponses"=>["Facebook"=>1,"Twitter"=>2,"Badoo"=>3,"Google+"=>4,"Autre"=>10]
        ]
    ];
    return $questions;
}

function afficheQuestions($questions){
    $index=1;
    foreach($questions as $question){
        echo "<fieldset><legend>Question n°{$index}</legend>";
        echo $question[0];
        echo "<fieldset>";
        $rep=$question[1];
        $checked="";
        if($rep["multiple"])
            $checked="checked";
        echo "<input type='checkbox' {$checked}> Question à réponses multiples";
        echo "<ul>";
        foreach($rep["reponses"] as $k=>$v){
            echo "<li>{$k}</li>";
        }
        echo "</ul>";
        echo "</fieldset>";
        echo "</fieldset>";
        $index++;
    }
}

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

