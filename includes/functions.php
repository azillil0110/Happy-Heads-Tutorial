<?php

function is_page($filename){
    $url = '/Happy%20Heads%20Tutorial' . $filename;

    if($url === $_SERVER['REQUEST_URI']){
        return true;
    }
    else return false;
}