<?php

session_start();

require "../app/controllers/init.php";

$url = $_GET['url'] ?? 'home';
$url = explode("/", $url);

$page_name = trim($url[0]);
$filename = "../app/views/".$page_name.".php";

if(file_exists($filename))
{
    require_once $filename; 
}else
{
    require_once "../app/views/404.php";
}

