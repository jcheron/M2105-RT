<?php
/**
 * Created by PhpStorm.
 * User: heronj
 * Date: 09/03/2016
 * Time: 18:40
 */
function fact($nombre){
    $result=$nombre;
    while($nombre>1){
        $nombre--;
        $result*=$nombre;
    }
    return $result;
}

function factR($nombre){
    if($nombre==1)
        return 1;
    return $nombre*factR(--$nombre);
}