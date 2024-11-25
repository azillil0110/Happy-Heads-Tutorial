<?php

function is_page($filename){
    $url = $_SERVER['REQUEST_URI'];

    if(strpos($url, $filename)){
        return true;
    }
    else return false;
}